<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addController;

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

Route::get('/',[addController::class,'view']);

Route::post('add',[addController::class,'addTask'] );
Route::get('edit/{id}',[addController::class,'edit']);
Route::get('del/{id}',[addController::class,'del']);
Route::post('editdata',[addController::class,'editdata']);
