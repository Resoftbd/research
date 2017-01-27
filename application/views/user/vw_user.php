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
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style>
	body{font-family: 'Merriweather', serif; margin:0px; padding:0px; overflow-x:hidden;font-size: 13px;}
	.header{background:#222; width:100%!important; color:#2aa6ca; font-family: 'Vampiro One', cursive; padding-left:60px; padding-top:13px; padding-bottom:12px; border-bottom:5px solid #2aa6ca;}
	.logo{height:50px; width:50px; margin-right:15px;}
	.sidebar{background:#eee; color:#011; margin:0px; margin-right:42px; margin-left:-20px; padding:15px 0px;}
	.sidebar h3{ color:#2aa6ca; margin-left:-5px; margin-bottom:17px; padding-right:10px;}
	.sidebar a{color:#000; padding-left:0px; transition: padding 0.4s;}
	.sidebar a:hover{ color: #011; padding-left:8px;}
	.sidebar li{margin-bottom:8px;}
	a:hover{text-decoration:none;}
	li{list-style:none;}
	.social{margin:60px 0px;}
	.social h3{padding-bottom:10px; color:#000;}
	.social li{display:inline-block; margin:15px 0px;}
	.social a{color: #eef; background:#777; padding:10px;border-radius:6px; transition: background 0.7s, border-radius 0.7s; font-size:18px;}
	.social a:hover{color: #fff; border-radius:0px; background:#222;}
	.events{ margin:40px 30px; background:#fff; border:1px solid #888; border-top:5px solid #2aa6ca; padding:3px 7px;}
	.events h3{color:#000; padding:4px 1px; margin-left:5px; border-bottom:1px solid #888;}
	.event-list li{margin-left:-25px; padding:3px 8px; background:#EEE; margin-bottom:15px; border-left:3px solid #2aa6ca;}
	.date-time{font-size:12px; color:#2aa6ca; width:100%; border-bottom:1px solid #888; padding-bottom:3px; margin-top:-9px; }
	.google-map{height:500px; width:100%; background-image: url('img/bkg.jpg'); background-attachment: repeat; opacity:0.99;}
	.events a{ color:#2aa6ca;}
	.container{background:#fafafa;width:100%; margin:0px; padding:0px;}
	.main{padding:10px 0px; padding-left:-10px;}
	.slides{margin:27px 0px;}
	.slider-images{ box-shadow: 1px 1px 1px #000;}
	.extra-right{padding:5px 20px; padding-right:0px;}
	.extra-right h3{padding-top:5px;}
	.extra-right p{padding-right:5px;}
	.search{padding:1px 10px; margin-left:17px; padding-right:25px;}
	footer{border-top:4px solid #444; padding:15px 30px; width:100%;}
	footer a{color:#000; border-bottom:2px solid #fff; transition: border-bottom 1s}
	footer a:hover{color:#011; border-bottom:2px solid #000;}
	@media screen and (max-width: 1024px) {
		.social a{padding:5px; margin:5px;}
		.sidebar{margin-right:10px;}
		.extra-right{padding:5px 7px;}
		.search{margin-left:15px; padding-right:25px;}
	  }
	  @media screen and (max-width: 768px) {
		.social a{padding:3px; margin:4px; font-size:16px;}
		.sidebar{margin-right:5px;}
		.extra-right{padding:5px 2px;}
		.events{margin:30px 5px;}
		.search{padding:1px; margin-left:5px}
	  }
	</style>

  </head>

  <body>
  <div class="header ">
  	<?php foreach ($select_logo as $value): ?>
  			<h1><img src="<?php echo base_url().$value->logo_link; ?>" style="height:80px; width:80px" class="logo img-circle"></img>B.i.R.T. Research</h1>


  	<?php endforeach ;
            
?>

  </div>
  <div class="row container">
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
		?>
                <div class="alert alert-danger alert">
				There is no event upcoming. Further events news will be here when available......
			</div>

		<?php
			}
		 	foreach ($select_event as $value) {
	     ?>

			  <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php echo $value->event_name; ?></li>
			  <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php echo $value->event_date; ?></li>
			  <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php echo $value->event_place; ?></li>
		<?php	break; } ?>

		  </ul>
	  <a href="<?php echo base_url().'user/event' ?>">View all events...</a>
	  </div>
	  </div>
	  </div>
	  			<?php
		if(isset($home))
		{	
			$this->load->view('user/vw_home');
		}  
		else if(isset($other))
		{	
			$this->load->view('user/vw_other');
		} 
		else if(isset($dashboard))
		{
			$this->load->view('user/vw_dashboard');
		}
		else if(isset($project_by_id))
		{
			$this->load->view('user/vw_project_by_id');
		}

		else if(isset($slideshow))
		{
			
			$this->load->view('user/vw_slideshow');
		}

		else if(isset($news))
		{

			$this->load->view('user/vw_news');
		}
		else if(isset($all_news))
		{

			$this->load->view('user/vw_all_news');
		}
		 

		else if(isset($publication_details))
		{
			$this->load->view('user/vw_publication_details');
		}
		else if(isset($aim_and_objective))
		{
			$this->load->view('user/vw_aim_and_objective');
		} 
		else if(isset($event))
		{
			$this->load->view('user/vw_event');
		} 
		 
		else if(isset($researcher))
		{
			$this->load->view('user/vw_researcher');
		} 
		 
		else if(isset($fieldsite))
		{
			$this->load->view('user/vw_fieldsite');
		} 
		 
		else if(isset($timeline))
		{
			$this->load->view('user/vw_timeline');
		}

 
		else if(isset($funding))
		{
			$this->load->view('user/vw_funding');
		} 
 
		else if(isset($contact))
		{
			$this->load->view('user/vw_contact');
		} 

		?>
	  
	  
	  <div class="col-sm-3 extra-right">
	  <div class="search">
		  <?php
		  echo form_open(base_url().'user/search');
		  ?>
	  <h3><i class="fa fa-search" aria-hidden="true"></i> Search</h3>
	  <div class="input-group">
            <input type="text" class="form-control" placeholder="Search publication" name="search_value" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
		  <?php
		  echo form_close();
		  ?>
	  </div>
	  <div class="events" style="background: #eee;">
	  <h3><i class="fa fa-pencil-square" aria-hidden="true"></i> Project blog</h3>
          <?php foreach ($latest_blog as $blog){
              ?>
		  <b></b><h4>"<?php echo $blog->blog_headline;?>"</h4></b>
		  <p class="text-justify"><?php echo $blog->blog_text;?></p> </div>
          <?php
          }
          ?>
	  <div class="events" style="background: #eee;">
	  <h3><i class="fa fa-twitter" aria-hidden="true"></i> Latest Tweet</h3>
	  <p class="text-justify">Although there are currently no paid positions available in our team, we are always interested in working with committed individuals with interests and previous expertise in areas such as anthropology, ethnography, social media, film or dissemination who are willing to collaborate with us on to this exciting project.</p>
	  </div>



	  </div>
  </div>

  <footer>
	  <a href="<?php echo base_url();?>user/home"">Home</a> | <a href="<?php echo base_url();?>user/event">Events</a> | <a href="<?php echo base_url();?>user/researcher">Researcher</a> | <a href="<?php echo base_url();?>user/publication">Publication</a> | <a href="<?php echo base_url();?>user/funding">Funding</a> | <a href="<?php echo base_url();?>user/contact">Contact us</a>

	  </br>
	</br>East West University -Dhaka
	  </br>&copy Researchers<p class="pull-right"><b>Developed By <a href="http://resoftbd.com/">Resoft</a></b></p>
  </footer>
  </body>
  
 </html>