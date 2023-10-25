<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $data = [
        'message' => 'Hello world',
    ];


    return view('home', $data);
});

Route::get('/about', function () {

    $data = [
        'message' => 'This is an about page',
    ];


    return view('about', $data);
});

Route::get('/contacts', function () {

    $data = [
        'message' => 'This is a contacts page (call me maybe)',
    ];


    return view('contacts', $data);
});
