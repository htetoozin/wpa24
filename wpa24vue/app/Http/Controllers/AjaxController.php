<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;

class AjaxController extends Controller
{
    public function data(){
    	$title = "Myanamr Links";
    	return view("main.index-data")
    	->with('title', $title);
    }
}
