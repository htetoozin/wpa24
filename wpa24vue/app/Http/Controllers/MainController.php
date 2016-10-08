<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;


class MainController extends Controller
{
	public function index(){
		$title = "Myanmar Links";
		$body = "This is header and body";
		$students = Student::get();
		//var_dump($gear);

		return view("main.index")
		->with('title', $title)
		->with('body', $body)
		->with('students', $students);

	}    
}

