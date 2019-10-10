package com.example.myapplication;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class Home extends AppCompatActivity {
    //Central location for everything in app. Opens when user logs in or if they are already logged in.
//Displays location for currently selected child/slider to choose a different child
//dropdown menu which allows access to other areas of app (log out, settings, edit family, etc)
//Child portrait links to profile page
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);
    }
}
