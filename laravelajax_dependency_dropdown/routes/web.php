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



//ajax get and post request related route

Route::get('/', function () {
    return view('welcome');
});

Route::get('getpost/request', function () {
    return view('ajax_get_post_request.index');
});

Route::get('/getrequest', function () {
    
      if(Request::ajax()){

          return "get request data return successfully";

      }
 
});

Route::post('/register', function () {
    
      if(Request::ajax()){

         return var_dump(Response::json(Request::all()));

      }
});


/****************************************************/

//dependency dropdown menu related route

Route::get('/denpedencydropdown','DependencyController@index');

Route::get('findddistrict/{id}','DependencyController@finddistrict');