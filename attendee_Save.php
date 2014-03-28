<?php
    $urltopost = "http://192.168.1.242/Events_Management/public/index.php/api/exa/attendee/add_attendee"; 
    
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
 						
	
		
//---------------------------------------------------------- GET Method-------------------------------------------------------//
/*		
    // $url = 'http://192.168.1.242/Event-Manager/public/index.php/api/exa/speakers/create';
	 $url = 'http://192.168.1.23/event_manager/cms1/index.php/admin/testsave';
		
	 $array=$_POST;
     
	 $data=array("event_id" => $array['event_id'],
				"SpeakerName" =>$array['SpeakerName'],
				"job_title" => $array['job_title'],
				"company_name" => $array['company_name'],
				"photo" => $array['photo'],
				"email" => $array['email'],
				"bio" => $array['bio'],
				"session_title" => $array['session_title'],
				"job_title" => $array['job_title'],
				"facebookAccount" => $array['facebookAccount'],
				"twitterAccount" => $array['twitterAccount']);

        
    $params = '';
    foreach($data as $key=>$value)
                $params .= $key.'='.$value.'&';
     
	     
    $params = trim($params, '&');

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url.'?'.$params); //Url together with parameters
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 30); //Timeout after 7 seconds
    curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    
    $result = curl_exec($ch);
    curl_close($ch);

   echo $result;		*/
//--------------------------------------------------------- End GET Method --------------------------------------------------------//


    /*$fields_string = '';

    foreach($data as $key=>$value){
    $fields_string[]=$key.'='.urlencode($value).'&amp;'; }
    $urlStringData = $url.'?'.implode('&amp;',$fields_string);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,30); # timeout after 10 seconds, you can increase it
    curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
    curl_setopt($ch, CURLOPT_URL, $urlStringData ); #set the url and get string together

    $return = curl_exec($ch);
    curl_close($ch);

    return $return;*/
?>

