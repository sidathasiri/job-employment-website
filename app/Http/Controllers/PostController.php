<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\JobPost;
use App\Application;
use App\Payment;

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
        $this->validate($request, [
            'name' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'securityNumber' => 'required',
            'isEligible' => 'required',
            'haveCertificate' => 'required',
            'isConvicted' => 'required',
        ]);
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

    public function submitPayment(Request $request){

        $this->validate($request, [
            'type' => 'required',
            'name' => 'required',
            'email' => 'required',
            'accountNumber' => 'required',
            'routingNumber' => 'required',
            'bankName' => 'required',
            'address' => 'required',
            'question1' => 'required',
            'question1Ans' => 'required',
            'question2' => 'required',
            'question2Ans' => 'required',
            'question3' => 'required',
            'question3Ans' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $payment = new Payment([
            'type' => $request->input('type'),
            'holder_name' => $request->input('name'),
            'email' => $request->input('email'),
            'account_number' => $request->input('accountNumber'),
            'routing_number' => $request->input('routingNumber'),
            'bank_name' => $request->input('bankName'),
            'address' => $request->input('address'),
            'question1' => $request->input('question1'),
            'question1_ans' => $request->input('question1Ans'),
            'question2' => $request->input('question2'),
            'question2_ans' => $request->input('question2Ans'),
            'question3' => $request->input('question3'),
            'question3_ans' => $request->input('question3Ans'),
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ]);

        $payment->save();
        return redirect()->route('paymentDetails');
    }
}

            