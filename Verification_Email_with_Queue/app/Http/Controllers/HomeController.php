<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function verifyEmail($token = null)
    {
        if ($token === null) {
            session()->flash('message', 'Invalid token');
           return redirect()->route('login');
        }
        $user = User::where('email_verification_token', $token)->get();
        if ($user === null) {
            session()->flash('message', 'Invalid token');
            return redirect()->route('login');
        }
        $user->update([
            'email_verified' => 1,
            'email_verified_at' => Carbon::now(),
            'email_verification_token' => '',
        ]);


        session()->flash('message', 'Invalid token');
        return redirect()->route('login');

      

    }


    public function processLogin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $credentials = $request->except('_token');
        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            $user->last_login = Carbon::now();
            $user->save();
            if ($user->email_verified === 0) {
                session()->flash('type', 'danger');
                session()->flash('message', 'Your account is not activated. Please verify your email');
                auth()->logout();
                return redirect()->route('login');
            }
            return redirect()->route('dashboard');
        }
        session()->flash('type', 'danger');
        session()->flash('message', 'Credentials incorrect');
        return redirect()->back();
    }

}//end class
