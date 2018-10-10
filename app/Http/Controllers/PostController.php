<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\JobPost;

class PostController extends Controller
{
    public function getIndex(){
        $posts = JobPost::all();
        return view('index', ['posts' => $posts]);
    }

    public function getAbout(){
        return view('about');
    }

    public function getContact(){
        return view('contact');
    }
}
