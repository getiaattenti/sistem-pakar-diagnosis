<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Diagnose;

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

Route::get('/symptoms', function () {
    return view('symptoms.index');
});

Route::get('/diseases', function () {
    return view('disease.index');
});

Route::get('/diagnose', function () {
    return view('diagnose.index');
});

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
