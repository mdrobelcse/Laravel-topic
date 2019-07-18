<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
   {

       $students = Student::all();
   	   return view('customer.home',compact('students'));
   }

   public function addstudent(Request $request)
   {
        
       $student = new Student();
       $student->name = $request->name;
       $student->email = $request->email;
       $student->phone = $request->phone;
       $student->district = $request->district;
       $insert = $student->save();

        if($insert){
          return response()->json("success");
        }else{
          return response()->json("error");
        }
        

   }


   public function getstudentdata()
   {

      $students = Student::all();
      $sl = 1;
      return view("customer.response", compact("students", "sl"));

   }


   public function viewstudent(Request $request){

      $id = $request->id;
      $student = Student::find($id);
      return $student;
    }

    public function studentedit(Request $request)
    {

        $id = $request->id;
        $student = Student::find($id);
        return $student;

    } 


    public function updatestudent(Request $request)
    {
          $id = $request->id;
          $student= Student::find($id);
          $student->name = $request->name;
          $student->email = $request->email;
          $student->phone = $request->phone;
          $student->district = $request->district;
          $update = $student->save();

          if($update){
            return response()->json("success");
          }else{
            return response()->json("error");
          }

    }

    public function deletestudent(Request $get){
        $id = $get->id;
        $delete = Student::where("id", $id)->delete();
        if($delete){
          return response()->json("success");
        }else{
          return response()->json("error");
        }
    }


}//end class
