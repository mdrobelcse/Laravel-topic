<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {

        $data['articles'] = Cache('articles',function(){
           return Post::paginate(5);
        });

        return view('home',$data);
    }

    public function create()
    {

        $categories = Category::all();
        return view('create',compact('categories'));
    }

    public function store(Request $request)
    {


        $this->validate($request,[
            'title'    => 'required',
            'category' => 'required',
            'body'     => 'required',
        ]);


       $post = new Post();
       $post->title = $request->title;
       $post->category_id = $request->category;
       $post->body = $request->body;
       $post->save();
        return redirect()->back()->with('message', 'Post added!');
    }

}//end class
