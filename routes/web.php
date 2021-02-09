<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/addPost',[PostController::class,'addPost']);

Route::post('/savedata',[PostController::class,'saveData'])->name('post.create');

Route::get('/showAllPost',[PostController::class,'getPost']);

Route::get('/showpost/{id}',[PostController::class,'getPostById']);

Route::get('/deletepost/{id}',[PostController::class,'deletePost']);

Route::get('/editpost/{id}',[PostController::class,'editPost']);

Route::get('/updatepost',[PostController::class,'updatePost'])->name('post.update');