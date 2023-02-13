<?php

use App\Http\Controllers\DftControll;
use App\Http\Controllers\HomeControll;
use App\Http\Controllers\SampelControll;
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
    return view('welcome');
    // return "Hello From Laravel";
});

Route::get('/aku', function () {
    return 10*8;
});

Route::get('sample', [SampelControll::class,'index']);

Route::get('view', [SampelControll::class,'showView']);

Route::get('home', [HomeControll::class,'showView']);

Route::get('form', [DftControll::class, 'showView']);

Route::get('/mahasiswa/create', 'MhsControll@create');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
