<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class AdminController extends Controller
{
    public function getSignin(){
        return view('admin.signin');
    }

    public function postSignup(Request $request){
        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        $user->save();
    }

    public function postSignin(Request $request){
        
    }
}
