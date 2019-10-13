<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Session;
use App\FormSubmit;
use App\Feedback;

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
        $formsubmits = FormSubmit::with('customer')->where('archived','0')->get();
        $feedbacks = Feedback::where('archived','0')->get();

        $fs_new_data = array();
        foreach ($formsubmits as $key => $formsubmit) {
            $fs_new_data[] = array(
                'id'        => $formsubmit->id,
                'name'      => $formsubmit->customer->name,
                'email'     => $formsubmit->customer->email,
                'maker'     => $formsubmit->maker,
                'model'     => $formsubmit->model,
                'year'      => $formsubmit->year,
                'read'      => $formsubmit->read,
                'images'    => json_decode($formsubmit->images),
                'created'   => $formsubmit->created_at
            );
        }

        $fb_new_data = array();
        foreach ($feedbacks as $key => $feedback) {
            $fb_new_data[] = array(
                'id'        => $feedback->id,
                'name'      => $feedback->name,
                'email'     => $feedback->email,
                'subject'   => $feedback->subject,
                'message'   => $feedback->message,
                'read'      => $feedback->read,
                'created'   => $feedback->created_at
            );
        }
        $data =  array_merge($fs_new_data,$fb_new_data);
        sort($data);

        return view('admin.mailbox.inbox', compact('data'));
    }

    public function sent()
    {   
        $data = array();
        return view('admin.mailbox.sent', compact('data'));
    }

    public function trash()
    {   
        $formsubmits = FormSubmit::with('customer')->where('archived',1)->get();
        $feedbacks = Feedback::where('archived',1)->get();

        $fs_new_data = array();
        foreach ($formsubmits as $key => $formsubmit) {
            $fs_new_data[] = array(
                'id'        => $formsubmit->id,
                'name'      => $formsubmit->customer->name,
                'email'     => $formsubmit->customer->email,
                'maker'     => $formsubmit->maker,
                'model'     => $formsubmit->model,
                'year'      => $formsubmit->year,
                'images'    => json_decode($formsubmit->images),
                'read'      => $formsubmit->read,
                'created'   => $formsubmit->created_at
            );
        }

        $fb_new_data = array();
        foreach ($feedbacks as $key => $feedback) {
            $fb_new_data[] = array(
                'id'        => $feedback->id,
                'name'      => $feedback->name,
                'email'     => $feedback->email,
                'subject'   => $feedback->subject,
                'message'   => $feedback->message,
                'read'      => $feedback->read,
                'created'   => $feedback->created_at
            );
        }
        $data =  array_merge($fs_new_data,$fb_new_data);
        sort($data);

        return view('admin.mailbox.archived', compact('data'));
    }

    public function moveToTrash(Request $request)
    {
        return $request;
    }
}
