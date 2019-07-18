<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function verify($token)
    {
        $user = User::where('remember_token', $token)->first();
        if (!is_null($user)) {
            $user->status = 1;
            $user->remember_token = NULL;
            $user->save();
            return redirect('login');

        }else {

            return redirect('/');
        }

    }
}
