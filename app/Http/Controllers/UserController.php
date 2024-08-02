<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        echo "welcome to laravel controller";
    }

    //public function about(){
        //$title = "ABOUT US";
        // return view('user',compact('title'));
        //return view('inza')->with('title',$title);
   // }
    public function inu()
    {
        $title="Registration form";
        return view('inza')->with('title',$title);
    }
}
