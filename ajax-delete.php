<?php

//$urltopost = 'http://192.168.1.242/Events_Management/public/index.php/api/exa/attendee/19/delete';
$base_url = 'http://192.168.1.242/Events_Management/public/index.php/api/exa/attendee/';

$did = $_POST['edit'];
$action = $_POST['action'];


if($action == 'post_edit')
{
   $delete_url = $base_url.'attendee/'.$did."/delete";
   
   if($delete_url)
   {
    echo 'success';
    
   }
}


?>