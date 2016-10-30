<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;

class VueController extends Controller
{
    //
    public function vue(){
    	$title = "Vue Js";
    	$students = Student::get();

    	return view("main.index-vue")
    	->with('title', $title)
    	->with('students', $students);
    }
}
