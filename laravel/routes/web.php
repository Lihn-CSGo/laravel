<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('starter');
});

Route::get('/home', function () {
    return view('index3');
})->name('home');

Route::view('/widgets', 'widgets')->name('widgets');
Route::view('/layout/{page}', 'layout')->name('layout');
Route::get('/charts/{page}', function ($page) {
    return view('charts.' . $page);
})->name('charts');

Route::view('/ui/{page}', 'ui')->name('ui');
Route::view('/forms/{page}', 'forms')->name('forms');
Route::view('/tables/{page}', 'tables')->name('tables');
Route::view('/examples/{page}', 'examples')->name('examples');
Route::view('/search/{page}', 'search')->name('search');
Route::get('/dashboard3', function () {
    return view('dashboard3');
})->name('dashboard3');