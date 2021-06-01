<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CategoryController;

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
Route::get('/', function(){
    return view('index');
});

//Routes for language model
//routes for language crud system
Route::get('/languages', [LanguageController::class, 'index']);
Route::get('/languages/create', [LanguageController::class, 'create']);
Route::post('/languages', [LanguageController::class, 'store']);
Route::get('/languages/{id}', [LanguageController::class, 'show']);
Route::get('/languages/{id}/edit', [LanguageController::class, 'edit']);
Route::patch('/languages/{id}', [LanguageController::class, 'update']);
Route::delete('/languages/{id}', [LanguageController::class, 'destroy']);

//Routes for category model
//routes for category crud system
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit']);
Route::patch('/categories/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

//for testing purpose
Route::get('feedback', function(){
    return "You've been clicked, punk";
});
