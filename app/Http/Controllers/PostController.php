<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\JobPost;
use App\Application;

class PostController extends Controller
{
    public function getIndex(){
        $posts = JobPost::all();
        return view('index', ['posts' => $posts]);
    }

    public function getAbout(){
        return view('about');
    }

    public function getApplication(){
        return view('applicationForm');
    }

    public function getPaymentDetails(){
        return view('paymentDetails');
    }

    public function submitApplicaiton(Request $request){
        $application = new Application([
            'name' => $request->input('name'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'social_security_number' => $request->input('securityNumber'),
            'is_work_eligible' => Input::get("isEligible"),
            'is_certificated' => Input::get("haveCertificate"),
            'is_convicted' => Input::get("isConvicted")
        ]);
        $application->save();
        return redirect()->route('applicaiton');
    }
}