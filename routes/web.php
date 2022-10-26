<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EngController;

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

Route::get('/index','EngController@index')->name('engs.index');