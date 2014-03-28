<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8" />
<title>Event Manager</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN PLUGIN CSS -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/ios-switch/ios7-switch.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8">
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
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
      <a href="index.php"><img src="assets/img/logo.png" class="logo"  data-src="assets/img/logo.png" data-src-retina="assets/img/logo.png" /></a> 
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
        <div class="chat-toggler"> <a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom" 
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
            <div class="username"> <span class="badge badge-important">3</span> John <span class="bold">Smith</span> </div>
          </div>
          <div class="iconset top-down-arrow"></div>
          </a> </div>
        <ul class="nav quick-section ">
          <li class="quicklinks"> <a data-toggle="dropdown" class="dropdown-toggle  pull-right" href="#">
            <div class="iconset top-settings-dark "></div>
            </a>
            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/"> My Account</a> </li>
              <li><a href="/">My Calendar</a> </li>
              <li><a href="/"> My Inbox&nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a> </li>
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
    <div class="user-info-wrapper"> </div>
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
        <h3><span class="semi-bold"> Compose Email </span></h3>
      </div>
     
    </div>
     <div class="row-fluid white_bg">
        <div class="span8">
          <div class="grid simple">
           <div class="grid-title no-border">
           
								<h4> Stap 1 : <span class="semi-bold">Compose Message</span></h4>
								
                                <p>The scroll event is sent to an element when the user scrolls to a different place in the element. It applies to window objects, but also to scrollable frames and elements with the overflow CSS property set to scroll (or auto when the element's explicit height or width is less than the height or width of its contents).</p>
							
                            
                            </div>
          </div>
        </div>
        
         <div class="span4">
          <div class="grid simple">
           <div class="grid-title no-border">
      
           </div>
          </div>
        </div>
        
        
      </div>
      <br/>
  
    
    
    
      <!-- BEGIN RADIO/TOGGLE CONTROLS-->
      <div class="row-fluid" style="display:none;">
        <div class="span12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Toggle <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <div class="span4">
                  <h3>Color <span class="semi-bold">Options</span></h3>
                  <p>Pure CSS radio button with a cool animation. These are available in all primary colors in bootstrap</p>
                  <br>
                  <div class="row-fluid">
                    <div class="span6">
                      <div class="radio">
                        <input id="male" type="radio" name="gender" value="male" checked="checked">
                        <label for="male">Male</label>
                        <input id="female" type="radio" name="gender" value="female">
                        <label for="female">Female</label>
                      </div>
                    </div>
                    <div class="span6">
                      <div class="radio radio-success">
                        <input id="yes" type="radio" name="optionyes" value="yes">
                        <label for="yes">Agree</label>
                        <input id="no" type="radio" name="optionyes" value="no" checked="checked">
                        <label for="no">Disagree</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <div class="clearfix"></div>
                </div>
                <div class="span4">
                  <h3>State <span class="semi-bold">Options</span></h3>
                  <p>Use of different color opacity helps to destigues between different states such as disable</p>
                  <br>
                  <div class="row-fluid">
                    <div class="span12">
                      <div class="radio radio-primary">
                        <input id="Disabled" type="radio" name="Disabled" value="Disabled"  disabled="disabled">
                        <label for="Disabled">Disabled</label>
                        <input id="ADisabled" type="radio" name="ADisabled" value="ADisabled" checked="checked"  disabled="disabled">
                        <label for="ADisabled">Disabled</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="span4">
                  <h3>Slide <span class="semi-bold">Toggle</span></h3>
                  <p>A cool iOS7 slide toggle. These are cutomize for all boostrap colors</p>
                  <br>
                  <div class="row-fluid">
                    <div class="slide-primary">
                      <input type="checkbox" name="switch" class="ios" checked="checked"/>
                    </div>
                    <div class="slide-success">
                      <input type="checkbox" name="switch" class="iosblue" checked="checked"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  <!-- END RADIO/TOGGLE CONTROLS-->
	
	  
	  <!-- BEGIN HTML5 WYSIWG CONTROLS-->
      <div class="row-fluid">
        <div class="span12">
          <div class="row-fluid">
            <div class="span12">
              <div class="grid simple">
                <div class="grid-title no-border">
                
                 
                </div>
                <div class="grid-body no-border">
                  
                  <div class="row-fluid">
                    <div class="span6">
                       <div class="control-group">
                        <label class="control-label">Your Name </label>
                       
                        <div class="controls">
                          <input type="text" placeholder="Name" class="span12 ">
                        </div>
                      </div>
                     </div>
                    <div class="span6">
                    
                    
                   
                      <div class="control-group">
                        <label class="control-label">Reply-to-Email</label>
                 
                        <div class="controls">
                          <input type="text" placeholder="test@test.com"  class="span12 ">
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
                 
                 
                  <div class="row-fluid">
                    <label class="control-label">Message</label>
              		  <input type="text" placeholder="Subject"  class="span12 ">
                    <textarea id="text-editor" placeholder="Enter text ..." class="span12" rows="10"></textarea>
                
                <button class="btn btn-success btn-cons right" type="button">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>	  
	  <!-- END HTML5 WYSIWG CONTROLS-->
    
    <div class="row-fluid"> <!--- Notification Table-->
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>
              <!--<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span> Email Message </button>--> 
              <button class="btn btn-default" type="button"><span class="icon"></span> Compose Mail</button>
              
              </h4>
              <!--<div class="tools">
               <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                 <a href="javascript:;" class="reload"></a>
                  <a href="javascript:;" class="icon-mobile-phone"></a> </div>
            </div>-->
            
            <div class="grid-body postion ">
            
            
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example1" width="100%" >
                <thead>
                  <tr>
                    <th><input type="checkbox" value="" /></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created</th> 
                  </tr>
                </thead>
                <tbody>
                  <tr class="odd">
                        <td><input type="checkbox" value="" /></td>
                        <td>Inwizarsd Inc</td>
                        <td>asd@inwizads.com</td>
                        <td> July 1, 2012</td>
                    
                  </tr>
                  
                   <tr class="even">
                        <td><input type="checkbox" value="" /></td>
                        <td>Inwizarsd Inc</td>
                        <td>asd@inwizads.com</td>
                        <td> July 1, 2012</td>
                   </tr>
                  
                    <tr class="odd">
                        <td><input type="checkbox" value="" /></td>
                        <td>Inwizarsd Inc</td>
                        <td>asd@inwizads.com</td>
                        <td> July 1, 2012</td>
                    </tr>
                  
                   <tr class="even">
                        <td><input type="checkbox" value="" /></td>
                        <td>Inwizarsd Inc</td>
                        <td>asd@inwizads.com</td>
                        <td> July 1, 2012</td>
                   </tr>
                  
                   <tr class="odd">
                        <td><input type="checkbox" value="" /></td>
                        <td>Inwizarsd Inc</td>
                        <td>asd@inwizads.com</td>
                        <td> July 1, 2012</td>
                   </tr>
               </tbody>
              </table>
            </div>
          </div>
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
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-inputmask/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-autonumeric/autoNumeric.js" type="text/javascript"></script>
<script src="assets/plugins/ios-switch/ios7-switch.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script src="assets/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/js/form_elements.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- END JAVASCRIPTS -->
</body>
</html>