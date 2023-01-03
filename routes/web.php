<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('beranda');
});

//route blog
Route::get('/profile','\App\Http\Controllers\BlogController@profile');
Route::get('/rekayasa-perangkat-lunak','\App\Http\Controllers\BlogController@kopetensi');
Route::get('/galeri','\App\Http\Controllers\BlogController@galeri');
