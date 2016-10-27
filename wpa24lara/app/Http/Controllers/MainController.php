<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;

class MainController extends Controller
{
    //
    public function index() {
    	$title = "Student Lists";
    	$site_title = "Myanmar Links";

    	// get all students from Students Table (Database Query & Eloquent)
    	$students = Student::get();
   	
    	return view("main.index-data")
    	->with('title', $title)
    	->with("site_title", $site_title);
    }
}
