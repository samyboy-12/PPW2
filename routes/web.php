<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nama', function () {
    return view('nama',[
        'name' =>'Samuel',
        'email'=>'samuelardianvalentinosilaban@mail.ugm.ac .id'
    ]);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/about', function () {
    return view('about');
});

  