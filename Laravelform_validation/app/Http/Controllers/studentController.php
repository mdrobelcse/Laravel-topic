<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;



class studentController extends Controller
{
    public function index()
    {
        return view('jquery_f_validation.index');
    }

    public function addstudent(Request $request)
    {
        $student = new Student();
    	$student->name = $request->name;
    	$student->email = $request->email;
    	$student->rollno = $request->rollno;
    	$student->regno = $request->regno;
    	$student->department = $request->department;
    	$student->password = $request->password;
    	$student->repassword = $request->repassword;
    	$insert = $student->save();
    
    	if($insert){
          return response()->json("success");
        }else{
          return response()->json("error");
        }
    }


   
    


}//end class
