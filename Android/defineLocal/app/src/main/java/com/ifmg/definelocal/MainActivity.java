package com.ifmg.definelocal;

import androidx.appcompat.app.AppCompatActivity;

import android.graphics.Typeface;
import android.os.Bundle;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.TextView;

import java.util.Calendar;
import java.util.Vector;

public class MainActivity extends AppCompatActivity {


    private TextView cidade,estado,rua, cep, numero;
    private Button localizarBtn;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        cidade = (TextView) findViewById(R.id.cidadeTxt);
        estado = (TextView) findViewById(R.id.estadoTxt);
        rua = (TextView) findViewById(R.id.ruaTxt);
        numero = (TextView) findViewById(R.id.numTxt);
        cep = (TextView) findViewById(R.id.cepTxt);

        localizarBtn = (Button) findViewById(R.id.localizarBtn);


        /*
        Vector<TextView> camposTexto = new Vector<>();
        camposTexto.add(cidade);
        camposTexto.add(estado);
        camposTexto.add(rua);
        camposTexto.add(numero);
        camposTexto.add(cep);

        defineTexto(camposTexto);
        */

    }


    private void defineTexto(Vector<TextView> vec){
        for(TextView v: vec){
            Typeface tf = Typeface.createFromAsset(getAssets(), "fonts/Poppins-Regular.ttf");
            v.setTypeface(tf);
        }
    }
}