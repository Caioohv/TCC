package com.ifmg.tcc;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.app.ActivityCompat;

import android.Manifest;
import android.annotation.SuppressLint;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import com.google.android.gms.maps.CameraUpdate;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;

import java.util.Vector;

public class MainActivity extends AppCompatActivity implements OnMapReadyCallback {

    private TextView gpsTxt;
    private Button testeBtn;

    //atributos relacionados a posição
    private LocationListener gpsObservador;
    private Location posicaoAtual;
    private LocationManager configGPS;

    //atributos para o mapa GoogleMaps
    private GoogleMap mapaGoogle;

    //emular posições que podem vir do servidor
    Vector<LatLng> posicoes;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        gpsTxt = (TextView) findViewById(R.id.gpsTxt);
        testeBtn = (Button) findViewById(R.id.testeBtn);

        posicoes = new Vector<>();
        posicoes.add(new LatLng(-20.517834, -43.692137));
        posicoes.add(new LatLng(-20.520198, -43.689555));
        posicoes.add(new LatLng(-20.516962, -43.697570));

        configuraGPS();
        //configuraGMaps();
        cadastrarEventos();
    }

    private void cadastrarEventos(){
        testeBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                if(!posicoes.isEmpty()) {

                    MarkerOptions novoPonto = new MarkerOptions();
                    novoPonto.position(posicoes.remove(0));
                    mapaGoogle.addMarker(novoPonto);
                }
            }
        });
    }


    //instanciação do Listener e configurações
    private void configuraGPS() {

        //inicializando gps
        gpsObservador = new LocationListener() {
            @Override
            public void onLocationChanged(@NonNull Location location) {
                posicaoAtual = location;
                gpsTxt.setText(location.getLatitude() + " / " + location.getLongitude());
                configuraGMaps();
            }

            @Override
            public void onStatusChanged(String provider, int status, Bundle extras) {

            }
        };

        //definindo configurações e acessando o serviço de localização
        configGPS = (LocationManager) getSystemService(LOCATION_SERVICE);

        //conferindo permissões para GPS
        if (ActivityCompat.checkSelfPermission(this, Manifest.permission.ACCESS_FINE_LOCATION) != PackageManager.PERMISSION_GRANTED && ActivityCompat.checkSelfPermission(this, Manifest.permission.ACCESS_COARSE_LOCATION) != PackageManager.PERMISSION_GRANTED) {

            //requisitando autorizações
            ActivityCompat.requestPermissions(MainActivity.this, new String[]{Manifest.permission.ACCESS_FINE_LOCATION,
                    Manifest.permission.ACCESS_COARSE_LOCATION}, 100);
        }else{
            iniciaGPS();
        }
    }

    //Ppermissão concedida
    @Override
    public void onRequestPermissionsResult(int requestCode, @NonNull String[] permissions, @NonNull int[] grantResults) {
        super.onRequestPermissionsResult(requestCode, permissions, grantResults);

        //conferindo codigo de permissão
        if (requestCode == 100) {
            iniciaGPS();
        }
    }


    @SuppressLint("MissingPermission")
    private void iniciaGPS(){
        //definindo tempo para que ocorra atualizações
        configGPS.requestLocationUpdates(configGPS.GPS_PROVIDER, 5000, (float) 2, gpsObservador);

    }

    //configuração do google maps
    private void configuraGMaps(){

        //carregando o último fragmento adicionado
        SupportMapFragment fragmentoMapa = (SupportMapFragment) getSupportFragmentManager().findFragmentById(R.id.mapaGoogle);
        //sincronizando o mapa com essa classe
        fragmentoMapa.getMapAsync(this);

    }

    @Override
    public void onMapReady(GoogleMap googleMap) {
        mapaGoogle = googleMap;

        LatLng local = new LatLng(posicaoAtual.getLatitude(), posicaoAtual.getLongitude());
        mapaGoogle.addMarker(new MarkerOptions().position(local));
        mapaGoogle.moveCamera(CameraUpdateFactory.newLatLng(local));
    }
}