<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use DB;

class employeeController extends Controller
{
    public function index()
    {
    	return view('employee.index');
    }

    function emailcheck(Request $request)
    {
	     if($request->get('email'))
	     {
		      $email = $request->get('email');
		      $data = DB::table("employees")
		       ->where('email', $email)
		       ->count();
		      if($data > 0)
		      {
		         echo 'not_unique';
		      }
		      else
		      {
		          echo 'unique';
		      }
	     }

    }

     public function addemp(Request $request)
     {

          $emp = new Employee();
    	  $emp->name = $request->name;
    	  $emp->email = $request->email;
    	  $emp->department = $request->department;
    	  $insert = $emp->save();

    	  return redirect()->back();

	        // if($insert){
	        //   return response()->json("success");
	        // }else{
	        //   return response()->json("error");
	        // }

     }


}//end class
