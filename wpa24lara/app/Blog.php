<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    //
    public static $rules = [
    	'title' => 'required | min:4',
    	'body' => 'required'

    ];

    protected $fillable = ['title', 'body'];
    
}
