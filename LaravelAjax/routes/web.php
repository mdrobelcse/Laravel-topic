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



Route::get('/', 'StudentController@index');
Route::post('add/student/data', 'StudentController@addstudent');
Route::get('get/student/data', 'StudentController@getstudentdata');
Route::get('view/student/data', 'StudentController@viewstudent');
Route::get('edit/student/data', 'StudentController@studentedit');
Route::post('update/student/data', 'StudentController@updatestudent');
Route::get('delete/student/data', 'StudentController@deletestudent');


//user related route

Route::get('/user','CustomerController@index');
Route::post('/email_available/check', 'CustomerController@check')->name('email_available.check');


Route::post('/name_available/check', 'CustomerController@namecheck')->name('name_available.check');


Route::post('add/user/data', 'CustomerController@adduser');




//teacher related route


Route::get('/teacher','teacherController@index');
Route::get('add/teacher/data','teacherController@addteacher');


//selected option validation


Route::get('/selected','selectedController@index');
Route::get('/validateselect','selectedController@validatesectoption');



//all employee route


Route::get('/employee','employeeController@index');
Route::post('/email/check', 'employeeController@emailcheck')->name('email.check');
Route::post('add/emp/data', 'employeeController@addemp');