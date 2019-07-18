<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Validator;

class teacherController extends Controller
{
    
   public function index()
   {

   	  return view('server_side_validation.index');
   }

   public function addteacher(Request $request)
   {


   	  //data validation


      $validate = Validator::make($request->all(),[

            "name"  => "required",
            "email" => "required|email|unique:teachers,email",
            "phone" => "required|numeric|digits_between:10,12",
            "rollno"  => "required|digits_between:5,8",
            "regno"  => "required|digits_between:6,8",
            "department"  => "required",
            "password"  => "required|digits_between:8,12"

      ], [

            "name.required" => "please enter your name",
            "email.required" => "please enter your email",
            "phone.required" => "please enter your phone",
            "rollno.required" => "please enter your roll number",
            "regno.required" => "please enter your registration number",
            "department.required" => "please select an department",
            "password.required" => "please enter your password",
            "email.email" => "please enter a valid email addredd",
            "email.unique" => "the email already exist",
            "phone.numeric" => "please enter a valid phone",
            "phone.digits_between" => "please enter a phone between 10-12 character",
            "rollno.digits_between" => "please enter roll between 5-8 character",
            "regno.digits_between" => "please enter registration between 6-8 character",
            "password.digits_between" => "please enter password between 8-12 character"

      ]);



      if($validate->passes()) {

      	  $teacher = new Teacher();
	   	  $teacher->name =  $request->name;
	   	  $teacher->email =  $request->email;
	   	  $teacher->phone =  $request->phone;
	   	  $teacher->rollno =  $request->rollno;
	   	  $teacher->regno =  $request->regno;
	   	  $teacher->department =  $request->department;
	   	  $teacher->password =  $request->password;
	   	  $insert = $teacher->save(); 

          return response()->json($insert);
      	 
      }else{

            return response()->json(["error" => $validate->errors()->all()]);

      }




		 
   }

}//end class
