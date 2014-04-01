<?php

//if($_POST['submit']){
//    
//    $url = "http://192.168.1.222/Event-Management/public/index.php/api/exa/attendee/".$editid;     
//
//
// //$url = "http://192.168.1.242/Events_Management/public/index.php/api/exa/attendee/"; 
//
//          $ch = curl_init();
//          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//          curl_setopt($ch, CURLOPT_URL,$url);
//          $result=curl_exec($ch);
//	  $array = json_decode($result,true);  	  
//		  
//	  if($array != NULL)
//	  {
//		$json = json_encode($array);
//		print_r($json); 
//	  }else
//	  {
//	    return 'error';
//	  }
//    
//}



 $url = "http://192.168.1.222/Event-Management/public/index.php/api/exa/attendee/"; 

          $ch = curl_init();
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_URL,$url);
          $result=curl_exec($ch);
          $data=json_decode($result, true);
	  foreach($data['Attendee'] as $value)
          {
	//print_r($value['first_name']); die;
	  }
?>
<div id="sidr" class="sidr right rightSilder">

<h6> Add New Attendee </h6>
      <form method="post" action="http://192.168.1.222/Event-Management/public/index.php/api/exa/attendee/<?php echo $value['id']; ?>">
                        <div class="row-fluid">
                          <div class="span12">
                            <div class="grid simple">
                              <div class="grid-body no-border"> <br>
                                <div class="row-fluid">
                                  <div class="span12">
                                    <div class="control-group">
                                      <label class="control-label"> first_name:   <span> * </span> </label>
                                      <div class="controls">
                                        <input type="text" name="first_name" class="span12" value="<?php echo $value['first_name']; ?>">
                                      </div>
									  </div>
									
									  <div class="control-group">
                                      <label class="control-label"> last_name:   <span> * </span> </label>
                                      <div class="controls">
                                        <input type="text" name="last_name" class="span12"  value="<?php echo $value['last_name']; ?>">
                                      </div>
									  </div>
									
									
									 <div class="control-group">
                                      <label class="control-label"> Email:   <span> * </span> </label>
                                      <div class="controls">
                                        <input type="text" name="email" class="span12"  value="<?php echo $value['email']; ?>">
                                      </div>
									  </div>
									
									
									<div class="control-group">
									<div class="span6 SideMR">
                                
                                      <label class="control-label"> mobile_number:    <span> * </span> </label>
                                      
                                     <input type="text" class="span12" name="mobile_number"  value="<?php echo $value['mobile_number']; ?>">
                                    
									  </div>
									</div>
									<div class="control-group">
									<div class="span6">
                                 
                                      <label class="control-label">  job_title:    <span> * </span> </label>
                                     
                                      <input type="text" class="span12" name="job_title" value="<?php echo $value['job_title']; ?>">
                                    
									  </div>
									</div>

                                    <div class="control-group">
                                      <label class="control-label"> company_name:   <span> * </span> </label>
                                      <div class="controls">
                                        <input type="text" name="company_name" class="span12" value="<?php echo $value['company_name']; ?>">
                                      </div>
									  </div>
									
				  <div class="control-group">
                                      <label class="control-label"> qr:   <span> * </span> </label>
                                      <div class="controls">
                                       <input type="text" name="qr" class="span12" value="<?php echo $value['qr']; ?>">
                                      </div>
				  </div>
                                       <div class="control-group">
                                      <label class="control-label"> gender:   <span> * </span> </label>
                                      <div class="controls">
                                        <input type="text" name="gender" class="span12" value="<?php echo $value['gender']; ?>">
					    <input type="hidden" name="photo" value="this is photo" class="span12">
                                      </div>
									  </div>
				      
				        <div class="control-group">
                                      <label class="control-label"> event_id:   <span> * </span> </label>
                                      <div class="controls">
                                       <input type="text" name="event_id" value="1" class="span12">
                                      </div>
				  </div>
							
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    
					  <div class="modal-footer">
					 <a id="chat-menu-toggle" href="#sidr" class="chat-menu-toggle" >
            		 <div class="">
              		 <button class="btn btn-primary btn-cons right"  id="chat-menu-toggle" class="chat-menu-toggle" href="#sidr" type="button">
  				   
					Cancel
                     </button>
                	</a>
					<button type="Submit" class="btn btn-success btn-cons" > Save changes </button>
					  </div>
					</div>
             </div>
           </form>
           </div>