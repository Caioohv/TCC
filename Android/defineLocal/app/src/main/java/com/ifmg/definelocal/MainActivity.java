package com.ifmg.definelocal;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.TextView;

import java.util.Calendar;

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

        //localizarBtn = (Button) findViewById(R.id.localizarBtn);



    }
}