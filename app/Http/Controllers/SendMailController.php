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
			$name   	= $r['name'];
		 	$email  	= $r['email'];
		 	$subject 	= $r['subject']; 
		 	$message   	= $r['message']; 

		 	if ($email != '') {
		 		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		 			return '0|Invalid Email Address.';
		 		}
		 	} else {
		 		return '0|Please Fill-up your Email';
		 	}

		 	if ($subject == '') {
		 		return '0|Please Fill-up the Subject Field';
		 	}

		 	if ($message == '') {
		 		return '0|Please Fill-up the Message Field';
		 	}

		 	try {
		 		$insert_feedback = DB::insert('INSERT INTO feedback (name,email,subject,message) VALUES(?,?,?,?)', [$name,$email,$subject,$message]);
				$this->generate_feedback_mail($r);
				return '1|Message successfully sent!';
		 	} catch (Exeption $e) {
		 		return '0|'.$e;
		 	}

		} else {

			$name   	= $r['name'];
		 	$email  	= $r['email'];
		 	$country 	= $r['country']; 
		 	$state   	= $r['state'];
		 	$city   	= $r['city']; 
		 	$maker 		= $r['maker']; 
		 	$model   	= $r['model'];
		 	$year   	= $r['year']; 
		 	$ip_add   	= $r['ip_address']; 

		 	if ($name == '') {
		 		return '0|Please Fill-up the Name Field';
		 	}
			if ($email != '') {
		 		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		 			return '0|Invalid Email Address.';
		 		}
		 	} else {
		 		return '0|Please Fill-up your Email';
		 	}
		 	if ($country == '') {
		 		return '0|Please Fill-up the Country Field';
		 	}
		 	if ($city == '') {
		 		return '0|Please Fill-up the City Field';
		 	}
		 	if ($maker == '') {
		 		return '0|Please Fill-up the Maker Field';
		 	}
		 	if ($model == '') {
		 		return '0|Please Fill-up the Model Field';
		 	}
		 	if ($year == '') {
		 		return '0|Please Fill-up the Year Field';
		 	}

		 	try {
		 		$insert_feedback = DB::insert('INSERT INTO form_submit (name,email,country,state,city,maker,model,year,ip_address) VALUES(?,?,?,?,?,?,?,?,?)', [$name,$email,$country,$state,$city,$maker,$model,$year,$ip_add]);
				$this->generate_form_submit_mail($r);
				return '1|Form successfully sent!';
		 	} catch (Exeption $e) {
		 		return '0|'.$e;
		 	}
		}

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
		<!DOCTYPE html>
		<html lang="en">
		<head>
	    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		    <title>CAR ENERGIES</title>

			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
	</head>
	<body>

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
			</td></tr>
			<!--header END-->

			<!--content 1 -->
			<tr><td align="center" bgcolor="#fbfcfd">
			    <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
				<table width="90%" border="0" cellspacing="0" cellpadding="0">
					<tr><td>
						<table width="100%">
							<tr>
								<td>
									<p>
										Case: 110-1001
									</p>
								</td>
								<td>
									<p>
										Date: 2019/10/03
									</p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p>
										Hi <strong>'.$name.',</strong>
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
					    				Maker: <strong>Toyota</strong></span>
					    			</p>
					    		</td>
					    		<td>
					    			<p>
					    				Model: <strong>Vios</strong></span>
					    			</p>
					    		</td>
					    		<td>
					    			<p>
					    				Year: <strong>2019</strong></span>
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
						    		<table width="100%">
						    			<tr>
						    				<td><input type="checkbox"> Alternator</td>
						    				<td><input type="checkbox"> Drive Shaft</td>
						    				<td><input type="checkbox"> Junction Box</td>
						    				<td><input type="checkbox"> Shift</td>
						    			</tr>
						    			<tr>
						    				<td><input type="checkbox"> Breaking System</td>
						    				<td><input type="checkbox"> Electrical System</td>
						    				<td><input type="checkbox"> Knuckle</td>
						    				<td><input type="checkbox"> Seats</td>
						    			</tr>
						    			<tr>
						    				<td><input type="checkbox"> Battery</td>
						    				<td><input type="checkbox"> Engine/Motor</td>
						    				<td><input type="checkbox"> Lights, Front</td>
						    				<td><input type="checkbox"> Shock Absorbers</td>
						    			</tr>
						    			<tr>
						    				<td><input type="checkbox"> Cooling System</td>
						    				<td><input type="checkbox"> Exhaust System</td>
						    				<td><input type="checkbox"> Lights, Back</td>
						    				<td><input type="checkbox"> Steering Wheel</td>
						    			</tr>
						    			<tr>
						    				<td><input type="checkbox"> Cylinders</td>
						    				<td><input type="checkbox"> Fuses</td>
						    				<td><input type="checkbox"> Moon/Sunroof</td>
						    				<td><input type="checkbox"> Tires</td>
						    			</tr>
						    			<tr>
						    				<td><input type="checkbox"> Crankshaft</td>
						    				<td><input type="checkbox"> Four-wheel Drive</td>
						    				<td><input type="checkbox"> Mud Flap</td>
						    				<td><input type="checkbox"> Transmission</td>
						    			</tr>
						    			<tr>
						    				<td><input type="checkbox"> Clutch</td>
						    				<td><input type="checkbox"> Frame</td>
						    				<td><input type="checkbox"> Muffler</td>
						    				<td><input type="checkbox"> Trank</td>
						    			</tr>
						    			<tr>
						    				<td><input type="checkbox"> Computrer</td>
						    				<td><input type="checkbox"> Fuel System</td>
						    				<td><input type="checkbox"> Output Shaft</td>
						    				<td><input type="checkbox"> Tail Pipe</td>
						    			</tr>
						    			<tr>
						    				<td><input type="checkbox"> Drum Brakes</td>
						    				<td><input type="checkbox"> Gear Box</td>
						    				<td><input type="checkbox"> Pedal</td>
						    				<td><input type="checkbox"> Undercarriege Leak</td>
						    			</tr>
						    			<tr>
						    				<td><input type="checkbox"> Differential</td>
						    				<td><input type="checkbox"> Gasket</td>
						    				<td><input type="checkbox"> Piston</td>
						    				<td><input type="checkbox"> Valve Visor</td>
						    			</tr>
						    			<tr>
						    				<td><input type="checkbox"> Door Locks</td>
						    				<td><input type="checkbox"> Hood</td>
						    				<td><input type="checkbox"> Radiator</td>
						    				<td><input type="checkbox"> Wheel</td>
						    			</tr>
						    			<tr>
						    				<td><input type="checkbox"> Drive Belt</td>
						    				<td><input type="checkbox"> Handle</td>
						    				<td><input type="checkbox"> Signals</td>
						    				<td><input type="checkbox"> Windows</td>
						    			</tr>
						    			<tr>
						    				<td colspan="4"><input type="checkbox"> Other Sources of Negative Energies</td>
						    			</tr>
						    		</table>
						    	</td>
						    </tr>
						</table>
					</td></tr>
				</table>
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