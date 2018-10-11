<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\JobPost;
use Auth;

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
        $this->validate($request, [
            'email' => 'email | required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->route('dashboard');
        }
        //add error message when fail to login
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'approve' => 'Wrong password or this account not approved yet.',
        ]);
    }

    public function getProfile(){
        return view('admin.profile');
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('getsignin');
    }

    public function getDashboard(){
        return view('admin.dashboard');
    }

    public function getAddNew(){
        return view('admin.addjob');
    }

    public function updateEmail(Request $request){
        $user = Auth::user();
        $user->email = $request->input('email');
        $user->save();
        return redirect()->route('profile');
    }

    public function updatePassword(Request $request){
        $user = Auth::user();
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return redirect()->route('profile');
    }

    public function addJob(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $post = new JobPost([
            'title'=> $request->input('title'),
            'description' => $request->input('description')
        ]);

        $post->save();

        return redirect()->route('addnew');
    }
}
