<?php 


	/*
	 * 
     Template Name:User Dashboard
     
	 */
	
//get_header();
	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */	

 	 
 
     
     
	 ?>
<html <?php language_attributes(); ?> class="no-js" style="margin-top: 0px !important;">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body>
	<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				
	  		<h1><a href="index.html" class="logo"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/sitelogo.png';?>"/></a></h1>
	  		<div class="rounded mx-auto d-block text-center mb-3">
	  		    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/doctor-male.png';?>" width= '200px' class="profile rounded mx-auto d-block" alt="...">
	  		    <h5 class="rounded mt-2 d-block">Dr Jack D Bachas</h5>
	  		    <p class="rounded mx-auto d-block">Provider</p>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li >
            <a href="#"><span class="fa fa-home mr-3"></span> Homepage</a>
          </li>
          <li>
              <a href="#"><span class="fa  fa-clipboard mr-3"></span> My Appointment</a>
          </li>
          <li>
            <a href="#"><span class="fa  fa-users mr-3"></span> Profile Management</a>
          </li>
          <li class="active">
            <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
         
          <li>
            <a href="#"><span class="fa fa-power-off mr-3"></span> Logout</a>
          </li>
        </ul>

    	</nav>
       
        <!-- Page Content  -->
      <div id="content" class="">
        <nav class="navbar navbar-light bg-white">
          <a class="navbar-brand"><i class="fa fa-bars"></i></a>
          <div>
              <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/doctor-male.png';?>" width="30" height="30"  alt="logo" class="profileImage">
          </div>
        </nav>
        <div class="p-4 p-md-5 pt-5">
            <div><h3 style="display: inline;">Setting | <span class="fa fa-home mr-3"></span></h3>/ Settings</div>
            <div class="card">
                <div class="card-body">
             <div class="col-md-12">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa fa-usd"></i> Plan Setting</a>
                                    <a class="nav-item nav-link" id="nav-payment-tab" data-toggle="tab" href="#nav-payment" role="tab" aria-controls="nav-payment" aria-selected="false"><i class="fa fa-credit-card" aria-hidden="true"></i> Payment Setting</a>
                                    <a class="nav-item nav-link" id="nav-chemail-tab" data-toggle="tab" href="#nav-chemail" role="tab" aria-controls="nav-chemail" aria-selected="false"><i class="fa fa-envelope" aria-hidden="true"></i>
 Change Email</a>
                                     <a class="nav-item nav-link" id="nav-chpwd-tab" data-toggle="tab" href="#nav-chpwd" role="tab" aria-controls="nav-chpwd" aria-selected="false"><i class="fa fa-lock" aria-hidden="true"></i>
 Change Password</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    
                                </div>
                                <div class="tab-pane fade" id="nav-payment" role="tabpanel" aria-labelledby="nav-payment-tab">
                                    
                                </div>
                                <div class="tab-pane fade" id="nav-chemail" role="tabpanel" aria-labelledby="nav-chemail-tab">
                                    
                                    <form class="mt-4">
                                      <div class="form-group">
                                        
                                        <lable>Enter old Email Address</lable>
                                        <input type="email" class="form-control" id="oldEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        
                                      </div>
                                     
                                       <div class="form-group">
                                        
                                          <lable>Enter New Email Address</lable>
                                      
                                        <input type="email" class="form-control" id="newEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                       
                                      </div>
                                      <button type="submit" class="btn btn-primary email_Change_setting ">Submit</button>
                                      <button type="button" class="btn btn-outline-primary clear-email">Clear</button>
                                    </form>
                                    
                                </div>
                                <div class="tab-pane fade" id="nav-chpwd" role="tabpanel" aria-labelledby="nav-chpwd-tab">
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
         </div>
      </div>
		</div>
   </body>
</html>