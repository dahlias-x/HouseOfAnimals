<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/home', 'ArticleController@showAll');
Route::get('/test', 'ArticleController@showCategory');
Route::get('/category', 'ArticleController@showCategory')->name('category');;
//Route::get('/createBlog', 'createBlogController@createBlog');
Route::get('/createBlog', 'TestController@showAll');

Route::get('/master', function () {
    return view('master');
});


Route::get('/create', function () {
    return view('createPost');
});



