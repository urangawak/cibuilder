<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8" />
        <title><?=$judul;?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
       <?php
       echo asset_font_awesome();
       ?>
        <link href="<?php echo base_url().'assets/tema/';?>metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/tema/';?>metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/tema/';?>metronic/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/tema/';?>metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/tema/';?>metronic/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url().'assets/tema/';?>metronic/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/tema/';?>metronic/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'assets/tema/';?>metronic/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url().'assets/tema/';?>metronic/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo tema_logo();?>" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="<?php echo tema_logo();?>">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo tema_logo();?>">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo tema_logo();?>">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo tema_logo();?>">
        <script src="<?php echo base_url().'assets/tema/';?>metronic/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <?php
	  	echo add_css(base_url().'assets/style.css');
	  	echo add_js(base_url().'assets/custom.js');
	  	?>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="<?=base_url(akses().'/dashboard');?>">
                        <img src="<?=tema_logo();?>" alt="logo" class="logo-default img-responsive" style="height: 24px;"/> </a>
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="<?=user_photo();?>" />
                                <span class="username username-hide-on-mobile"> <?=user_info('nama');?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?=base_url();?>profil">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li>
                                    <a href="<?=base_url();?>logout">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                     
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a href="<?=base_url();?>logout" class="dropdown-toggle">
                                <i class="icon-logout"></i>
                            </a>
                        </li>
                     
                    </ul>
                </div>
                
            </div>
            
        </div>
        
        <div class="clearfix"> </div>
        
        <div class="page-container">
        
            <div class="page-sidebar-wrapper">
        
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                           
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>
                        <li class="nav-item start ">
                            <a href="<?=base_url(akses().'/dashboard');?>" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
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
								$s1="active open";
								$s2="treeview";
							}
							if(empty($r1['child']))
							{
								$output.='<li class="nav-item '.$s1.'">
								<a href="'.$r1['url'].'" lcass="nav-link nav-toggle">							
									<i class="'.$r1['icon'].'"></i> <span>'.$m1.'</span>
								</a></li>';
							}else{
								$output.='<li class="nav-item '.$s1.'">';
								$output.='<a href="javascript:;" data-toggle="dropdown" class="nav-link nav-toggle">
									<i class="'.$r1['icon'].'"></i> <span class="title">'.$m1.'</span>
									<span class="arrow"></span>
								</a>';
								$output.='<ul class="sub-menu">';
								foreach($r1['child'] as $m2=>$r2)
								{
									$output.='<li class="nav-item"><a href="'.$r2['url'].'" class="nav-link"><span class="title">'.$m2.'</span></a></li>';
								}
								$output.='</ul>';
								$output.='</li>';
							}	
						}
						echo $output;
						?>                        
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">                
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    
                    <!-- END THEME PANEL -->

                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> <?=$judul;?>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="col-md-12">
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
                    