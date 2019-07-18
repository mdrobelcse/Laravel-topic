<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class selectedController extends Controller
{
    public function index()
    {

    	  return view('selected.index');
    }

    public function validatesectoption(){

    	return view('validate_selectedoption.index');
    }
}
