<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Customer;

class CustomerController extends Controller
{
    

    public function index()
    {

    	 return view('user.index');
    }

    function check(Request $request)
    {
	     if($request->get('email'))
	     {
		      $email = $request->get('email');
		      $data = DB::table("customers")
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



      function namecheck(Request $request)
    {
	     if($request->get('name'))
	     {
		      $name = $request->get('name');
		      $data = DB::table("customers")
		       ->where('name', $name)
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


    public function adduser(Request $request)
    {


    	  $customer = new Customer();
    	  $customer->name = $request->name;
    	  $customer->email = $request->email;
    	  $customer->department = $request->department;
    	  $insert = $customer->save();

	        if($insert){
	          return response()->json("success");
	        }else{
	          return response()->json("error");
	        }
    }



}//end class
