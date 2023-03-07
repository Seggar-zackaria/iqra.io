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
Route::view('/admin', 'admin/Dashboards/Elearning');

Route::get('/', function () {
    return view('welcome');
});

Route::view('about-us','about');
Route::view('contact','contact');
Route::view('sign-in','sign-in');
Route::view('sign-up','sign-up');
Route::view('article','article');
Route::view('structors','structors');
Route::view('in-article','in-article');
Route::view('show-case','show-case');
Route::view('gallery','gallery');
Route::view('404','404');


Route::prefix('admin') -> group(function(){

    Route::prefix('Dashboards')->group(function () {
        Route::redirect('/', 'admin/Dashboards/Elearning');
        Route::view('Elearning', 'admin/dashboards/elearning');
        Route::view('School', 'admin/dashboards/school');
    });

    Route::prefix('Course')->group(function () {
        Route::redirect('/', 'admin/Course/Explore');
        Route::view('Explore', 'admin/course/explore');
        Route::view('List', 'admin/course/list');
        Route::view('Detail', 'admin/course/detail');
    });

    Route::prefix('Quiz')->group(function () {
        Route::redirect('/', 'admin/Quiz/List');
        Route::view('List', 'admin/quiz/list');
        Route::view('Detail', 'admin/quiz/detail');
        Route::view('Result', 'admin/quiz/result');
    });

    Route::prefix('Path')->group(function () {
        Route::redirect('/', 'admin/Path/List');
        Route::view('List', 'admin/path/list');
        Route::view('Detail', 'admin/path/detail');
    });

    Route::prefix('Instructor')->group(function () {
        Route::redirect('/', 'admin/Instructor/List');
        Route::view('List', 'admin/instructor/list');
        Route::view('Detail', 'admin/instructor/detail');
    });

    Route::prefix('Misc')->group(function () {
        Route::redirect('/', 'admin/Misc/Player');
        Route::view('Player', 'admin/misc/player');
        Route::view('Material', 'admin/misc/material');
        Route::view('Syllabus', 'admin/misc/syllabus');
    });

});
