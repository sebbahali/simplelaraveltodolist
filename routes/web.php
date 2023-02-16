<?php

use App\Http\Controllers\todocontroller;
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

Route::get('list',[todocontroller::class,'index'])->name('list');
Route::get('todo',[todocontroller::class,'home']);
Route::post('todo',[todocontroller::class,'store'])->name('todo');
Route::get('del/{todo}',[todocontroller::class,'del'])->name('del');
Route::get('edit/{todo}',[todocontroller::class,'edit'])->name('edit');
Route::put('up/{todo}',[todocontroller::class,'up'])->name('up');
Route::get('main',[todocontroller::class,'main'])->name('main');
Route::get('search',[todocontroller::class,'search'])->name('search');