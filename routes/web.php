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
Route::get('/category', 'ArticleController@showCategory')->name('category');
Route::get('/article/{id}', 'ArticleController@showCategory')->name('category');
Route::get('/master', function () {
    return view('master');
});







Route::get('/article/{id}','ArticleController@getusername');
Route::get('/article/{id}', 'ArticleController@view');
Route::delete('/article/{id}', 'ArticleController@delete');
Route::get('/create', 'CreatePostController@getCat');
Route::post('/create', 'CreatePostController@store')->name('addimage');
// Route::post('/comment', 'CreatePostController@storecomment')->name('text');