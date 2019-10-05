<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use DB;

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
		 		$insert_feedback = DB::insert('INSERT INTO feedback (name,email,subject,message) VALUES(?,?,?,?)', [$param['name'],$param['email'],$param['subject'],$param['message']]);
				$this->generate_feedback_mail($r);
				return '1|Message successfully sent!';
		 	} catch (Exeption $e) {
		 		return '0|'.$e;
		 	}

		} else {

			$param = array();
			$param['name']   			= $r['name'];
		 	$param['email']  			= $r['email'];
		 	$param['country'] 			= $r['country']; 
		 	$param['state']   			= $r['state'];
		 	$param['city']   			= $r['city']; 
		 	$param['maker'] 			= $r['maker']; 
		 	$param['model']   			= $r['model'];
		 	$param['year']   			= $r['year']; 
		 	$param['transaction_id'] 	= mt_rand(1000000000, 9999999999);

		 	if ($param['name'] == '') {
		 		return '0|Please Fill-up the Name Field';
		 	}
			if ($param['email'] != '') {
		 		if (!filter_var($param['email'], FILTER_VALIDATE_EMAIL)) {
		 			return '0|Invalid Email Address.';
		 		}
		 	} else {
		 		return '0|Please Fill-up your Email';
		 	}
		 	if ($param['country'] == '') {
		 		return '0|Please Fill-up the Country Field';
		 	}
		 	if ($param['city'] == '') {
		 		return '0|Please Fill-up the City Field';
		 	}
		 	if ($param['maker'] == '') {
		 		return '0|Please Fill-up the Maker Field';
		 	}
		 	if ($param['model'] == '') {
		 		return '0|Please Fill-up the Model Field';
		 	}
		 	if ($param['year'] == '') {
		 		return '0|Please Fill-up the Year Field';
		 	}
		 	if ($_FILES['front_of_car_with_hood_up']['name'] == '') {
		 		return '0|Please upload a Image for Front of car with Hood up';
		 	}
		 	if ($_FILES['rear_with_open_compartment']['name'] == '') {
		 		return '0|Please upload a Image for Rear with open compartment';
		 	}
		 	if ($_FILES['left_side_open_doors']['name'] == '') {
		 		return '0|Please upload a Image for Left side open doors';
		 	}
		 	if ($_FILES['left_side_view']['name'] == '') {
		 		return '0|Please upload a Image for Left Side View';
		 	}
		 	if ($_FILES['right_side_view']['name'] == '') {
		 		return '0|Please upload a Image for Right Side View';
		 	}
		 	if ($_FILES['front_view']['name'] == '') {
		 		return '0|Please upload a Image for Front View';
		 	}

		 	try {

		 		$check_if_free = $this->check_customer($param['email']);

		 		if (count($check_if_free) > 0) {
			 		if ($check_if_free[0]->tries > 3) {
			 			return 'not free';
			 		} else {
			 			$new_tries = $check_if_free[0]->tries + 1;
		 			 	// $update_customer = DB::update('UPDATE customers SET tries = ? WHERE email = ?', [$new_tries, $param['email']]);
			 		}
		 		} else {
		 			$add_customer = DB::isert('INSERT INTO customers (name,email,country,state,city,tries) VALUES (?,?,?,?,?,1)',[$param['name'],$param['email'],$param['country'],$param['state'],$param['city']]);
		 		}

		 		$customer_detail = $this->check_customer($param['email']);
		 		// print_r($customer_detail); die();
		 		$add_form_submit = DB::insert('INSERT INTO form_submit (customer_id,transaction_id,maker,model,year) VALUES(?,?,?,?,?)', [$customer_detail[0]->id,$param['transaction_id'],$param['maker'],$param['model'],$param['year']]);

				$this->generate_form_submit_mail($r);

				return '1|Form successfully sent!';

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
			$mail->SMTPDebug = 2;
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
			$mail->addAddress("iamjulius2607@gmail.com");

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

		// $id = substr(md5(uniqid(mt_rand(), true)) , 0, 8);
	    // $filestosend =  array();

	    // $allowed_ext = array('jpg','jpeg','docx','pdf');
	    // $destination = 'uploads/';
		// foreach ($_FILES as $key => $value) {

		// 		if(isset($_FILES[$key])){
		// 			$filename = $key.'_name';
		// 			$tmp_filename =$key.'_tmp_name';

		// 			$filename = $_FILES[$key]['name'];
		// 			$file_ext = end(explode(".", $filename));
		// 			$tmp_filename = $_FILES[$key]['tmp_name'];

		// 			if(isset($filename)){
		// 				if(!empty($filename)){


		// 					if(in_array($file_ext, $allowed_ext)){
								
		// 						$filestosend[] = $destination.$id.$filename;
		// 						if(move_uploaded_file($tmp_filename, $destination.$id.$filename)){
									
		// 						}
		// 					}else{
		// 						echo 'File Extension Invalid';
		// 					}
							
		// 				}
		// 			}
		// 	}
			
		// }



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
			#possible_problems tr td {
				word-wrap: break-word;
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
			    <form action="http://127.0.0.1:8000/api/submit/reply/XYZ000" method="">
				    <input type="hidden" name="country" value="'.$country.'">
				    <input type="hidden" name="state" value="'.$state.'">
				    <input type="hidden" name="city" value="'.$city.'">
					<table width="90%" border="0" cellspacing="0" cellpadding="0">
						<tr><td>
							<table width="100%">
								<tr>
									<td>
										<p>
											Case: 110-1001
											<input type="hidden" name="case" value="XYZ000">
										</p>
									</td>
									<td>
										<p>
											Date: 2019/10/03
											<input type="hidden" name="date" value="2019/10/03">
										</p>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<p>
											Hi <strong>'.$name.',</strong>
											<input type="hidden" name="name" value="'.$name.'">
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
						    		<td>
						    			<p>
						    				Maker: <strong>'.$maker.'</strong></span>
						    				<input type="hidden" name="maker" value="'.$maker.'">
						    			</p>
						    		</td>
						    		<td>
						    			<p>
						    				Model: <strong>'.$model.'</strong></span>
						    				<input type="hidden" name="model" value="'.$model.'">
						    			</p>
						    		</td>
						    		<td>
						    			<p>
						    				Year: <strong>'.$year.'</strong></span>
						    				<input type="hidden" name="year" value="'.$year.'">
						    			</p>
						    		</td>
						    	</tr>
						    	<tr>
						    		<td colspan="3">
						    			<hr>
						    			<p class="float-left">Possible Problems: </p>
						    		</td>
						    	</tr>
						    	<tr>
						    		<td></td>
						    	</tr>
							    <tr>
							    	<td colspan="3">
							    		<table width="100%" id="possible_problems">
							    			<tr>
							    				<td><input type="checkbox" name="possible_problems[]" value="Alternator"> Alternator</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Drive Shaft"> Drive Shaft</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Junction Box"> Junction Box</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Shift"> Shift</td>
							    			</tr>
							    			<tr>
							    				<td><input type="checkbox" name="possible_problems[]" value="Breaking System"> Breaking System</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Electrical System"> Electrical System</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Knuckle"> Knuckle</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Seats"> Seats</td>
							    			</tr>
							    			<tr>
							    				<td><input type="checkbox" name="possible_problems[]" value="Battery"> Battery</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Engine/Motor"> Engine/Motor</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Lights, Front"> Lights, Front</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Shock"> Shock Absorbers</td>
							    			</tr>
							    			<tr>
							    				<td><input type="checkbox" name="possible_problems[]" value="Cooling System"> Cooling System</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Exhaust System"> Exhaust System</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Lights, Back"> Lights, Back</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Steering Wheel"> Steering Wheel</td>
							    			</tr>
							    			<tr>
							    				<td><input type="checkbox" name="possible_problems[]" value="Cylinders"> Cylinders</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Fuses"> Fuses</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Moon/Sunroof"> Moon/Sunroof</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Tires"> Tires</td>
							    			</tr>
							    			<tr>
							    				<td><input type="checkbox" name="possible_problems[]" value="Crankshaft"> Crankshaft</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Four-wheel Drive"> Four-wheel Drive</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Mud Flap"> Mud Flap</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Transmission"> Transmission</td>
							    			</tr>
							    			<tr>
							    				<td><input type="checkbox" name="possible_problems[]" value="Clutch"> Clutch</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Frame"> Frame</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Muffler"> Muffler</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Trank"> Trank</td>
							    			</tr>
							    			<tr>
							    				<td><input type="checkbox" name="possible_problems[]" value="Computrer"> Computrer</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Fuel"> Fuel System</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Output Shaft"> Output Shaft</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Tail Pipe"> Tail Pipe</td>
							    			</tr>
							    			<tr>
							    				<td><input type="checkbox" name="possible_problems[]" value="Drum Brakes"> Drum Brakes</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Gear Box"> Gear Box</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Pedal"> Pedal</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Undercarriege Leak"> Undercarriege Leak</td>
							    			</tr>
							    			<tr>
							    				<td><input type="checkbox" name="possible_problems[]" value="Differential"> Differential</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Gasket"> Gasket</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Piston"> Piston</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Valve Visor"> Valve Visor</td>
							    			</tr>
							    			<tr>
							    				<td><input type="checkbox" name="possible_problems[]" value="Door Locks"> Door Locks</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Hood"> Hood</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Radiator"> Radiator</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Wheel"> Wheel</td>
							    			</tr>
							    			<tr>
							    				<td><input type="checkbox" name="possible_problems[]" value="Drive Belt"> Drive Belt</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Handle"> Handle</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Signals"> Signals</td>
							    				<td><input type="checkbox" name="possible_problems[]" value="Windows"> Windows</td>
							    			</tr>
							    			<tr>
							    				<td colspan="4"><input type="checkbox"> Other Sources of Negative Energies</td>
							    			</tr>
							    		</table>
							    	</td>
							    </tr>
							    <tr>
							    	<td colspan="2"></td>
							    	<td><button type="submit" style="font-size: 16px; background-color: #28a745; padding:10px 25px; color: #fff; border-radius: 5px; border: transparent;">Reply</button></td>
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
			$mail->SMTPDebug = 2;
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
			$mail->addAddress("iamjulius2607@gmail.com");

			// foreach ($filestosend as $key => $value) {
			// 	$mail->addAttachment($value);
			// }

			// $mail->addAttachment('uploads/'); 
			// $mail->addAttachment('/var/tmp/file.tar.gz');        // Add attachments
		 	// $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); 

			$mail->isHTML(true);


			$mail->Subject = "FORM SUBMIT";
			$mail->Body = "<i>Mail body in HTML</i>";
			$mail->Body = $body;
			$mail->send();
			$mail->ClearAllRecipients();

			//The name of the folder.
			// $folder = 'uploads';
			//Get a list of all of the file names in the folder.
			// $files = glob($folder . '/*');
		 
			//Loop through the file list.
			// foreach($files as $file){
			//     //Make sure that this is a file and not a directory.
			//     if(is_file($file)){
			//         //Use the unlink function to delete the file.
			//         unlink($file);
			//     }
			// }
		 	echo "Message has been sent successfully";

		} catch (Exception $e) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		}
 
	}

}