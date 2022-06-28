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
Route::group(['middleaware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});
Route::get('/posts', [App\Http\Controllers\PostsController::class, 'index']);
Route::get('/posts/new', [App\Http\Controllers\PostsController::class, 'new']);
Route::post('/posts/add', [App\Http\Controllers\PostsController::class, 'add']);
Route::get('/posts/{id}/edit', [App\Http\Controllers\PostsController::class, 'edit']);
Route::post('/posts/update/{id}', [App\Http\Controllers\PostsController::class, 'update']);
Route::get('/posts/delete/{id}', [App\Http\Controllers\PostsController::class, 'delete']);

