<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RssFeedController;

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

//route to home website
Route::get('/', [AppController::class, 'index'])->name('index');
//route to categories of app
Route::get('/appLanguage/{id}', [AppController::class, 'language'])->name('language');
//route to contents of app
Route::get('/appCategory/{id}', [AppController::class, 'category'])->name('category');

//Routes for language model
//routes for language crud system
Route::get('/languages', [LanguageController::class, 'index'])->name('languages');
Route::get('/languages/create', [LanguageController::class, 'create']);
Route::post('/languages', [LanguageController::class, 'store']);
Route::get('/languages/{id}', [LanguageController::class, 'show']);
Route::get('/languages/{id}/edit', [LanguageController::class, 'edit']);
Route::patch('/languages/{id}', [LanguageController::class, 'update']);
Route::delete('/languages/{id}', [LanguageController::class, 'destroy']);

//Routes for category model
//routes for category crud system
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit']);
Route::patch('/categories/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

//Routes for content model
//routes for content crud system
Route::get('/contents', [ContentController::class, 'index'])->name('contents');
Route::get('/contents/create', [ContentController::class, 'create']);
Route::post('/contents', [ContentController::class, 'store']);
Route::get('/contents/{id}', [ContentController::class, 'show']);
Route::get('/contents/{id}/edit', [ContentController::class, 'edit']);
Route::patch('/contents/{id}', [ContentController::class, 'update']);
Route::delete('/contents/{id}', [ContentController::class, 'destroy']);

//Routes for comment model
//routes for comment crud system
Route::get('/comments', [CommentController::class, 'index'])->name('comments');
Route::get('/comments/create', [CommentController::class, 'create']);
Route::post('/comments', [CommentController::class, 'store']);
Route::get('/comments/{id}', [CommentController::class, 'show']);
Route::get('/comments/{id}/edit', [CommentController::class, 'edit']);
Route::patch('/comments/{id}', [CommentController::class, 'update']);
Route::delete('/comments/{id}', [CommentController::class, 'destroy']);

//Route for news on the website
Route::get('/news', [NewsController::class, 'index'])->name('news');

//RSS feed route
Route::get('/feed', [RssFeedController::class, 'feed'])->name('feed');

//Authentication routes
Auth::routes();