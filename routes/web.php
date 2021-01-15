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

Route::get('/', [\App\Http\Controllers\homeController::class,'index']);

Route::get('/genre/{id}', [\App\Http\Controllers\GenreController::class,'genre']);
Route::get('/genres', [\App\Http\Controllers\GenreController::class,'genres']);

Route::get('/albums', [\App\Http\Controllers\AlbumController::class,'albums']);
Route::get('/album/{id}', [\App\Http\Controllers\AlbumController::class,'album']);

Route::get('/artists', [\App\Http\Controllers\ArtistController::class,'artists']);
Route::get('/artist/{id}', [\App\Http\Controllers\ArtistController::class,'artist'])->name('single.artist');

Route::get('/login', [\App\Http\Controllers\RegistrationController::class,'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\RegistrationController::class,'login_check']);

Route::get('/register', [\App\Http\Controllers\RegistrationController::class,'register_create']);
Route::post('/register', [\App\Http\Controllers\RegistrationController::class,'register_store']);

Route::get('/admin', [\App\Http\Controllers\AdminController::class,'adminView'])->name('admin');
Route::post('/admin', [\App\Http\Controllers\AdminController::class,'add'])->name('admin.add');
Route::delete('/admin', [\App\Http\Controllers\AdminController::class,'delete'])->name('admin.delete');

Route::post('/logout', [\App\Http\Controllers\RegistrationController::class,'logout'])->name('logout');
