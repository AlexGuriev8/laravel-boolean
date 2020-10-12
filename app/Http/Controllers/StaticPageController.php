<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home (){
        return view('home'); //resourses
    }

    public function chisiamo (){
        return view('chisiamo'); //resourses
    }
}
