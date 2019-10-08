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
        $param = array();
        $param['transaction_id']    = $request['case'];
        $param['name']              = $request['name'];
        $param['email']             = $request['email'];
        $param['country']           = $request['country'];
        $param['state']             = $request['state'];
        $param['city']              = $request['city'];
        $param['maker']             = $request['maker'];
        $param['model']             = $request['model'];
        $param['year']              = $request['year'];
        $param['possible_problems'] = $request['possible_problems'];
        $param['date']              = $request['date'];
        $param['type']              = $request['type'];

        $problem_list = array();
        foreach ($param['possible_problems'] as $problem) {
            $problem_list[$problem] = $problem;
        }

        $param['prob_list'] = $problem_list;

        $send_mail_cont = new SendMailController();
        $send_reply = $send_mail_cont->client_reply($param);

        if ($send_reply == 'Message has been sent successfully') {
            return view('landing_page.reply', compact('param'));
        } else {
            return view('landing_page.reply_error');
        }

        
    }
}
