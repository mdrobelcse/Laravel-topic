<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Notifications\SendEmail;
use App\Notifications\CustomEmail;
use Illuminate\Support\Facades\Notification;
use Auth;

class EmailController extends Controller
{
   

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
       
        $users = User::latest()->get();
    	return view('index',compact('users'));
    }


    public function create()
    {
      
         return view('create');

    }

    public function send_email(Request $request)
    {
         // $user = User::find($request->id);
         // $data = [
         //     'product_price' => 200,
         //     'product_title'    => 'Samsung Galaxy'
         // ];
         //Send an email to user
        // Notification::send($user, new SendEmail($user,$data));

        
         $user = User::find($request->id);
         $data = [
             'product_price' => 200,
             'product_title'    => 'Samsung Galaxy'
         ];

         //Send an email to user
         $user->notify(new SendEmail($user, $data));



         return redirect()->route('index');
    }

    public function send_custom(Request $request)
    {
        $user = User::find(Auth::id());
        $order = new Order;
        $order->shipping_add = $request->shipping_add;
        $order->phone_num = $request->phone_num;
        $order->product_pri = $request->product_pri;
        $order->user_id = $user->id;
        $order->save();

         //Send an email to user
         $user->notify(new CustomEmail($user, $order));
         return redirect()->route('create');
    }


}//end class
