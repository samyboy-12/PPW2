<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\BukuController;

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

Route::get('/buku', [BukuController::class, 'index']); 