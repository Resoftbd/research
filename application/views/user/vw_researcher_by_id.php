<!DOCTYPE html>
<html lang="en">
<head>
  <title>EWU Bio-informatic Research Team</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Vampiro+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	
	<style>
	body{width:100%; overflow-x:hidden; margin:0px; padding:0px; font-family: Montserrat, sans-serif;font-size: 13px;}
	a{text-decoration:none;}
	a:hover{text-decoration:none;}
	li{list-style:none;}
	.navbar{padding:20px 15px; border-bottom:5px solid #2aa6ca;}
	.navbar a{color:#ddd!important; transition: color 0.8s;}
	.navbar a:hover{color:#2ba7cb!important;}
	.navbar h2{font-family: 'Vampiro One', cursive; color:#2aa6ca; margin-top:-15px; margin-left:-15px;}
	.logo{height:50px; width:50px; margin-right:15px;}
	.header{width:100%; margin:0px; padding:0px; margin-top:85px;}
	.side{padding:40px 0px; padding-right:20px;}
	.side h3{padding-top:45px; border-top:1px solid #888;}
	.side li{ padding:7px; list-style:none; margin-left:-15px;}
	.side a{color:#000;}
	.tab-pane h3{border-top:0px !important;}
	
	
	.sidebar{background:#eee; color:#011; margin:0px; margin-right:30px; margin-top:-40px;  margin-left:-20px; padding:15px 8px;}
	.sidebar h3{ color:#2aa6ca; margin-left:-5px; margin-bottom:17px; padding-right:7px; border-top:0px solid #888; padding-top:10px;}
	.sidebar a{color:#000; padding-left:0px; transition: padding 0.4s;}
	.sidebar a:hover{ color: #011; padding-left:8px;}
	.sidebar li{margin-bottom:8px; padding:2px;}
	a:hover{text-decoration:none;}
	li{list-style:none;}
	.social{margin:60px 0px;}
	.social h3{padding-bottom:10px; color:#000;}
	.social li{display:inline-block; margin:15px 0px;}
	.social a{color: #eef; background:#777; padding:10px; border-radius:6px; transition: background 0.7s, border-radius 0.7s; font-size:18px;}
	.social a:hover{color: #fff; border-radius:0px; background:#222;}
	.events{ margin:40px 30px; background:#fff; border:1px solid #888; border-top:5px solid #2aa6ca; padding:3px 7px;}
	.events h3{color:#000; padding:4px 1px; margin-left:5px; border-bottom:1px solid #888;}
	.events a{ color:#2aa6ca;}
	.right-sidebar{padding-left:25px;}
	
	footer{border-top:4px solid #444; padding:15px 30px; width:100%;}
	footer a{color:#000; border-bottom:2px solid #fff; transition: border-bottom 1s}
	footer a:hover{color:#011; border-bottom:2px solid #000;}
	@media screen and (max-width: 768px) {
		.sidebar{margin-right:5px;}
		.side{padding-right:5px;}
		.main-part{padding:25px;}
		.right-sidebar{padding-left:30px;}
	}
	</style>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span> 
		  </button>
		  <a class="navbar-brand" href="#"><h2><img src="<?php foreach($select_logo as $value) echo base_url().$value->logo_link; ?>" class="logo img-circle"></img>Researchers</h2></a>
		

		</div>
	  </div>

	</nav>
	<?php foreach ($select_researcher_by_id as $value) {?>
	<div class="header">
		<img src=<?php echo base_url()."asset/static/pro_cover.jpg" ?> style="height:375px; width:100%;">

		<?php
		if($value->researcher_photo==1){
		?>
			<img src=<?php echo base_url()."asset/pro.gif"; ?> class="img-responsive img-thumbnail" style="z-index: 1000!important; height:150px; width:150px; border-radius:75px; margin-top:-100px;position: absolute; right: 20px;">


			<?php
		}
		else{
?>
			<img src=<?php echo base_url().$value->researcher_photo; ?> class="img-responsive img-thumbnail" style="z-index: 1000!important; height:150px; width:150px; border-radius:75px; position: absolute; top:359px; right: 20px;">

			<?php
		}
		?>
			</div>
	<?php } ?>
	<div class="side row">
		
			  <!-- LEFT SIDEBAR STARTS -->
		
		
	  <div class="col-sm-3">
	  <div class="sidebar">
	  <ul>
	  <h3>The best researcher group</h3>
	  <li><b><a href="<?php echo base_url();?>user/home"><i class="fa fa-home" aria-hidden="true"></i> Home</a></b></li>
	  <li><b><a href="<?php echo base_url();?>user/aim_and_objective"><i class="fa fa-leaf" aria-hidden="true"></i> Aim and objectives</a></b></li>
	  <li><b><a href="<?php echo base_url();?>user/event"><i class="fa fa-clock-o" aria-hidden="true"></i> Events</a></b></li>

	  <li><b><a href="<?php echo base_url();?>user/researcher"><i class="fa fa-user-md" aria-hidden="true"></i> Researchers </a><a href="##"><i class="glyphicon glyphicon-chevron-down" aria-hidden="true"  data-toggle="collapse" data-target="#demo"></i></a></b></li>

				<ul id="demo" class="collapse">
					<?php foreach ($select_researcher as $value) { ?>
						<li><a href="<?php echo base_url().'user/researcher_by_id/'.$value->researcher_id; ?>"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $value->researcher_name; ?></a></li>
					<?php } ?>
					<li><a href="<?php echo base_url();?>user/researcher"><i class="fa fa-user-plus" aria-hidden="true"></i> View all researchers</a></li>

				</ul>

	  <li><b><a href="<?php echo base_url();?>user/fieldsite"><i class="fa fa-globe" aria-hidden="true"></i> Field sites</a></b></li>
	  <li><b><a href="<?php echo base_url();?>user/timeline"><i class="fa fa-tachometer" aria-hidden="true"></i> Timeline</a></b></li>
		  <li><b><a href="<?php echo base_url();?>user/publication"><i class="fa fa-book" aria-hidden="true"></i> Publication</a></b></li>
		  <li><b><a href="<?php echo base_url();?>user/all_news"><i class="fa fa-building" aria-hidden="true"></i> News</a></b></li>
		  <li><b><a href="<?php echo base_url();?>user/funding"><i class="fa fa-briefcase" aria-hidden="true"></i> Funding</a></b></li>
	  <li><b><a href="<?php echo base_url();?>user/contact"><i class="fa fa-users" aria-hidden="true"></i></i> Contact us</a></b></li>

	  </ul>

<!---------------- Login/Logout Button Starts ------------!-->
 		<?php
	 	if($this->session->userdata('researcher_logged_in'))
	  	{
		?>
	  	<div class="events" style="background: #eee;">
			<h3>Want log out?</h3>
			<div class="col-xm-12">  
	  			<a href="<?php echo base_url().'researcher_logout'?>"><button class="btn btn-info col-xm-12">Log out</button></a>
			</div>
 		</div>
		<?php
	  	}
	  	?>
    	<?php
	  	if(!$this->session->userdata('researcher_logged_in'))
	  	{
		?>
		<div class="events" style="background: #eee;">
			<h3><i class="fa fa-login" aria-hidden="true"></i>Want log in?</h3>
			<div class="col-xm-12">  
	    		<a href="<?php echo base_url().'researcher_login'?>"><button class="btn btn-info col-xm-12">Log in</button></a>
			</div>
 		</div>
		<?php
	  	}
	  	?>
<!---------------- Login/Logout Button Ends ------------!-->


	   <ul class="social">
	  <h3><i class="fa fa-rss" aria-hidden="true"></i> Social sites</h3>
	  <?php foreach ($select_link as $value) { ?>
		<li><a href="http://<?php echo $value->link_facebook; ?>" style="width:25px; padding:10px 14.5px;"><ii class="fa fa-facebook" aria-hidden="true"></i></a></li>
		<li><a href="http://<?php echo $value->link_twitter; ?>" style="width:25px; padding:10px 14.5px;"><ii class="fa fa-twitter" aria-hidden="true"></i></a></li>
		<li><a href="http://<?php echo $value->link_linkedin; ?>" style="width:25px; padding:10px 14.5px;"><ii class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		<li><a href="http://<?php echo $value->link_google_plus; ?>" style="width:25px; padding:10px 14.5px;"><ii class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		<?php } ?>
	  </ul>
	  <div class="events">

	  <h3><i class="fa fa-gift" aria-hidden="true"></i> Join Our Event</h3>
		  <ul>
		 <?php 
		 	$count = count($select_event);
		 	if($count==0)
			{
		?>	<div class="alert alert-danger alert"> 
				There is no event upcoming. Further events news will be here when available......
			</div>

		<?php	
			}
		 	foreach ($select_event as $value) {?>
		 
			  <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php echo $value->event_name; ?></li>
			  <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php echo $value->event_date; ?></li>
			  <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php echo $value->event_place; ?></li>
		<?php	break; } ?>

		  </ul>
	  <a href="<?php echo base_url().'user/event' ?>">View all events...</a>
	  </div>
	  </div>
	  </div>
	  
	  
	  <!-- LEFT SIDEBAR ENDS-->
	  
	  <!--main part-->
	  
		<?php foreach ($select_researcher_by_id as $value) { ?>
		<div class="col-sm-6 main-part">
		
		<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu0">About</a></li>
    <li><a data-toggle="tab" href="#menu1">Projects</a></li>
    <li><a data-toggle="tab" href="#menu3">Publications</a></li>
    <li><a data-toggle="tab" href="#menu2">Others</a></li>
  </ul>

  <div class="tab-content">
    <div id="menu0" class="tab-pane fade in active">
      <h3>About</h3>
      <p><?php echo $value->researcher_about; ?></p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Projects</h3>
      <p><?php echo $value->researcher_projects; ?></p>
    </div>
    
    <div id="menu3" class="tab-pane fade">
      <h3>Publications</h3>
      <p><?php echo $value->researcher_publications; ?></p>
    </div>
	
	<div id="menu2" class="tab-pane fade">
      <h3>Others</h3>
      <p><?php echo $value->researcher_others;?></p>
    </div>
  </div>
		</div>
		
		
		<!--right side bar-->
		
		
		<div class="col-sm-3 right-sidebar">
			<h1><?php echo $value->researcher_name;?></h1>
			<h4><?php echo $value->researcher_designation_post;?></h4>
			<?php
		if($this->session->userdata('researcher_logged_in') && $this->session->userdata('researcher_id')== $value->researcher_id)
		{
			?>

			<a href=<?php echo base_url()."user/edit_researcher_by_id/".$value->researcher_id ;?>><button class="btn btn-info">Edit Profile</button></a>

		<?php  }	 ?>
			<h3> Contact </h3>

		
	
  
				  <ul>
						<li><a href="<?php echo $value->researcher_phone;?>"><i class="fa fa-mobile" aria-hidden="true"></i> cell: <?php echo $value->researcher_phone;?></a></li>
						<li><a href="<?php echo $value->researcher_email;?>"><i class="fa fa-envelope" aria-hidden="true"></i> email: <?php echo $value->researcher_email;?></a></li>
						<li><a href="<?php echo $value->researcher_facebook_link;?>"><i class="fa fa-facebook" aria-hidden="true"></i> <?php echo $value->researcher_facebook_link;?></a></li>
						<li><a href="<?php echo $value->researcher_linkedin_link;?>"><i class="fa fa-twitter" aria-hidden="true"></i> <?php echo $value->researcher_linkedin_link;?></a></li>
						
				  </ul>


				  
			
		</div>


		
	</div>

		

    

	<?php } ?>

	<footer>
		<a href="<?php echo base_url();?>user/home"">Home</a> | <a href="<?php echo base_url();?>user/event">Events</a> | <a href="<?php echo base_url();?>user/researcher">Researcher</a> | <a href="<?php echo base_url();?>user/publication">Publication</a> | <a href="<?php echo base_url();?>user/funding">Funding</a> | <a href="<?php echo base_url();?>user/contact">Contact us</a>

		<?php
		if(!$this->session->userdata('researcher_logged_in'))
		{
			?>
			|<a href="<?php echo base_url()?>




researcher_login">Log in</a>
			<?php
		}



		  if($this->session->userdata('researcher_logged_in'))
		  {
			  ?>
			  |<a href="<?php echo base_url()?>




researcher_logout">Log out</a>
			  <?php
		  }

		 
		?>
		</br></br>East West University -Dhaka
		</br>&copy Researchers<p class="pull-right"><b>Developed By <a href="http://resoftbd.com/">Resoft</a></b></p>
	</footer>
</body>
</html>
