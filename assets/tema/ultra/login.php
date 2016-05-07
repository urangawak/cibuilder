<!DOCTYPE html>
<html class=" ">
<head>       
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title><?=$judul;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

         <link rel="shortcut icon" href="<?php echo tema_logo();?>" type="image/x-icon" />    <!-- Favicon -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo tema_logo();?>">	<!-- For iPhone -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo tema_logo();?>">    <!-- For iPhone 4 Retina display -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo tema_logo();?>">    <!-- For iPad -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo tema_logo();?>">
        <!-- CORE CSS FRAMEWORK - START -->
        <link href="<?php echo base_url().'assets/tema/';?>ultra/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?php echo base_url().'assets/tema/';?>ultra/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/tema/';?>ultra/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <?php
        echo asset_font_awesome();
        ?>
        <link href="<?php echo base_url().'assets/tema/';?>ultra/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/tema/';?>ultra/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="<?php echo base_url().'assets/tema/';?>ultra/plugins/icheck/skins/square/orange.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="<?php echo base_url().'assets/tema/';?>ultra/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/tema/';?>ultra/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" login_page">


        <div class="login-wrapper">
            <div id="login" class="login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-0 col-xs-12">
                <h1 style="color: #ccc;" class="text-center"><?=$appname;?></h1>
				<?php
				echo validation_errors();	
				?>
                <form name="loginform" id="loginform" action="<?=base_url();?>login" method="post">
                    <p>
                        <label for="user_login">Username<br />
                            <input type="text" name="username" id="user_login" class="input" value="<?=set_value('username');?>" size="20" /></label>
                    </p>
                    <p>
                        <label for="user_pass">Password<br />
                            <input type="password" name="password" id="user_pass" class="input" value="" size="20" /></label>
                    </p>
                    
                    <p class="submit">
                        <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign In" />
                    </p>
                </form>


            </div>
        </div>





        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="<?php echo base_url().'assets/tema/';?>ultra/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="<?php echo base_url().'assets/tema/';?>ultra/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="<?php echo base_url().'assets/tema/';?>ultra/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="<?php echo base_url().'assets/tema/';?>ultra/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="<?php echo base_url().'assets/tema/';?>ultra/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="<?php echo base_url().'assets/tema/';?>ultra/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="<?php echo base_url().'assets/tema/';?>ultra/plugins/icheck/icheck.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="<?php echo base_url().'assets/tema/';?>ultra/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="<?php echo base_url().'assets/tema/';?>ultra/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/tema/';?>ultra/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 













        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>
</html>



