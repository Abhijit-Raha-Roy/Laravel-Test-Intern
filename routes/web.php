<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
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
    return view('home');
});

Route::get('add',[ProductController::class,'add']);
Route::post('save',[ProductController::class,'save']);
Route::get('show',[ProductController::class,'show']);
Route::get('edit/{id}',[ProductController::class,'edit']);
Route::put('update',[ProductController::class,'update']);
Route::get('delete/{id}',[ProductController::class,'delete']);

Route::get('/search',[SearchController::class,'search']);