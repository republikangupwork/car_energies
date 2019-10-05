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
    public function checkout()
    {
        return view('landing_page.checkout');
    }

    public function submit_reply(Request $request)
    {
        print_r('Comming Soon.');
        // print_r($request['case']);
        // print_r($request['name']);
        // print_r($request['email']);
        // print_r($request['country']);
        // print_r($request['state']);
        // print_r($request['city']);
        // print_r($request['maker']);
        // print_r($request['model']);
        // print_r($request['year']);
        // print_r($request['possible_problems']);
    }
}
