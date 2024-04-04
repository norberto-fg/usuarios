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
    return view('welcome');
});


Route::get('index', [App\Http\Controllers\SociosController::class, 'index'])->name('index');
Route::get('create', [App\Http\Controllers\SociosController::class, 'create'])->name('create');
Route::post('save', [App\Http\Controllers\SociosController::class, 'save'])->name('save');
Route::post('delete', [App\Http\Controllers\SociosController::class, 'delete'])->name('delete');