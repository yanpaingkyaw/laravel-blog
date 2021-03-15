<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Product\ProductController;


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

// ROUTE::GET('/', FUNCTION () {
//      RETURN VIEW('WELCOME');
// });

Route::get('/',[ArticleController::class,'index']);

// Route::get('/articles', function() {
//     return "Article List";
// });

// Route::get('/articles/detail', function() {
//     return "Article Detail";
// })->name('article.detail');

// Route::get('/articles/detail/{id}', function($id) {
//     return "Article Detail - $id";
// });

// Route::get('/article/more', function() {
//     return redirect()->route('article.detail');
// });

Route::get('/user/', [UserController::class, 'index']);

Route::get('/articles/',[ArticleController::class,'index']);
Route::get('/articles/detail/{id}',[ArticleController::class,'detail']);
Route::get('/articles/add',[ArticleController::class,'add'])->middleware('auth');
Route::post('/articles/add',[ArticleController::class,'create']);
Route::get('/articles/delete/{id}',[ArticleController::class,'delete']);
Route::post('comments/add',[CommentController::class,'create']);
Route::get('comments/delete/{id}',[CommentController::class,'delete']);


Route::get('/products/', [ProductController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
