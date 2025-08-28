<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home_view(){
        return view('frontend.pages.home');
    }
    public function commitee(){
        return view('frontend.pages.commitee');
    }
    public function notice(){
        return view('frontend.pages.notice');
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
    public function about(){
        return view('frontend.pages.about');
    }
    public function techteam(){
        return view('frontend.pages.techteam');
    }
}
