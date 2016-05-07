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
        <link href="<?php echo base_url().'assets/tema/';?>ultra/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?php echo base_url().'assets/tema/';?>ultra/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/tema/';?>ultra/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <?php
        echo asset_font_awesome();        
        ?>
        <link href="<?php echo base_url().'assets/tema/';?>ultra/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/tema/';?>ultra/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url().'assets/tema/';?>ultra/js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/tema/';?>ultra/js/scripts.js" type="text/javascript"></script>    
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="<?php echo base_url().'assets/tema/';?>ultra/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/tema/';?>ultra/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
        <?php
	  	echo add_css(base_url().'assets/style.css');
	  	echo add_js(base_url().'assets/custom.js');
	  	?>

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
        <div class='page-topbar '>
            <div class='logo-area'>
            	<div class="col-md-12">            	
            		<h1 style="color:#fff"><?php echo baca_konfig('nama-aplikasi');;?></h1>
            	</div>            	
            </div>
            <div class='quick-area'>
            	<div class='pull-left'>
                    <ul class="info-menu left-links list-inline list-unstyled">
                        <li class="sidebar-toggle-wrap">
                            <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>                        
                    </ul>
                </div>
                <div class='pull-right'>
                    <ul class="info-menu right-links list-inline list-unstyled">
                        <li class="profile">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <img src="<?php echo user_photo();?>" alt="user-image" class="img-circle img-inline">
                                <span><?=user_info('nama');;?> <i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu profile animated fadeIn">                                
                                <li>
                                    <a href="<?=base_url('profil');?>">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>                                
                                <li class="last">
                                    <a href="<?=base_url('logout');?>">
                                        <i class="fa fa-lock"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>                       
                    </ul>			
                </div>		
            </div>

        </div>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <div class="page-sidebar ">

                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

                    <!-- USER INFO - START -->
                    <div class="profile-info row">

                        <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                            <a href="<?=base_url();?>profil">
                                <img src="<?php echo user_photo();?>" class="img-responsive img-circle">
                            </a>
                        </div>

                        <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                            <h3>
                                <a href="<?=base_url("profil");?>"><?=user_info('nama');;?></a>
                                <span class="profile-status online"></span>
                            </h3>

                        </div>

                    </div>
                    <!-- USER INFO - END -->



                    <ul class='wraplist'>	


                        <li class=""> 
                            <a href="<?=base_url(akses().'/dashboard');?>">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>                        
			<?php            
			require_once(APPPATH.'views/'.akses().'/menu.php');
			$output='';
			foreach($menu as $m1=>$r1)
			{	
				$a=menu_active($r1['slug']);
				$s1="";
				$s2="";
				if($a==TRUE)
				{
					$s1="open";
					$s2="treeview";
				}
				if(empty($r1['child']))
				{
					$output.='<li class="'.$s1.'">
					<a href="'.$r1['url'].'">							
						<i class="'.$r1['icon'].'"></i> <span>'.$m1.'</span>
					</a></li>';
				}else{
					$output.='<li class="'.$s1.'">';
					$output.='<a href="javascript:;" data-toggle="dropdown">
						<i class="'.$r1['icon'].'"></i> <span>'.$m1.'</span>
						<i class="fa fa-angle-left pull-right"></i>
					</a>';
					$output.='<ul class="sub-menu">';
					foreach($r1['child'] as $m2=>$r2)
					{
						$output.='<li><a href="'.$r2['url'].'">'.$m2.'</a></li>';
					}
					$output.='</ul>';
					$output.='</li>';
				}	
			}
			echo $output;
			?>
                    </ul>

                </div>
                <!-- MAIN MENU - END -->



                <div class="project-info">

                    <div class="block1">
                        <div class="data">
                            <span class='title'>&copy; <?=date("Y");?></span>
                            <span class='total'><?=baca_konfig('company-name');?></span>
                        </div>                        
                    </div>

                </div>



            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper main-wrapper" style=''>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    	<?php
						$msgHeader=$this->session->flashdata('message_header');
						if(!empty($msgHeader))
						{
						$msgTipe=$msgHeader['tipe'];
						$msgIcon="";
						switch($msgTipe){
								case "danger":
									$msgIcon="fa-ban";
									break;						
								case "success":
									$msgIcon="fa-check";
									break;
								case "warning":
									$msgIcon="fa-warning";
									break;
								case "info":
									$msgIcon="fa-info";
									break;
							}
						?>
						<div class="alert alert-<?=$msgTipe;?> alert-dismissable" id="message_header">
						    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						    <h4><?=$msgHeader['title'];?></h4>
						    <?=$msgHeader['message'];?>
						</div>				                
						<?php	
						}
						?>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title"><?=$judul;?></h1>                            
                            </div>                            
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12">
                        <section class="box ">                            
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    