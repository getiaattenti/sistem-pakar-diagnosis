<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Diagnose;
use App\Http\Livewire\Result;
use App\Http\Livewire\History;

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

Route::get('/diagnoses', function () {
    return view('diagnose.index');
});

Route::get('/diagnostic-history',function () {
    return view('diagnose.history');
});

Route::get('/result/{id}', Result::class );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
