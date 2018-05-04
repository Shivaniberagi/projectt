 <?php   include('header.php'); ?>
<?php  include('side_menu.php');   ?>


		
		
		
		
		
		
    
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title"> View Register Player</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>   
                                <li class="active">View Register Player</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab"> List View </a>
                                    </li>
                                    <li>
                                       <!-- <a href="#tab2" data-toggle="tab"> Grid View </a>
                                   --> </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div class="row">
					                        <div class="col-md-12">
					                            <div class="card card-topline-red">
					                                <div class="card-head">
					                                    <header></header>
					                                    <div class="tools">
					                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
						                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
						                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
					                                    </div>
					                                </div>
					                                <div class="card-body ">
					                                    <div class="row">
					                                        <div class="col-md-6 col-sm-6 col-xs-6">
					                                            <div class="btn-group">
					                                                <button id="addRow" class="btn btn-info">
					                                                    Add New <i class="fa fa-plus"></i>
					                                                </button>
					                                            </div>
					                                        </div>
					                                        <div class="col-md-6 col-sm-6 col-xs-6">
					                                            <div class="btn-group pull-right">
					                                                <button class="btn green-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
					                                                    <i class="fa fa-angle-down"></i>
					                                                </button>
					                                                <ul class="dropdown-menu pull-right">
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-print"></i> Print </a>
					                                                    </li>
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
					                                                    </li>
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
					                                                    </li>
					                                                </ul>
					                                            </div>
					                                        </div>
					                                    </div>
					                                    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
					                                        <thead>
					                                            <tr>
					                                            	<th></th>
					                                                <th> Name </th>
					                                                
					                                               
																	 <th> Mobile </th>
					                                            <th> Email </th>
																<th> Message </th>
															    
					                                            </tr>
					                                        </thead>
					                                        <tbody>
															
															 <?php

															 require_once('connection.php'); 
															    $cwt_user=mysqli_query($con,"select * from `cwt_contact`");
																while($cwt_user_fetch=mysqli_fetch_array($cwt_user))
																{
															 
															 ?>
															<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="img/user/user1.svg" alt="">
																	</td>
																	<td><?php   echo $cwt_user_fetch['name'];  ?></td>
																	
																		
																
																	<td><a href="">
																		<?php 
																		
			

																		echo $cwt_user_fetch['Contact'];  ?></a></td>
																	
																
																	<td><a href="">
																		<?php   echo $cwt_user_fetch['Email'];  ?></a></td>
																	
																	
																	<td><a href="">
																		<?php   echo $cwt_user_fetch['message'];  ?></a></td>
																	
																	
																	
																</tr>
																<?php  }  ?>
																
																
															</tbody>
					                                    </table>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/user/user10.svg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Pooja Patel </div>
					                                            <div class="name-center"> Nurse </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                            <a href="staff_profile.html" class="btn btn-circle green-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/user/user1.svg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Rajesh </div>
					                                            <div class="name-center"> Compounder </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="staff_profile.html" class="btn btn-circle green-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/user/user2.svg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Sarah Smith </div>
					                                            <div class="name-center"> Nurse </div>
					                                        </div>
				                                                <p>456, Estern evenue, Courtage area, <br />New York</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="staff_profile.html" class="btn btn-circle green-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                    					<div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/user/user3.svg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">John Deo </div>
					                                            <div class="name-center"> Supervisor </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="staff_profile.html" class="btn btn-circle green-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/user/user4.svg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Jay Soni </div>
					                                            <div class="name-center"> Purchase Officer </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="staff_profile.html" class="btn btn-circle green-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/user/user5.svg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Jacob Ryan </div>
					                                            <div class="name-center"> Receptionist </div>
					                                        </div>
				                                                <p>456, Estern evenue, Courtage area, <br />New York</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="staff_profile.html" class="btn btn-circle green-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                    					<div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/user/user6.svg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Megha Trivedi </div>
					                                            <div class="name-center">Nurse </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="staff_profile.html" class="btn btn-circle green-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/user/user1.svg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Rajesh </div>
					                                            <div class="name-center"> Lab Assistent </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="staff_profile.html" class="btn btn-circle green-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/user/user2.svg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Sarah Smith </div>
					                                            <div class="name-center"> Nurse </div>
					                                        </div>
				                                                <p>456, Estern evenue, Courtage area, <br />New York</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="staff_profile.html" class="btn btn-circle green-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                    					<div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/user/user10.svg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Pooja Patel </div>
					                                            <div class="name-center"> Pharmacist </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="staff_profile.html" class="btn btn-circle green-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/user/user1.svg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Rajesh </div>
					                                            <div class="name-center"> Compounder </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="staff_profile.html" class="btn btn-circle green-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-topline-aqua">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="img/user/user3.svg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">John Deo </div>
					                                            <div class="name-center"> Supervisor </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="staff_profile.html" class="btn btn-circle green-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                    <span class="badge badge-danger">4</span>
                                </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab"> <i class="icon-settings"></i> Settings
                            </a>
                        </li>
                    </ul>
                    
                    <div class="tab-content">
                        <!-- Start Doctor Chat --> 
 						<div class="tab-pane active chat-sidebar-chat" id="quick_sidebar_tab_1">
                        	<div class="chat-sidebar-list">
	                            <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
	                                <h3 class="list-heading">Online</h3>
	                                <ul class="media-list list-items">
	                                    <li class="media"><img class="media-object" src="img/doc/doc3.svg" width="35" height="35" alt="...">
	                                        <i class="online dot"></i>
	                                        <div class="media-body">
	                                            <h4 class="media-heading">John Deo</h4>
	                                            <div class="media-heading-sub">Spine Surgeon</div>
	                                        </div>
	                                    </li>
	                                    <li class="media">
	                                        <div class="media-status">
	                                            <span class="badge badge-success">5</span>
	                                        </div> <img class="media-object" src="img/doc/doc1.svg" width="35" height="35" alt="...">
	                                        <i class="busy dot"></i>
	                                        <div class="media-body">
	                                            <h4 class="media-heading">Rajesh</h4>
	                                            <div class="media-heading-sub">Director</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="img/doc/doc5.svg" width="35" height="35" alt="...">
	                                        <i class="away dot"></i>
	                                        <div class="media-body">
	                                            <h4 class="media-heading">Jacob Ryan</h4>
	                                            <div class="media-heading-sub">Ortho Surgeon</div>
	                                        </div>
	                                    </li>
	                                    <li class="media">
	                                        <div class="media-status">
	                                            <span class="badge badge-danger">8</span>
	                                        </div> <img class="media-object" src="img/doc/doc4.svg" width="35" height="35" alt="...">
	                                        <i class="online dot"></i>
	                                        <div class="media-body">
	                                            <h4 class="media-heading">Kehn Anderson</h4>
	                                            <div class="media-heading-sub">CEO</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="img/doc/doc2.svg" width="35" height="35" alt="...">
	                                        <i class="busy dot"></i>
	                                        <div class="media-body">
	                                            <h4 class="media-heading">Sarah Smith</h4>
	                                            <div class="media-heading-sub">Anaesthetics</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="img/doc/doc7.svg" width="35" height="35" alt="...">
	                                        <i class="online dot"></i>
	                                        <div class="media-body">
	                                            <h4 class="media-heading">Vlad Cardella</h4>
	                                            <div class="media-heading-sub">Cardiologist</div>
	                                        </div>
	                                    </li>
	                                </ul>
	                                <h3 class="list-heading">Offline</h3>
	                                <ul class="media-list list-items">
	                                    <li class="media">
	                                        <div class="media-status">
	                                            <span class="badge badge-warning">4</span>
	                                        </div> <img class="media-object" src="img/doc/doc6.svg" width="35" height="35" alt="...">
	                                        <i class="offline dot"></i>
	                                        <div class="media-body">
	                                            <h4 class="media-heading">Jennifer Maklen</h4>
	                                            <div class="media-heading-sub">Nurse</div>
	                                            <div class="media-heading-small">Last seen 01:20 AM</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="img/doc/doc8.svg" width="35" height="35" alt="...">
	                                        <i class="offline dot"></i>
	                                        <div class="media-body">
	                                            <h4 class="media-heading">Lina Smith</h4>
	                                            <div class="media-heading-sub">Ortho Surgeon</div>
	                                            <div class="media-heading-small">Last seen 11:14 PM</div>
	                                        </div>
	                                    </li>
	                                    <li class="media">
	                                        <div class="media-status">
	                                            <span class="badge badge-success">9</span>
	                                        </div> <img class="media-object" src="img/doc/doc9.svg" width="35" height="35" alt="...">
	                                        <i class="offline dot"></i>
	                                        <div class="media-body">
	                                            <h4 class="media-heading">Jeff Adam</h4>
	                                            <div class="media-heading-sub">Compounder</div>
	                                            <div class="media-heading-small">Last seen 3:31 PM</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="img/doc/doc10.svg" width="35" height="35" alt="...">
	                                        <i class="offline dot"></i>
	                                        <div class="media-body">
	                                            <h4 class="media-heading">Anjelina Cardella</h4>
	                                            <div class="media-heading-sub">Physiotherapist</div>
	                                            <div class="media-heading-small">Last seen 7:45 PM</div>
	                                        </div>
	                                    </li>
	                                </ul>
	                            </div>
                            </div>
                            <div class="chat-sidebar-item">
                                <div class="chat-sidebar-chat-user">
                                    <div class="page-quick-sidemenu">
                                        <a href="javascript:;" class="chat-sidebar-back-to-list">
                                            <i class="fa fa-angle-double-left"></i>Back
                                        </a>
                                    </div>
                                    <div class="chat-sidebar-chat-user-messages">
                                        <div class="post out">
                                            <img class="avatar" alt="" src="img/dp.svg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:10</span>
                                                <span class="body-out"> could you send me menu icons ? </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="img/doc/doc5.svg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:10</span>
                                                <span class="body"> please give me 10 minutes. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="img/dp.svg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:11</span>
                                                <span class="body-out"> ok fine :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="img/doc/doc5.svg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:22</span>
                                                <span class="body">Sorry for
													the delay. i sent mail to you. let me know if it is ok or not.</span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="img/dp.svg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                                <span class="body-out"> it is perfect! :) </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="img/dp.svg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                                <span class="body-out"> Great! Thanks. </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="img/doc/doc5.svg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:27</span>
                                                <span class="body"> it is my pleasure :) </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-sidebar-chat-user-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type a message here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn green-bgcolor">
                                                    <i class="fa fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Doctor Chat --> 
 						<!-- Start Setting Panel --> 
 						<div class="tab-pane chat-sidebar-settings" id="quick_sidebar_tab_3">
                            <div class="chat-sidebar-settings-list">
                                <h3 class="list-heading">Layout Settings</h3>
	                            <div class="chatpane inner-content ">
	                            	<ul class="list-items borderless theme-options">
                                        <li class="theme-option layout-setting"><span>Sidebar
												Position </span>
                                            <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                <option value="left" selected="selected">Left</option>
                                                <option value="right">Right</option>
                                            </select>
                                        </li>
                                        <li class="theme-option layout-setting"><span>Header</span>
                                            <select class="page-header-option form-control input-inline input-sm input-small ">
                                                <option value="fixed" selected="selected">Fixed</option>
                                                <option value="default">Default</option>
                                            </select>
                                        </li>
                                        <li class="theme-option layout-setting"><span>Sidebar Menu </span>
                                            <select class="sidebar-menu-option form-control input-inline input-sm input-small ">
                                                <option value="accordion" selected="selected">Accordion</option>
                                                <option value="hover">Hover</option>
                                            </select>
                                        </li>
                                        <li class="theme-option layout-setting"><span>Footer</span>
                                            <select class="page-footer-option form-control input-inline input-sm input-small ">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected="selected">Default</option>
                                            </select>
                                        </li>
									</ul>
									<h3 class="list-heading">Account Settings</h3>
									<ul class="list-items borderless theme-options">
                                        <li>Show me Online
                                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>Status visible to all
                                            <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>Everyone will see my stuff
                                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>Auto Sumbit Issues
                                            <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>Save History
                                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
									</ul>
                                    <h3 class="list-heading">General Settings</h3>
                                    <ul class="list-items borderless">
                                        <li>Enable Notifications
                                            <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>Enable SMS Alerts
                                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>Location
                                            <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                        <li>Show Offline Users
                                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                        </li>
                                    </ul>
	                        	</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2017 &copy; CWT Sports  Designed  By
                <a href="#" target="_top"> Prads Software </a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.blockui.min.js" type="text/javascript"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- data tables -->
    <script src="js/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="js/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="js/table_data.js" type="text/javascript"></script>
    
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/app.js" type="text/javascript"></script>
    <script src="js/layout.js" type="text/javascript"></script>
     <!-- end js include path -->
</body>

</html>