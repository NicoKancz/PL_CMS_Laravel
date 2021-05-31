<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

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

//for testing purpose
Route::get('feedback', function(){
    return "You've been clicked, punk";
});
