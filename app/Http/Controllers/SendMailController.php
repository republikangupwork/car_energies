<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use DB;
use Validator;
use App\FormSubmit;

class SendMailController extends Controller
{

	public function sendmail(Request $request)
	{

		$r = $_REQUEST;

		if ($r['type'] == 'feedback') {
			$param = array();
			$param['name']  	= $r['name'];
		 	$param['email']  	= $r['email'];
		 	$param['subject'] 	= $r['subject']; 
		 	$param['message']   = $r['message']; 
		 	$param['type']   	= $r['type'];

		 	if ($param['email'] != '') {
		 		if (!filter_var($param['email'], FILTER_VALIDATE_EMAIL)) {
		 			return '0|Invalid Email Address.';
		 		}
		 	} else {
		 		return '0|Please Fill-up your Email';
		 	}

		 	if ($param['subject'] == '') {
		 		return '0|Please Fill-up the Subject Field';
		 	}

		 	if ($param['message'] == '') {
		 		return '0|Please Fill-up the Message Field';
		 	}

		 	try {
		 		$insert_feedback = DB::insert('INSERT INTO feedback (name,email,subject,message,`read`,archived) VALUES(?,?,?,?,?,?)', [$param['name'],$param['email'],$param['subject'],$param['message'],0,0]);
				$this->generate_feedback_mail($r);
				return '1|Message successfully sent!';
		 	} catch (Exeption $e) {
		 		return '0|'.$e;
		 	}

		} else {

		 	$validator = Validator::make($request->all(), [ 
	            'images.*' 	=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
				'images.*' 	=> 'required',
				'name' 		=> 'required',
				'email' 	=> 'required|regex:/^.+@.+$/i',
				'city' 		=> 'required',
				'country' 	=> 'required',
				'maker' 	=> 'required',
				'model' 	=> 'required',
				'year' 		=> 'required',
			]);

        	if ($validator->fails()) {
				return response()->json($validator->messages(),422);
			}

			$param = array();
			$param['name']   			= $r['name'];
		 	$param['email']  			= $r['email'];
		 	$param['country'] 			= $r['country']; 
		 	$param['state']   			= $r['state'];
		 	$param['city']   			= $r['city']; 
		 	$param['maker'] 			= $r['maker']; 
		 	$param['model']   			= $r['model'];
		 	$param['year']   			= $r['year']; 
		 	$param['type']   			= $r['type'];
		 	$param['transaction_id'] 	= mt_rand(1000000000, 9999999999);

		 	try {

		 		$check_if_free = $this->check_customer($param['email']);

		 		if (count($check_if_free) > 0) {
			 		if ($check_if_free[0]->tries > 3) {
			 			return 'not free';
			 		} else {
			 			$new_tries = $check_if_free[0]->tries + 1;
		 			 	$update_customer = DB::update('UPDATE customers SET tries = ? WHERE email = ?', [$new_tries, $param['email']]);
			 		}
		 		} else {
		 			$add_customer = DB::table('customers')->insert([
					    ['name' => $param['name'], 'email' => $param['email'], 'country' => $param['country'], 'state' => $param['state'], 'city' => $param['city'], 'tries' => 1],
					]);
		 		}

		 		$customer_detail = $this->check_customer($param['email']);
		 		$data = array();
	 		 	if ($request->hasfile('images')) {
		            foreach ($request->file('images') as $image) {
		                $name = explode('.', $image->getClientOriginalName());
		                $image->move(public_path().'/uploads/customers_submit/'.$param['email'], $name[0].'_'.$param['transaction_id'].'.'.$name[1]);  
		                $data[] = $name[0].'_'.$param['transaction_id'].'.'.$name[1];  
		            }
		        }
		 		$add_form_submit = DB::insert('INSERT INTO form_submit (customer_id,transaction_id,maker,model,year,images,`read`,archived) VALUES(?,?,?,?,?,?,?,?)', [$customer_detail[0]->id,$param['transaction_id'],$param['maker'],$param['model'],$param['year'],json_encode($data),0,0]);

		 		
				$send_mail = $this->generate_form_submit_mail($param);

				if ($send_mail == 'Message has been sent successfully') {
					return '1|Form successfully sent!';
				} else {
					return '0|Smtp Error! Please contact admin for this issue.';
				}

		 	} catch (Exeption $e) {
		 		return '0|'.$e;
		 	}
		}

	}

	public function check_customer($email)
	{
		$customer = DB::table('customers')->where('email',$email)->get();
		return $customer;
	}

	public function generate_feedback_mail($r)
	{
	    $name   	= $r['name'];
	 	$email  	= $r['email'];
	 	$subject 	= $r['subject']; 
	 	$message   	= $r['message'];

		$body = '<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->

		<style>
		body {
		    padding: 0;
		    margin: 0;
		}

		html { -webkit-text-size-adjust:none; -ms-text-size-adjust: none;}
		@media only screen and (max-device-width: 680px), only screen and (max-width: 680px) { 
		    *[class="table_width_100"] {
				width: 96% !important;
			}
			*[class="border-right_mob"] {
				border-right: 1px solid #dddddd;
			}
			*[class="mob_100"] {
				width: 100% !important;
			}
			*[class="mob_center"] {
				text-align: center !important;
			}
			*[class="mob_center_bl"] {
				float: none !important;
				display: block !important;
				margin: 0px auto;
			}	
			.iage_footer a {
				text-decoration: none;
				color: #929ca8;
			}
			img.mob_display_none {
				width: 0px !important;
				height: 0px !important;
				display: none !important;
			}
			img.mob_width_50 {
				width: 40% !important;
				height: auto !important;
			}
		}
		.table_width_100 {
			width: 680px;
		}
		</style>

		<div id="mailsub" class="notification" align="center">
		    <!--<div align="center">
		       <img src="https://www.carenergies.com/images/sample_1/logo/logo.png" width="250" alt="CAR ENERGIES" border="0"  /> 
		    </div> -->
		<table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;"><tr><td align="center" bgcolor="#eff3f8">


		<!--[if gte mso 10]>
		<table width="680" border="0" cellspacing="0" cellpadding="0">
		<tr><td>
		<![endif]-->

		<table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
		    <tr><td>
			<!-- padding -->
			</td></tr>
			<!--header -->
			<tr>
				<td align="center" bgcolor="#ffffff">
					<!-- padding -->
					<table width="90%" border="0" cellspacing="0" cellpadding="0">
						<tr><td align="center">
						    		<a href="#" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; float:left; width:100%; padding:20px;text-align:center; font-size: 13px;">
												<font face="Arial, Helvetica, sans-seri; font-size: 13px;" size="3" color="#596167">
												<img src="https://www.carenergies.com/images/sample_1/logo/logo.png" width="250" alt="CAR ENERGIES" border="0"  /></font></a>
								</td>
								<td align="right">
							<!--[endif]--><!-- 

						</td>
						</tr>
					</table>
					<!-- padding -->
				</td>
			</tr>
			<!--header END-->

			<!--content 1 -->
			<tr>
				<td align="center" bgcolor="#fbfcfd">
				    <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
						<table width="90%" border="0" cellspacing="0" cellpadding="0">
							<tr><td>
							    Name: <strong> '.$name.' </strong><br/>
							    Email: <strong> '.$email.' </strong><br/>
							    Subject: <strong> '.$subject.' </strong><br/>
				                Message: <p style="text-indent: 50px;"> '.$message.' </p><br/>
							</td></tr>
						</table>
					</font>
				</td>
			</tr>
			<!--content 1 END-->


			<!--footer -->
			<tr><td class="iage_footer" align="center" bgcolor="#ffffff">

				
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr><td align="center" style="padding:20px;flaot:left;width:100%; text-align:center;">
						<font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;">
						<span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
							&copy; Copyright 2019 | Design and Developed by Car Energies.
						</span></font>				
					</td></tr>			
				</table>
			</td></tr>
			<!--footer END-->
			<tr><td>

			</td></tr>
		</table>
		<!--[if gte mso 10]>
		</td></tr>
		</table>
		<![endif]-->
		 
		</td></tr>
		</table>
					';

		//PHPMailer Object
		$devemode = true;
		$mail = new PHPMailer($devemode);

		try {
			// $mail->SMTPDebug = 2;
			$mail->isSMTP();   
			if ($devemode) {
				$mail->SMTPOptions = [
					'ssl'=>[
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true	
					]
				];
			}

			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true; 
			$mail->Username = "carenergies@gmail.com";                 
			$mail->Password = "svauheqtghlphiav"; 
			$mail->SMTPSecure = "tls";  
			$mail->Port = 587; 
			$mail->setFrom('carenergies@gmail.com', 'CAR ENERGIES');
			$mail->AddReplyTo($email, $name);
			$mail->addAddress("carenergies@gmail.com");
			$mail->addAddress("republikangupwork@gmail.com");

			$mail->isHTML(true);

			$mail->Subject = $subject;
			$mail->Body = "<i>Mail body in HTML</i>";
			$mail->Body = $body;
			$mail->send();
			$mail->ClearAllRecipients();

		 	echo "Message has been sent successfully";

		} catch (Exception $e) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		}
 
	}

	public function generate_form_submit_mail($r)
	{
	    $name   	= $r['name'];
	 	$email  	= $r['email'];
	 	$country 	= $r['country']; 
	 	$state   	= $r['state'];
	 	$city   	= $r['city'];
	 	$maker 		= $r['maker']; 
	 	$model   	= $r['model'];
	 	$year   	= $r['year'];
	 	$trans_id 	= $r['transaction_id'];
	 	$type 		= $r['type'];
	 	$date 		= date('Y/m/d');

	 	$data = $this->get_image_upload($trans_id);
	 	$img_arr = array();
	 	foreach ($data as $value) {
	 		foreach (json_decode($value->images) as $key => $img) {
	 			$img_arr[] = $img;
	 		}
	 	}
	 	$possible_problems_list = DB::table('possible_problems')->get();

		$body = '
		<style>
			body {
			    padding: 0;
			    margin: 0;
			}

			html { -webkit-text-size-adjust:none; -ms-text-size-adjust: none;}
			@media only screen and (max-device-width: 680px), only screen and (max-width: 680px) { 
			    *[class="table_width_100"] {
					width: 96% !important;
				}
				*[class="border-right_mob"] {
					border-right: 1px solid #dddddd;
				}
				*[class="mob_100"] {
					width: 100% !important;
				}
				*[class="mob_center"] {
					text-align: center !important;
				}
				*[class="mob_center_bl"] {
					float: none !important;
					display: block !important;
					margin: 0px auto;
				}	
				.iage_footer a {
					text-decoration: none;
					color: #929ca8;
				}
				img.mob_display_none {
					width: 0px !important;
					height: 0px !important;
					display: none !important;
				}
				img.mob_width_50 {
					width: 40% !important;
					height: auto !important;
				}
			}
			.table_width_100 {
				width: 680px;
			}
		</style>

		<div id="mailsub" class="notification" align="center">
		    <!--<div align="center">
		       <img src="https://www.carenergies.com/images/sample_1/logo/logo.png" width="250" alt="CAR ENERGIES" border="0"  /> 
		    </div> -->
		<table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;"><tr><td align="center" bgcolor="#eff3f8">


		<!--[if gte mso 10]>
		<table width="680" border="0" cellspacing="0" cellpadding="0">
		<tr><td>
		<![endif]-->

		<table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
		    <tr><td>
			<!-- padding -->
			</td></tr>
			<!--header -->
			<tr><td align="center" bgcolor="#ffffff">
				<!-- pack(format)dding -->
				<table width="90%" border="0" cellspacing="0" cellpadding="0">
					<tr><td align="center">
					    		<a href="#" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; float:left; width:100%; padding:20px;text-align:center; font-size: 13px;">
											<font face="Arial, Helvetica, sans-seri; font-size: 13px;" size="3" color="#596167">
											<img src="https://www.carenergies.com/images/sample_1/logo/logo.png" width="250" alt="CAR ENERGIES" border="0"  /></font></a>
							</td>
							<td align="right">
						<!--[endif]--><!-- 

					</td>
					</tr>
				</table>
				<!-- padding -->
			</td></tr>
			<!--header END-->

			<!--content 1 -->
			<tr><td align="center" bgcolor="#fbfcfd">
			    <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
			    <form action="https://www.carenergies.com/api/submit/reply/'.base64_encode($trans_id).'" method="">
			    	<input type="hidden" name="type" value="'.$type.'">
				    <input type="hidden" name="country" value="'.$country.'">
				    <input type="hidden" name="state" value="'.$state.'">
				    <input type="hidden" name="city" value="'.$city.'">
					<table width="90%" border="0" cellspacing="0" cellpadding="0">
						<tr><td>
							<table width="100%">
								<tr>
									<td>
										<p>
											Case: #'.$trans_id.'
											<input type="hidden" name="case" value="'.$trans_id.'">
										</p>
									</td>
									<td align="right">
										<p style="margin-left:30px;">
											Date: '.$date.'
											<input type="hidden" name="date" value="'.$date.'">
										</p>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<p>
											Hi <strong>Car Energies,</strong>
											<input type="hidden" name="name" value="'.$name.'">
											<input type="hidden" name="email" value="'.$email.'">
										</p>
										<p style="text-indent:30px;">
											Please evaluate Mr/Ms. <strong>'.$name.'</strong> submitted form. Also see attached images below. Thank you. 
										<p/>
									</td>
								</tr>
							</table>
							<hr>
						    <table width="100%">
						    	<tr>
						    		<td align="left">
						    			<p>
						    				Maker: <strong>'.$maker.'</strong>
						    				<input type="hidden" name="maker" value="'.$maker.'">
						    			</p>
						    		</td>
						    		<td align="center">
						    			<p>
						    				Model: <strong>'.$model.'</strong>
						    				<input type="hidden" name="model" value="'.$model.'">
						    			</p>
						    		</td>
						    		<td align="right">
						    			<p>
						    				Year: <strong>'.$year.'</strong>
						    				<input type="hidden" name="year" value="'.$year.'">
						    			</p>
						    		</td>
						    	</tr>
						    	<tr>
						    		<td colspan="3">
						    			<hr>
						    			<p>Possible Problems: </p>
						    		</td>
						    	</tr>
						    	<tr>
						    		<td></td>
						    	</tr>
							    <tr>
							    	<td colspan="3">
							    		<table width="100%" id="possible_problems">';
							    			$count = 0;
											$total_id = count($possible_problems_list)-1;
											foreach ($possible_problems_list as $id => $val) {
												if ($count > 3) {
													$count = 0;
													$body .= '</tr>';
												}
												if ($count == 0) {
													$body .= '<tr>';
												}
												if ($id == $total_id) {
													$body .= '<td colspan="4"><input type="checkbox" name="possible_problems[]" value="'.$val->problem.'">'.$val->problem.'</td>';
													$body .= '</tr>';
												} else {
													$body .= '<td><input type="checkbox" name="possible_problems[]" value="'.$val->problem.'">'.$val->problem.'</td>';
												}
												
												$count++;
											}
			$body .=				    '</table>
							    	</td>
							    </tr>
							    <tr>
							    	<td colspan="2"></td>
							    	<td align="right"><button type="submit" style="font-size: 16px; background-color: #28a745; padding:10px 25px; color: #fff; border-radius: 5px; border: transparent;">Reply</button><br></td>
							    </tr>
							</table>
						</td></tr>
					</table>
				</form>
				</font>
			</td></tr>
			<!--content 1 END-->
			
			<!--footer -->
			<tr><td class="iage_footer" align="center" bgcolor="#ffffff">

				
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr><td align="center" style="padding:20px;flaot:left;width:100%; text-align:center;">
						<font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;">
						<span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
							&copy; Copyright 2019 | Design and Developed by Car Energies.
						</span></font>				
					</td></tr>			
				</table>
			</td></tr>
			<!--footer END-->
			<tr><td>

			</td></tr>
		</table>
		<!--[if gte mso 10]>
		</td></tr>
		</table>
		<![endif]-->
		 
		</td></tr>
		</table>
		';

		//PHPMailer Object
		$devemode = true;
		$mail = new PHPMailer($devemode);

		try{
			// $mail->SMTPDebug = 2;
			$mail->isSMTP();   
			if($devemode){
				$mail->SMTPOptions = [
					'ssl'=>[
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true	
					]
				];
			}

			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true; 
			$mail->Username = "carenergies@gmail.com";                 
			$mail->Password = "svauheqtghlphiav"; 
			$mail->SMTPSecure = "tls";  
			$mail->Port = 587; 
			$mail->setFrom('carenergies@gmail.com', 'CAR ENERGIES');
			$mail->AddReplyTo($email, $name);
			$mail->addAddress("carenergies@gmail.com");
			$mail->addAddress("republikangupwork@gmail.com");

			foreach ($img_arr as $img) {
				$mail->addAttachment('uploads/customers_submit/'.$email.'/'.$img);
			}

			$mail->isHTML(true);
			$mail->Subject = "FORM SUBMIT";
			$mail->Body = "<i>Mail body in HTML</i>";
			$mail->Body = $body;
			$mail->send();
			$mail->ClearAllRecipients();


		 	return "Message has been sent successfully";

		} catch (Exception $e) {
			return "Mailer Error: " . $mail->ErrorInfo;
		}
 
	}

	public function client_reply($r)
	{
		$name   		= $r['name'];
	 	$email  		= $r['email'];
	 	$country 		= $r['country']; 
	 	$state   		= $r['state'];
	 	$city   		= $r['city'];
	 	$maker 			= $r['maker']; 
	 	$model   		= $r['model'];
	 	$year   		= $r['year'];
	 	$trans_id 		= $r['transaction_id'];
	 	$type 			= $r['type'];
	 	$date 			= $r['date'];
	 	$pos_problems 	= $r['possible_problems'];

	 	$data = $this->get_image_upload($trans_id);
	 	$img_arr = array();
	 	foreach ($data as $value) {
	 		foreach (json_decode($value->images) as $key => $img) {
	 			$img_arr[] = $img;
	 		}
	 	}
	 	$possible_problems_list = DB::table('possible_problems')->get();

		$body = '
		<style>
			body {
			    padding: 0;
			    margin: 0;
			}

			html { -webkit-text-size-adjust:none; -ms-text-size-adjust: none;}
			@media only screen and (max-device-width: 680px), only screen and (max-width: 680px) { 
			    *[class="table_width_100"] {
					width: 96% !important;
				}
				*[class="border-right_mob"] {
					border-right: 1px solid #dddddd;
				}
				*[class="mob_100"] {
					width: 100% !important;
				}
				*[class="mob_center"] {
					text-align: center !important;
				}
				*[class="mob_center_bl"] {
					float: none !important;
					display: block !important;
					margin: 0px auto;
				}	
				.iage_footer a {
					text-decoration: none;
					color: #929ca8;
				}
				img.mob_display_none {
					width: 0px !important;
					height: 0px !important;
					display: none !important;
				}
				img.mob_width_50 {
					width: 40% !important;
					height: auto !important;
				}
			}
			.table_width_100 {
				width: 680px;
			}
		</style>

		<div id="mailsub" class="notification" align="center">
		    <!--<div align="center">
		       <img src="https://www.carenergies.com/images/sample_1/logo/logo.png" width="250" alt="CAR ENERGIES" border="0"  /> 
		    </div> -->
		<table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;"><tr><td align="center" bgcolor="#eff3f8">


		<!--[if gte mso 10]>
		<table width="680" border="0" cellspacing="0" cellpadding="0">
		<tr><td>
		<![endif]-->

		<table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
		    <tr><td>
			<!-- padding -->
			</td></tr>
			<!--header -->
			<tr><td align="center" bgcolor="#ffffff">
				<!-- pack(format)dding -->
				<table width="90%" border="0" cellspacing="0" cellpadding="0">
					<tr><td align="center">
					    		<a href="#" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; float:left; width:100%; padding:20px;text-align:center; font-size: 13px;">
											<font face="Arial, Helvetica, sans-seri; font-size: 13px;" size="3" color="#596167">
											<img src="https://www.carenergies.com/images/sample_1/logo/logo.png" width="250" alt="CAR ENERGIES" border="0"  /></font></a>
							</td>
							<td align="right">
						<!--[endif]--><!-- 

					</td>
					</tr>
				</table>
				<!-- padding -->
			</td></tr>
			<!--header END-->

			<!--content 1 -->
			<tr><td align="center" bgcolor="#fbfcfd">
			    <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
			    <form action="https://www.carenergies.com/api/submit/reply/'.base64_encode($trans_id).'" method="">
			    	<input type="hidden" name="type" value="'.$type.'">
				    <input type="hidden" name="country" value="'.$country.'">
				    <input type="hidden" name="state" value="'.$state.'">
				    <input type="hidden" name="city" value="'.$city.'">
					<table width="90%" border="0" cellspacing="0" cellpadding="0">
						<tr><td>
							<table width="100%">
								<tr>
									<td>
										<p>
											Case: #'.$trans_id.'
											<input type="hidden" name="case" value="'.$trans_id.'">
										</p>
									</td>
									<td align="right">
										<p>
											Date: '.$date.'
											<input type="hidden" name="date" value="'.$date.'">
										</p>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<p>
											Hi <strong>'.$name.',</strong>
											<input type="hidden" name="name" value="'.$name.'">
											<input type="hidden" name="email" value="'.$email.'">
										</p>
										<p style="text-indent:30px;">
											Attached is the evaluation report for the vehicle you submitted recently.
											Please note that after your third free report, you will be charged $4.99 for each extra vehicle evaluation.
											<br/><br/>We accept Paypal, Mc, and visa for your convenience.
										<p/>
									</td>
								</tr>
							</table>
							<hr>
						    <table width="100%">
						    	<tr>
						    		<td align="left">
						    			<p>
						    				Maker: <strong>'.$maker.'</strong>
						    				<input type="hidden" name="maker" value="'.$maker.'">
						    			</p>
						    		</td>
						    		<td align="center">
						    			<p>
						    				Model: <strong>'.$model.'</strong>
						    				<input type="hidden" name="model" value="'.$model.'">
						    			</p>
						    		</td>
						    		<td align="right">
						    			<p>
						    				Year: <strong>'.$year.'</strong>
						    				<input type="hidden" name="year" value="'.$year.'">
						    			</p>
						    		</td>
						    	</tr>
						    	<tr>
						    		<td colspan="3">
						    			<hr>
						    			<p>Possible Problems: </p>
						    		</td>
						    	</tr>
						    	<tr>
						    		<td></td>
						    	</tr>
							    <tr>
							    	<td colspan="3">
							    		<table width="100%" id="possible_problems">';							    			
							    			$count = 0;
											$total_id = count($possible_problems_list)-1;
											foreach ($possible_problems_list as $id => $val) {
												if (isset($r['prob_list'][$val->problem])) {
													$checked = 'checked';
												} else {
													$checked = '';
												}
												if ($count > 3) {
													$count = 0;
													$body .= '</tr>';
												}
												if ($count == 0) {
													$body .= '<tr>';
												}
												if ($id == $total_id) {
													$body .= '<td colspan="4"><input type="checkbox" value="'.$val->problem.'" '.$checked.'>'.$val->problem.'</td>';
													$body .= '</tr>';
												} else {
													$body .= '<td><input type="checkbox" value="'.$val->problem.'" '.$checked.'>'.$val->problem.'</td>';
												}
												
												$count++;
											}

							$body .= 	'</table>
							    	</td>
							    </tr>
							</table>
						</td></tr>
					</table>
				</form>
				</font>
			</td></tr>
			<!--content 1 END-->


			<!--footer -->
			<tr><td class="iage_footer" align="center" bgcolor="#ffffff">

				
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr><td align="center" style="padding:20px;flaot:left;width:100%; text-align:center;">
						<font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;">
						<span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
							&copy; Copyright 2019 | Design and Developed by Car Energies.
						</span></font>				
					</td></tr>			
				</table>
			</td></tr>
			<!--footer END-->
			<tr><td>

			</td></tr>
		</table>
		<!--[if gte mso 10]>
		</td></tr>
		</table>
		<![endif]-->
		 
		</td></tr>
		</table>
		';
		//PHPMailer Object
		$devemode = true;
		$mail = new PHPMailer($devemode);

		try {
			// $mail->SMTPDebug = 2;
			$mail->isSMTP();   
			if ($devemode) {
				$mail->SMTPOptions = [
					'ssl'=>[
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true	
					]
				];
			}

			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true; 
			$mail->Username = "carenergies@gmail.com";                 
			$mail->Password = "svauheqtghlphiav"; 
			$mail->SMTPSecure = "tls";  
			$mail->Port = 587; 
			$mail->setFrom('carenergies@gmail.com', 'CAR ENERGIES');
			$mail->AddReplyTo('carenergies@gmail.com', 'CAR ENERGIES');
			$mail->AddCC('republikangupwork@gmail.com');
			$mail->addAddress($email);

			foreach ($img_arr as $img) {
				$mail->addAttachment('uploads/customers_submit/'.$email.'/'.$img);
			}

			$mail->isHTML(true);
			$mail->Subject = "FORM SUBMIT";
			$mail->Body = "<i>Mail body in HTML</i>";
			$mail->Body = $body;
			$mail->send();
			$mail->ClearAllRecipients();

		 	return "Message has been sent successfully";

		} catch (Exception $e) {
			return "Mailer Error: " . $mail->ErrorInfo;
		}
	}

	public function get_image_upload($transaction_id)
	{
		$form_submit = FormSubmit::where('transaction_id',$transaction_id)->get();
		return $form_submit;
	}
}