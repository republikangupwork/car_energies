<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Session;


class AdminController extends Controller
{
	public function loginPage()
    {
    	return view('admin.auth.login');
    }

	public function login(Request $request) 
	{

        if (Auth::attempt(array('email' => $request->get('email'),'password' => $request->get('password')))) {
            
            if (Auth::user()->admin == 1) {
            	session([ 
	                'email' => $request->get('email') 
	            ]);
	            return redirect('admin-page/');
            } else {
            	Session::flash('message', "Sorry! Please try again.");
            	return Redirect::back();
            }
            
        } else {
            Session::flash('message', "Sorry! Please try again.");
            return Redirect::back();
        }
    }

    public function logout() 
    {
    	Session::flush();
        Auth::logout();
        return Redirect::back();
    }

    public function dashboard()
    {
    	return view('admin.dashboard');
    }

    public function profile()
    {
    	return view('admin.profile');
    }

    public function inbox()
    {
        return view('admin.inbox');
    }
}
