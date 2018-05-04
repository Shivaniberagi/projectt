<?php
session_start(); 
include('connection.php');
if($_SESSION['username']=='')
{
	echo "<script>alert('Login First');</script>";
	echo "<script>location.replace('index.php');</script>";
	
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title> Fine2Source Admin</title>

    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
    
	<!-- icons -->
    <link href="<?php echo base_url(); ?>/Admin/js/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/Admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    
	<!--bootstrap -->
    <link href="<?php echo base_url(); ?>/Admin/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/Admin/js/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Theme Styles -->
    <link href="<?php echo base_url(); ?>/Admin/css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="<?php echo base_url(); ?>/Admin/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/Admin/css/responsive.css" rel="stylesheet" type="text/css" />
    
	<!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/Admin/img/favicon.ico" /> 
 </head>
<body class="page-header-fixed sidemenu-closed-hidelogo page-container-bg-solid page-content-white page-md">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="dashboard.php">
                        <img src="<?php echo base_url(); ?>/Admin/img/logo.png" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <span></span>
                    </div>
                </div>
                <!-- logo end -->
                 <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
			   
			   
			   
			   
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                    	
                        
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="<?php echo base_url(); ?>/Admin/img/dp.svg" />
                                <span class="username username-hide-on-mobile"> Fine2Source Admin </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="user_profile.html">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                              

                                <li class="divider"> </li>
                               
                                <li>
                                    <a href="<?php   echo site_url('dash/logout'); ?>">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
 						<li class="dropdown dropdown-quick-sidebar-toggler">
                            <a href="javascript:;" class="dropdown-toggle">
                                <i class="icon-logout"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->