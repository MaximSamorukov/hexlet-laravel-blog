<?php

use App\Http\Controllers\PageContoller;
use App\Http\Controllers\ArticleController;
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

Route::get('/', [PageContoller::class, 'welcome']);

Route::get('about', [PageContoller::class, 'about']);

Route::get('news', [PageContoller::class, 'news']);

Route::resource('articles', ArticleController::class);

//Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');

//Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

//Route::patch('articles/{id}', [ArticleController::class, 'update'])->name('articles.update');

//Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');

//Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');

//Route::get('articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
