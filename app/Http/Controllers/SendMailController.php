
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendMailController extends Controller
{

// error_reporting(1);
public function sendmail(Request $request){
	dd($request);


		require_once "vendor/autoload.php";

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;


		$id = substr(md5(uniqid(mt_rand(), true)) , 0, 8);

		$r = $_REQUEST;
			$fname   =$r['fname'];
		    $lname   =$r['lname'];
		    $address = $r['address']; 
		    $city    = $r['city'];
		    $state   = $r['state']; 
		    $zipcode = $r['zipcode']; 
		    $title   = $r['title']; 
		    $yearsofexp = $r['yearsofexp']; 
		    $phonenum = $r['phonenum']; 
		    $emailadd = $r['emailadd'];

		    $filestosend =  array();

		    $allowed_ext = array('jpg','jpeg','docx','pdf');
		    $destination = 'uploads/';
		foreach ($_FILES as $key => $value) {

				if(isset($_FILES[$key])){
					$filename = $key.'_name';
					$tmp_filename =$key.'_tmp_name';

					$filename = $_FILES[$key]['name'];
					$file_ext = end(explode(".", $filename));
					$tmp_filename = $_FILES[$key]['tmp_name'];

					if(isset($filename)){
						if(!empty($filename)){


							if(in_array($file_ext, $allowed_ext)){
								
								$filestosend[] = $destination.$id.$filename;
								if(move_uploaded_file($tmp_filename, $destination.$id.$filename)){
									
								}
							}else{
								echo 'File Extension Invalid';
							}
							
						}
					}
			}
			
		}



		$body = '<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->

		<style>
		/***
		User Profile Sidebar by @keenthemes
		A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
		Licensed under MIT
		***/

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

		<!--
		Responsive Email Template by @keenthemes
		A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
		Licensed under MIT
		-->

		<div id="mailsub" class="notification" align="center">
		    <!--<div align="center">
		       <img src="https://teamdriveaway.com/wp-content/uploads/2019/02/white-logo-w-sat-delivered.png" width="250" alt="Metronic" border="0"  /> 
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
											<img src="https://teamdriveaway.com/wp-content/uploads/2019/02/white-logo-w-sat-delivered.png" width="250" alt="Metronic" border="0"  /></font></a>
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
					    Dear Malik Kirby,<br/>
					    Hooray!! there is new applicant!!. Here are the details:<br/>
					    Name: <strong>'.ucwords($fname).' '.ucwords($lname).'</strong><br/>
					    Email: <strong>'.strtolower($emailadd).'</strong><br/>
		                Address: <strong>'.ucwords($address).', '.ucwords($city).', '.ucwords($state).', '.ucwords($zipcode).' </strong> <br/>
		                Job Title: <strong> '.ucwords($title).' </strong><br/>
		                Years of Experience: <strong> '.ucwords($yearsofexp).' </strong><br/>
		                Job Title: <strong> '.$phonenum.' </strong><br/><br><br>

					</td></tr>
					<tr><td align="center">
					Please check attachement for his/her D.O.T Physical, CDL picture and Resume.
						<!-- padding --><div style="height: 60px; line-height: 60px; font-size: 10px;"></div>
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
							2015 © CTM. ALL Rights Reserved.
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
			$mail->Username = "malikemailforwarder@gmail.com";                 
			$mail->Password = "ejohbqtoufmavrxq"; 
			$mail->SMTPSecure = "tls";  
			$mail->Port = 587; 
			$mail->setFrom($emailadd,strtoupper($fname).' '.strtoupper($lname));
			$mail->addAddress("admin@teamdriveway.com", "Malik Kirby");

			foreach ($filestosend as $key => $value) {
			$mail->addAttachment($value);
			}

			// $mail->addAttachment('uploads/'); 
			// $mail->addAttachment('/var/tmp/file.tar.gz');        // Add attachments
		 //    $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); 

			$mail->isHTML(true);


			$mail->Subject = "DriveWay Applicant";
			$mail->Body = "<i>Mail body in HTML</i>";
			$mail->Body = $body;
			$mail->send();
			$mail->ClearAllRecipients();

			//The name of the folder.
			$folder = 'uploads';
		//Get a list of all of the file names in the folder.
			$files = glob($folder . '/*');
		 
			//Loop through the file list.
			foreach($files as $file){
			    //Make sure that this is a file and not a directory.
			    if(is_file($file)){
			        //Use the unlink function to delete the file.
			        unlink($file);
			    }
			}
			 echo "Message has been sent successfully";


		}catch(Exception $e){
			echo "Mailer Error: " . $mail->ErrorInfo;
		}
 
	}




}