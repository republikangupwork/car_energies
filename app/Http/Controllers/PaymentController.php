<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use Redirect;
use Input;
use URL;
use App\User;
use Stripe\Error\Card;
use Cartalyst\Stripe\Stripe;

class PaymentController extends Controller
{
    public function checkout()
    {
        return view('landing_page.checkout');
    }
    public function payment_store(REQUEST $r){

    		// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
		$stripe = Stripe::make(env('STRIPE_SECRET'));

		// Token is created using Checkout or Elements!
		// Get the payment token ID submitted by the form:
		$token = $_POST['stripeToken'];
		$charge = $stripe->charges()->create([
		    'amount' => 1.99,
		    'currency' => 'usd',
		    'description' => 'Example charge',
		    'source' => $token,
		]);
		 if($charge['status'] =='succeeded'){
		 	echo 'payment successfull!';
		 }

    	
    // 	$r = [
    //   "_token" => "sHyJ6nznARqn5p3zxuINOBHkdqjBHZGx7v6FL3hF",
    //   "paymentMethod" => "on",
    //   "cc_name" => "Freddie Unciano",
    //   "cc-number" => "4242424242424242",
    //   "year" => "2025",
    //   "month" => "12",
    //   "cc-cvv" => "456"
    // ];
    // $input =array_except($r,array('_token'));
    // $stripe = Stripe::make(env('STRIPE_SECRET'));
    // // try{
    // 	$token = $stripe->tokens()->create([
    // 		'card' => [
    // 			'number' 		=> $r['cc-number'],
    // 			'exp_month'		=> $r['month'],
    // 			'exp_year'		=> $r['year'],
    // 			'cvc'			=> $r['cc-cvv']
    // 		],
    // 	]);

    // 	$charge =$stripe->charges()->create([
    // 		'card' 			=> $token['id'],
    // 		'currency'		=> 'USD',
    // 		'amount'		=> 10.50,
    // 		'description'	=> 'Testing Add Money'
    // 	]);
    // } catch (Exception $e){
    // 	\Session::put('error', $e->getMessage());
    // 	// return redirect()->route('landing_page.checkout');
    // 	echo 'Error 1';
    // } catch(\Cartalyst\Stripe\Exception\CardErrorException $e){
    // 	\Session::put('error', $e->getMessage());
    // 	// return redirect()->route('landing_page.checkout');
    // 	echo 'Error 2';
    // } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e){
    // 	\Session::put('error', $e->getMessage());
    // 	// return redirect()->route('landing_page.checkout');
    // 	echo 'Error 3';
    // } 

    // dd($stripe);

    }
}
