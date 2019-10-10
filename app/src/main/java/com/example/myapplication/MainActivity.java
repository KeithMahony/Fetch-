package com.example.myapplication;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
// Loads on opening of app
// Checks if user is logged in/offers log in functionality if not
// NFC log into account
// create account link
public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
}
