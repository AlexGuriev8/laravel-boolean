<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students;

    public function __construct()
    {
        $this->students = config('students');
    }

    public function studenti(){
        $data = $this->students;
        return view('studenti',compact('data'));
    }

    public function show($id){
        if(!array_key_exists($id,$this->students)){
            abort(404);
        }
        $student = $this->students[$id];
       return  view('show',compact('student'));
    }
}
