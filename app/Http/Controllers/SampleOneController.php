<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleOneController extends Controller
{
    public function index()
    {
    	return view('landing_page.sample_1.home');
    }

    public function about()
    {
    	return view('landing_page.sample_1.about');
    }

    public function benefits()
    {
    	return view('landing_page.sample_1.benefits');
    }

    public function services()
    {
    	return view('landing_page.sample_1.services');
    }

    public function submit()
    {
    	return view('landing_page.sample_1.submit');
    }
}
