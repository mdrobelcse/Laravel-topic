<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use App\District;


class DependencyController extends Controller
{
    public function index()
    {
        
        $divisions = Division::all();
    	return view('dependency_dropdown.index',compact('divisions'));
    }

    public function finddistrict($id)
    {

    	$district = District::where('div_id',$id)->get();
        return response()->json($district);
    }
}
