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

Route::post('/wiki', 'WikiController@select');

Route::post('/wiki/register', 'WikiController@register');

Route::post('/wiki/delete', 'WikiController@delete');

Route::post('/user/review', 'ReviewController@review_user_select');

Route::post('/review/wiki', 'ReviewController@review_wiki_select');

Route::post('/wiki/review', 'ReviewController@result_chart');

Route::post('/review/store', 'ReviewController@register');

Route::post('review/delete', 'ReviewController@delete');


Route::get('/', function () {
    return view('welcome');
});