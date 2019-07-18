<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Auth;

class PostController extends Controller
{
    //


    public function __construct(){


        $this->middleware('auth');

    }

    public function store(Request $request){

         
         //validation

    	$this->validate($request,[

    		'title'       => 'required',
            'body'        => 'required'
    		 
    		 
    	]);


    	  $post = new Post();
    	  $post->title        = $request->title;
    	  $post->body         = $request->body;
    	  $post->category_id  = $request->category_id;
    	  $post->user_id      = Auth::id();
    	  $post->save();

    	 // return redirect()->route('addpost');


         
            $notification = array(
                'message' => 'post added successfully!',
                'alert-type' => 'success'
            );

          return back()->with($notification);


    }




    public function category($id){

           $category = Category::find($id);
    	   return view('postby_cat', compact('category'));
    }


    public function postbyuser(){
  

        $user = Auth::user();
    	return view('postbyuser',compact('user'));
    }


}//end class
