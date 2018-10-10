<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function getIndex(){
        return view('index');
    }

    public function getAbout(){
        return view('about');
    }
}
