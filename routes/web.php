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

Route::get('/',[App\Http\Controllers\IndexController::class,'showIndex'])->name('index');
Route::get('/pageFoto',[App\Http\Controllers\fotoPageController::class,'showPage'])->name('pageFoto');
Route::get('/pageVideo',[App\Http\Controllers\videoPageController::class,'showPage'])->name('pageVideo');
Route::get('/foto',[App\Http\Controllers\fotoPageController::class,'showFotoPage'])->name('foto');
Route::get('/video',[App\Http\Controllers\videoPageController::class,'showVideoPage'])->name('video');
Route::get('/checkFoto',[App\Http\Controllers\checkFotoController::class,'showPage'])->name('checkFoto');
Route::post('/checkFoto/check',[App\Http\Controllers\checkFotoController::class,'ShowCheck'])->name('check');
Route::get('/loadFoto',[App\Http\Controllers\loadFotoController::class,'showPage'])->name('loadFoto');
Route::post('/loadFoto/load',[App\Http\Controllers\loadFotoController::class,'load'])->name('load');
Route::get('/admin',[App\Http\Controllers\adminController::class,'login'])->name('adminLogin');
Route::post('/admin/login',[App\Http\Controllers\adminController::class,'checkLogin'])->name('checkLogin');
Route::get('/admin/adminPage',[App\Http\Controllers\adminController::class,'showAdminPage'])->name('adminPage');
