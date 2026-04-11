<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/curso', function(){
    return view('curso');
});

Route::get('/vestibulinho', function(){
    return view('vestibulinho');
});

Route::get('/departamento', function(){
    return view('departamento');
});

Route::get('/evento', function(){
    return view('evento');
});
