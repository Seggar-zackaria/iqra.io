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
    return view('welcome');
});

Route::view('about-us','about');
Route::view('contact','contact');
Route::view('sign-in','sign-in');
Route::view('sign-up','sign-up');
Route::view('article','article');
Route::view('in-article','in-article');
Route::view('show-case','show-case');
Route::view('gallery','gallery');
Route::view('404','404');
