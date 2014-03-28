<!DOCTYPE html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8" />
<title>Event Manager</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN PLUGIN CSS -->
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- END PLUGIN CSS -->
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
<!-- CHANGE THEAM CSS -->
<link href="assets/css/changetheam.css" rel="stylesheet" type="text/css"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse ">
 <!-- BEGIN TOP NAVIGATION BAR -->
  
  
  
  <div class="navbar-inner">
    <div class="header-seperation">
      <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
        <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" >
          <div class="iconset top-menu-toggle-white"></div>
          </a> </li>
      </ul>
      <!-- BEGIN LOGO --> 
      <a href="index.html"><img src="assets/img/logo.png" class="logo"  data-src="assets/img/logo.png" data-src-retina="assets/img/logo.png" /></a> 
      <!-- END LOGO --> 
      
    </div>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <div class="header-quick-nav" > 
      <!-- BEGIN TOP NAVIGATION MENU -->
       <div class="pull-left">
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
            <div class="iconset top-menu-toggle-dark"></div>
            </a> </li>
        </ul>
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-reload"></div>
            </a> </li>
          <li class="quicklinks"> <span class="h-seperate"></span></li>
        
          <div class="input-prepend inside search-form no-boarder"> <span class="add-on"> <a href="#" class="" >
            <div class="iconset top-search"></div>
            </a></span>
            <input name="" type="text"  class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
          </div>
        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU --> 
      
      <!-- BEGIN CHAT TOGGLER -->
      <div class="pull-right"> 
		<div class="chat-toggler">	
				<a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom" 
						   data-content='
						<div style="width:300px" class="scroller" data-height="100px">
						  <div class="notification-messages info">
									<div class="user-profile">
										<img src="assets/img/profiles/d.jpg" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
									</div>
									<div class="message-wrapper">
										<div class="heading">
											David Nester - Commented on your wall
										</div>
										<div class="description">
											Meeting postponed to tomorrow
										</div>
										<div class="date pull-left">
										A min ago
										</div>										
									</div>
									<div class="clearfix"></div>									
								</div>	
							<div class="notification-messages danger">
								<div class="iconholder">
									<i class="icon-warning-sign"></i>
								</div>
								<div class="message-wrapper">
									<div class="heading">
										Server load limited
									</div>
									<div class="description">
										Database server has reached its daily capicity
									</div>
									<div class="date pull-left">
									2 mins ago
									</div>
								</div>
								<div class="clearfix"></div>
							</div>	
							<div class="notification-messages success">
								<div class="user-profile">
									<img src="assets/img/profiles/h.jpg" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
								</div>
								<div class="message-wrapper">
									<div class="heading">
										You haveve got 150 messages
									</div>
									<div class="description">
										150 newly unread messages in your inbox
									</div>
									<div class="date pull-left">
									An hour ago
									</div>									
								</div>
								<div class="clearfix"></div>
							</div>							
						</div>' data-toggle="dropdown" data-original-title="Notifications">
					<div class="user-details"> 
						<div class="username">
							<span class="badge badge-important">3</span> 
							John <span class="bold">Smith</span>									
						</div>						
					</div> 
					<div class="iconset top-down-arrow"></div>
				</a>						
			     			
			</div>
		 <ul class="nav quick-section ">
			<li class="quicklinks"> 
				<a data-toggle="dropdown" class="dropdown-toggle  pull-right" href="#">						
					<div class="iconset top-settings-dark "></div> 	
				</a>
				<ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="dropdownMenu">
                  <li><a href="/"> My Account</a>
                  </li>
                  <li><a href="/">My Calendar</a>
                  </li>
                  <li><a href="/"> My Inbox&nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a>
                  </li>
                  <li class="divider"></li>                
                  <li><a href="/"><i class="icon-off"></i>&nbsp;&nbsp;Log Out</a></li>
               </ul>
			</li> 
			<li class="quicklinks"> <span class="h-seperate"></span></li> 
			
		</ul>
      </div>
      <!-- END CHAT TOGGLER -->
      
      
    </div>
    <!-- END TOP NAVIGATION MENU --> 
  </div>
  <!-- END TOP NAVIGATION BAR --> 
</div>


</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="user-info-wrapper">
     
    </div>
    <!-- END MINI-PROFILE -->
    <!-- BEGIN SIDEBAR MENU -->
   
<ul>
<li class="active"> <a href="index.php">  <img width="20" src="assets/img/selecticon/home.png"/> <span class="title">Dashboard</span>  </a> </li>
<li class=""> <a href="Speakers.php"> <img width="20" src="assets/img/icon_speakers@2x.png"/> <span class="title">Speakers</span>  </a> </li>
<li class=""> <a href="Sessions.php"> <img width="20" src="assets/img/Sessions.png"/> <span class="title">Sessions</span>  </a> </li>
<li class=""> <a href="Sponsors.php"> <img width="20" src="assets/img/award@2x.png"/> <span class="title">Sponsors</span>  </a> </li>
<li class=""> <a href="Exhibitors.php"> <img width="20" src="assets/img/icon_exhibitors@2x.png"/> <span class="title">Exhibitors</span></a></li>
<li class=""> <a href="Booths.php"> <img width="20" src="assets/img/booths.png"/> <span class="title">Booths</span>  </a> </li>
<li class=""> <a href="Attendee.php"> <img width="20" src="assets/img/Attendee.png"/> <span class="title">Attendee</span>  </a> </li>
<li class=""> <a href="Hotels.php"> <img width="20" src="assets/img/icon_hotels@2x.png"/> <span class="title">Hotels</span>  </a> </li>
<!--<li class=""> <a href="Messaging.php"> <img width="20" src="assets/img/messages@2x.png"/> <span class="title">Push Messaging</span>  </a> </li>-->
<li class=""> <a href="Notifications.php"> <img width="20" src="assets/img/messages@2x.png"/> <span class="title">Push Notifications</span></a></li>
<li class=""> <a href="composemail.php"> <img width="20" src="assets/img/messages@2x.png"/> <span class="title">Compose Email</span>  </a> </li>
</ul>

    <a href="#" class="scrollup">Scroll</a>
    <div class="clearfix"></div>
    <!-- END SIDEBAR MENU -->
  </div>

  <!-- END SIDEBAR -->
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
   
    <div class="clearfix"></div>
    <div class="content">
  
  <div class="page-title"> <i class="icon-custom-left"></i>
        <h3><span class="semi-bold">Sessions</span></h3>
      </div>
  
		<div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Sessions <span class="semi-bold">List</span></h4>
              <div class="tools">
               <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                 <a href="javascript:;" class="reload"></a>
                  <a href="javascript:;" class="remove"></a> </div>
            </div>
            
        <div class="grid-body postion ">
            
            <div class="download-icon">
                <ul class="nav quick-section ">
                  <li class="quicklinks Seticon"> <a data-toggle="dropdown" class="dropdown-toggle  pull-right" href="#"> <i class="icon-cloud-download"></i> </a>
                    <ul class="dropdown-menu  pull-right setUl" role="menu" aria-labelledby="dropdownMenu">
                      <li><a href="/"> CSV </a> </li>
                      <li><a href="/">Excel</a> </li>
                      <li><a href="/"> PDF </a> </li>
                      <li><a href="/"> Copy </a> </li>
                    </ul>
                  </li>
                  <li class="quicklinks"> <span class="h-seperate"></span></li>
                </ul>
              </div>
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example2" width="100%" >
                <thead>
                  <tr>
                    <th>Session Title  </th>
                    <th>Rooms  </th>
                    <th> 	Speaker Name  </th>
                    <th>Description  </th>
                    <th> Date  </th>
                    <th> Time  </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                <?php

              $url = "http://192.168.1.242/Event-Manager/public/index.php/api/exa/sessions"; 

              $ch = curl_init();
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_URL,$url);
              $result=curl_exec($ch);
              $data=json_decode($result, true);
            //  print_r($data['session']);
			if(isset($data['session']) && $data['session']!=''){
             foreach($data['session'] as $value)
             {
              //echo $value['SpeakerName'];                      
              ?>
                  <tr class="odd gradeX">
                    <td> <?php  echo $value['session_title']; ?> </td>
                    <td><?php  echo $value['room']; ?></td>
                    <td><?php  echo $value['session_title']; ?></td>
                    <td><?php echo $value['session_title']; ?></td>
                    <td> <?php echo $value['session_start_date']; ?> </td>
                    <td> <?php echo $value['session_start_time']; ?></td>
                    <td class="center"> <a class="icon-plus-sign-alt"></a> &nbsp; <a class="icon-trash"></a></td>
                  </tr>
                <?php }}?>  
                
                  
               </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
 
  </div>
  
</div>
<!-- END PAGE -->

<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<script src="assets/plugins/jquery-datatable/extra/js/TableTools.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/js/datatables.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<!-- END JAVASCRIPTS -->
<script> 

$(".delete").click(function(event){


var value=$(event.currentTarget).attr("index");

$("tr[index='"+value+"']").css("display","none");

});
</script> 
</body>
</html>