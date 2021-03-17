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
    return view('posts');
});
Route::get('/add-post', 'PostController@addPost');
Route::post('/add-post', 'PostController@createPost')->name('post.add');
Route::get('/posts', 'PostController@displayPosts');
Route::get('/delete-post/{id}', 'PostController@deletePost');
Route::get('/update-post', 'PostController@updatepost')->name('post.update');
Route::get('/edit-post/{id}', 'PostController@updateform');
