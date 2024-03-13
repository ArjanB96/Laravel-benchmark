<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
    //return 'Hello from HomeController!';
//});

Route::get('/',
    [App\Http\Controllers\HomeController::class, 'index']);
//Route::get('/', 'HomeController@index');

Route::get('users',
    [App\Http\Controllers\UserController::class, 'index']);
//Route::get('users', 'UsersController@index');

Route::get('posts',
    [App\Http\Controllers\PostController::class, 'index']);
//Route::get('posts', 'PostController@index');

Route::get('comments',
    [App\Http\Controllers\CommentController::class, 'index']);
//Route::get('comments', 'CommentController@index');

Route::get('frameworkdata', 'App\Http\Controllers\FrameworkDataController@index');
Route::get('test', 'TestController@index');

