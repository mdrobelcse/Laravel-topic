<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'HomeController@post')->name('post');

Route::get('/addpost', 'HomeController@addpost')->name('addpost');

Route::post('/store', 'PostController@store')->name('store');
Route::post('/store', 'PostController@store')->name('store');

Route::get('/category/{id}', 'PostController@category')->name('category');


// Route::get('/category/{id}', 'PostController@category')->name('category');


Route::get('/postbyuser', 'PostController@postbyuser')->name('postbyuser');


// Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'], function (){
    
//     Route::resource('test','TestController');
    
// });


Route::get('/test', function () {
    return view('test');
});

 Route::post('/submitdata', 'TestController@testfunction')->name('submitdata');