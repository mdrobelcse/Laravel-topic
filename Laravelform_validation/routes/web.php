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

// Route::get('/', function () {
//     return view('welcome');
// });

//all route for client side validation(jquery)
Route::get('/','studentController@index');
Route::post('add/student/data','studentController@addstudent')->name('addstudent');
 

//all route for server side validation(laravel)

Route::get('/teacher','teacherController@index');
Route::post('add/teacher/data','teacherController@addteacher');


//all route for client side validation (javascript)

Route::get('/employee',function(){

	 return view('javascript_form_val.index');
});


Route::get('/user',function(){

	 return view('javascript_form_val.user');
});



//all route for tostr js notification

 