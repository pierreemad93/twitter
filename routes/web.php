<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
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
});
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard');
    Route::resource('/posts' , PostController::class);
    Route::post('/comments' , [CommentController::class , 'store'])->name('comments.store');
});

require __DIR__.'/auth.php';
