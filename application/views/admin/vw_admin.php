<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin-EWU Research Team</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700,500" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/style.css">


    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/ui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/style.css">

    <script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>asset/js/ui.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>asset/js/default.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>

</head>

<body>
	<div class="header">
	<div class="row">
	 <!-- Site title -->
	<div class="col-xs-6">
	<h2 style="margin-left:10px; margin-top:8px">Research team</h2></div>
	
	 <!-- Profile -->
	<div class="col-xs-6">


	<div class="col-xs-11">
	<li class="dropdown pull-right">
								<a class="dropdown-toggle pro" data-toggle="dropdown" href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile
								<span class="caret"></span></a>
								<ul class="dropdown-menu sub">
								  <a href="<?php echo base_url()?>Admin/edit_profile"><li><i class="fa fa-user" aria-hidden="true"></i>Edit Profile</li></a>
								  <a href="<?php echo base_url();?>admin/researcher"><li><i class="fa fa-user-plus" aria-hidden="true"></i>Add or remove</li></a>
								  <a href="<?php echo base_url()?>Admin_logout"><li><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</li></a>
								</ul>
							  </li></div>
							  
							   <!-- Settings -->
							  <div class="col-xs-1">
								<li class="dropdown pull-right">
							<!--	<a class="dropdown-toggle pro" data-toggle="dropdown" href="#"><i class="fa fa-gear" aria-hidden="true"></i> </a>-->
								<ul class="dropdown-menu sub sub-long">
								  <li><h3>Set theme color</h3>
								  <div >
								    <!--<label class="radio-inline" style=" border-bottom: 3px solid #cc312c; width:20%"><input type="radio" name="optradio">Red</label>-->
									<!--<label class="radio-inline" style=" border-bottom: 3px solid #5aa644; width:20%"><input type="radio" name="optradio">Green</label>-->
									<!--<label class="radio-inline" style=" border-bottom: 3px solid #5bc0de; width:20%"><input type="radio" name="optradio">Blue</label>-->
									<!--<label class="radio-inline" style=" border-bottom: 3px solid #f0ad4e; width:20%"><input type="radio" name="optradio">Orange</label>-->
								  </div></li>
								  <li><h3>Set site title</h3>
									<input class="form-control" id="site-title" name="site-title" placeholder="site-title" type="text"></li>
									
									<li><h3>Set title-bar logo</h3>
									<input id="a" name="a" placeholder="Add a photo" type="file"></li>
									
									<li><h3>Set site logo</h3>
									<input id="a" name="a" placeholder="Add a photo" type="file"></li>
									
									<li><h3>Set address</h3>
									<input class="form-control" id="site-title" name="address" placeholder="Company address" type="text">
									<input class="form-control" id="site-title" name="cell" placeholder="Mobile number" type="text" style="margin-top:5px;">
									<input class="form-control" id="site-title" name="mail" placeholder="Email address" type="text" style="margin-top:5px;">
									<button class="btn btn-primary" type="submit" style="width:100%; margin-top:15px;">Done</button></li>
								
								</ul>
							    </li>
								</div>
	</div>
							  
	</div>
	</div>
	
	 <!-- Side bar -->
		<div class="row container-fluid">
				<div class="col-xs-2 menu">
				<div class="row menu-head">
					<div class="col-sm-5">
						<img src="<?php echo base_url().$this->session->userdata('admin_photo');?>" class="img-circle img-responsive" style="height:50px;"></img>
					</div>
					<div class="col-sm-7">
						<h5><?php echo $this->session->userdata('admin_name'); ?></h5>
						<h6><i class="fa fa-circle" aria-hidden="true" style="color:#2b2; font-size:12px; padding-top:-12px;"> </i> Online</h6> 
					</div>
				</div>
				<ul>
				<!--<a href="admin.html"><li><h5><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</h5></li></a>-->
				<a href="<?php echo base_url();?>admin/home"><li><h5><i class="fa fa-home" aria-hidden="true"></i> Home </h5></li></a>
				<a href="<?php echo base_url();?>admin/aim_and_objective"><li><h5><i class="fa fa-leaf" aria-hidden="true"></i> Aim & Objective</h5></li></a>
				<a href="<?php echo base_url();?>admin/news"><li><h5><i class="fa fa-globe" aria-hidden="true"></i> News</h5></li></a>
				<a href="<?php echo base_url();?>admin/category"><li><h5><i class="fa fa-book" aria-hidden="true"></i> Publication Category</h5></li></a>
				<a href="<?php echo base_url();?>admin/publication"><li><h5><i class="fa fa-book" aria-hidden="true"></i> Publication</h5></li></a>
				<a href="<?php echo base_url();?>admin/researcher"><li><h5><i class="fa fa-user-md" aria-hidden="true"></i> Researchers</h5></li></a>
				<a href="<?php echo base_url();?>admin/email"><li><h5><i class="fa fa-envelope" aria-hidden="true"></i> Send Email</h5></li></a>
				<a href="<?php echo base_url();?>admin/other"><li><h5><i class="fa fa-link" aria-hidden="true"></i> Other links & uploads</h5></li></a>
				<a href="<?php echo base_url();?>admin/project"><li><h5><i class="fa fa-tachometer" aria-hidden="true"></i> Project Timeline</h5></li></a>
				<a href="<?php echo base_url();?>admin/event"><li><h5><i class="fa fa-clock-o" aria-hidden="true"></i> Events</h5></li></a>
				<a href="<?php echo base_url();?>admin/contact"><li><h5><i class="fa fa-users" aria-hidden="true"></i> Contact</h5></li></a>
				<a href="<?php echo base_url();?>admin/funding"><li><h5><i class="fa fa-users" aria-hidden="true"></i> Funding</h5></li></a>
				<a href="<?php echo base_url();?>admin/blog"><li><h5><i class="fa fa-globe" aria-hidden="true"></i> Blog</h5></li></a>

				</div>
		<!-- dynamic part-->		
		<?php 
		if(isset($home))
			$this->load->view('admin/vw_home');		

		else if(isset($other))			
			$this->load->view('admin/vw_other');

		else if(isset($news_by_id))			
			$this->load->view('admin/vw_news_by_id');
		
		 
		else if(isset($dashboard))		
			$this->load->view('admin/vw_dashboard');
		
		else if(isset($news))		
			$this->load->view('admin/vw_news');
		else if(isset($email))
			$this->load->view('admin/vw_email');

		else if(isset($blog))
			$this->load->view('admin/vw_blog');

		else if(isset($blog_by_id))
			$this->load->view('admin/vw_blog_by_id');

		else if(isset($category))
			$this->load->view('admin/vw_category');
		 
		else if(isset($publication))		
			$this->load->view('admin/vw_publication');
		 
		 
		else if(isset($aim_and_objective))		
			$this->load->view('admin/vw_aim_and_objective');
		 
		else if(isset($event))		
			$this->load->view('admin/vw_event');
		 
		 
		else if(isset($researcher))		
			$this->load->view('admin/vw_researchers');
		 
		 
		else if(isset($field_sites))		
			$this->load->view('admin/vw_field_sites');
		 
		 
		else if(isset($timeline))		
			$this->load->view('admin/vw_timeline');


		else if(isset($funding))		
			$this->load->view('admin/vw_funding');
		 
		 


		else if(isset($project))		
			$this->load->view('admin/vw_project');

		else if(isset($project_by_id))		
			$this->load->view('admin/vw_project_by_id');
		 
		 
 
		else if(isset($contact))		
			$this->load->view('admin/vw_contact');
		 
 
		else if(isset($publication_by_id))		
			$this->load->view('admin/vw_publication_by_id');

		else if(isset($aim_and_objective_by_id))		
			$this->load->view('admin/vw_aim_and_objective_by_id');

		else if(isset($timeline_by_id))		
			$this->load->view('admin/vw_timeline_by_id');

		else if(isset($event_by_id))		
			$this->load->view('admin/vw_event_by_id');

		else if(isset($funding_sponsor_by_id))		
			$this->load->view('admin/vw_funding_sponsor_by_id');
		 

		?>
				
</body>
</html>