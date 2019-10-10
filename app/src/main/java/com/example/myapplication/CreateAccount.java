package com.example.myapplication;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
//SHOCKINGLY, creates a new account, stores in database
//opens Family page on creation
public class CreateAccount extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_create_account);
    }
}
