<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
    	return view('landing_page.home');
    }

    public function about()
    {
    	return view('landing_page.about');
    }

    public function benefits()
    {
    	return view('landing_page.benefits');
    }

    public function services()
    {
    	return view('landing_page.services');
    }

    public function submit()
    {
    	return view('landing_page.submit');
    }
}
