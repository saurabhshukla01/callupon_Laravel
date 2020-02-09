<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/petition/start_petition', function () {
    return view('start_petition');
});

Route::get('/petition/my_petition_list', function () {
    return view('my_petition_list');
});

Route::get('/petition/petition-list', function () {
    return view('browse');
});

Route::get('/edit-petition', function () {
    return view('edit-petition');
});

Route::get('/edit-profile', function () {
    return view('edit-profile');
});





