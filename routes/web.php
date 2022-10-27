<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EngController;
use App\Http\Controllers\DetailController;

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
    return view('welcome');
});

Route::get('/create-file', function () {
    return view('engs.create-file');
});

Route::get('/create-word', function () {
    return view('engs.create-word');
});

Route::get('/index', function () {
    return view('engs.index');
});

Route::get('/show', function () {
    return view('engs.show');
});

// Route::get('/create-file', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/word','EngController@word')->name('engs.word');

Route::get('/file','EngController@file')->name('engs.file');

Route::get('/show','DetailController@show')->name('engs.show');

Route::get('/index','DetailController@index')->name('engs.index');

Route::get('/welcome','EngController@welcome')->name('welcome');

