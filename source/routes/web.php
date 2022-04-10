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

Route::group(['middleware' => 'HtmlMinifier'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{slug}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

});
Route::middleware(['auth:sanctum', 'verified'])
    ->prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->as('admin.')
    ->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');
//        Route::get('/dashboard', function () {
//            return view('admin.dashboard');
//        })->name('dashboard');

        Route::group(['prefix' => '{category}'], function () {
            Route::resource('posts', 'PostController');
        });
    });
