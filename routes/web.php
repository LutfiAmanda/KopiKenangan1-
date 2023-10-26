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
Route::view('dasboardv1', 'dasboardv1');

Route::view('dasboardv2', 'dasboardv2');

Route::view('dasboardv3', 'dasboardv3');

Route::view('staf', 'staf');

Route::view('menu', 'menu');


Route::get('/', function () {
    return view('home');
});

Route::get('admin', function () {
    return view('admin');
});

