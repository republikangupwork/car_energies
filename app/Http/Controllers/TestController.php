<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function index() 
    {
    	$data = Test::get();

    	return view('test',compact('data'));
    }
}
