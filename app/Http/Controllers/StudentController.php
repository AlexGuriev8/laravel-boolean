<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{


public function studenti(){
    $data = Student::all();
    return view('studenti',compact('data'));
}

public function show($id){
        $student = Student::find($id);
        return view('show',compact('student'));
}
    //METODO USANDO CONFIG
    /* protected $students;

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
    } */
}
