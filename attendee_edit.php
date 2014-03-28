<?php
    $urltopost = "http://192.168.1.242/Events_Management/public/index.php/api/exa/attendee/id"; 
    
    $array=$_POST;

//first_name=hgfhgf&last_name=hgfhgf&email=hfghgf&mobile_number=9826542311&job_title=gfhgfh&company_name=gfhgfh&photo=vcbf&event_id=1&qr=fcgf&gender=male
					  
	$datatopost=array("first_name" =>$array['first_name'],
			    "last_name" => $array['last_name'],
			    "email" => $array['email'],
			    "mobile_number" => $array['mobile_number'],
			    "job_title" => $array['job_title'],
			    "company_name" => $array['company_name'],
			    "photo" => $array['photo'],
			    "event_id" => $array['event_id'],
			    "qr" => $array['qr'],
			    "gender" => $array['gender']);
 
	$ch =curl_init($urltopost);
	curl_setopt ($ch, CURLOPT_POST, true);
	curl_setopt ($ch, CURLOPT_POSTFIELDS, $datatopost);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
	$returndata = curl_exec ($ch);
    
	header("location:Attendee.php")	