<?php

use App\Http\Controllers\PostController;
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
})->middleware(['auth'])->name('/');

Route::get('/wishlist', function () {
    return view('wishlist');
})->middleware(['auth'])->name('wishlist');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/posts.index', function () {
    return view('posts.index');
})->middleware(['auth'])->name('posts.index');



Route::resource('posts', PostController::class);

require __DIR__.'/auth.php';
