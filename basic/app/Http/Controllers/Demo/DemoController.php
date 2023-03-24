<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{

    public function HomeMain(){
        return view('frontend.index');
    }// end mehtod 


    public function Index(){
        return view('about');
    }//and method

    public function contectMethod(){
        return view('contect');
    }//and method
}
