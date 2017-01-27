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
		body{font-family: 'Merriweather', serif; margin:0px; padding:0px; overflow-x:hidden;}
		.header{background:#222; width:100%!important; color:#2aa6ca; font-family: 'Vampiro One', cursive; padding-left:60px; padding-top:13px; padding-bottom:12px; border-bottom:5px solid #2aa6ca;}
		.logo{height:50px; width:50px; margin-right:15px;}
		.sidebar{background:#eee; color:#011; margin:0px; margin-right:42px; margin-left:-20px; padding:15px 0px;}
		.sidebar h3{ color:#2aa6ca; margin-left:-5px; margin-bottom:17px; padding-right:10px;}
		.sidebar a{color:#000; padding-left:0px; transition: padding 0.4s;}
		.sidebar a:hover{ color: #011; padding-left:8px;}
		.sidebar li{margin-bottom:8px;}
		a:hover{text-decoration:none;}
		li{list-style:none;}
		.publication-list{}
		.publication-list li a{color:#000; padding-left:0px; transition: padding 0.5s;}
		.publication-list li a:hover{ color: #011; padding-left:8px;}
		.social{margin:60px 0px;}
		.social h3{padding-bottom:10px; color:#000;}
		.social li{display:inline-block; margin:15px 0px;}
		.social a{color: #eef; background:#777; padding:10px; margin:5px; border-radius:6px; transition: background 0.7s, border-radius 0.7s; font-size:18px;}
		.social a:hover{color: #fff; border-radius:0px; background:#222;}
		.events{ margin:40px 30px; background:#fff; border:1px solid #888; border-top:5px solid #2aa6ca; padding:3px 7px;}
		.events h3{color:#000; padding:4px 1px; margin-left:5px; border-bottom:1px solid #888;}
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

	<!-- LEFT SIDEBAR ENDS-->


	<!-- MAIN PART STARTS -->

	<div class="col-sm-6 main">
		<h3><i class="fa fa-users" aria-hidden="true"></i> Publications</h3>
		<p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>



		<!-- Slider -->
		<div class="container-fluid slides">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4500">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/slider1.jpg" alt="resoft" class="slider-image img-responsive">
					</div>

					<div class="item">
						<img src="img/slider2.jpg" alt="resoft" class="slider-image img-responsive">
					</div>

					<div class="item">
						<img src="img/slider3.jpg" alt="resoft" class="slider-image img-responsive">
					</div>

					<div class="item">
						<img src="img/slider4.jpg" alt="resoft" class="slider-image img-responsive">
					</div>

				</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<!-- Slider ends-->



	</div>


	<!-- MAIN BODY ENDS -->


<!-- RIGHT SIDE BAR STARTS -->

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


    <div class="publication-list search">
        <h3><i class="fa fa-book" aria-hidden="true"></i> Archieve</h3>
        <br>
        <ul>
            <?php
            $time = date("Y-m-d");
            list($year, $m, $d) = explode('-', $time);

            for($i = $year;$i>=2014;$i--){

                ?>
                <li><b><a href="##" data-toggle="collapse" data-target="#demo<?php echo $i;?>"><i class="fa fa-navicon" aria-hidden="true"></i> <?php echo $i;?> <i class="fa fa-caret-down" aria-hidden="true"></i></a></b></li>
                <ul id="demo<?php echo $i;?>" class="collapse">
                    <?php
                    for ($month=1; $month <=12 ; $month++) {
                        if($month==1){$month_name = 'January';}
                        if($month==2){$month_name = 'February';}
                        if($month==3){$month_name = 'March';}
                        if($month==4){$month_name = 'April';}
                        if($month==5){$month_name = 'May';}
                        if($month==6){$month_name = 'June';}
                        if($month==7){$month_name = 'July';}
                        if($month==8){$month_name = 'August';}
                        if($month==9){$month_name = 'September';}
                        if($month==10){$month_name = 'October';}
                        if($month==11){$month_name = 'November';}
                        if($month==12){$month_name = 'December';}

                        $CI =& get_instance();
                        $CI->load->model('Mdl_admin');
                        $subcategory = $CI->Mdl_admin->select_publication_archieve($i,$month);
                        $total = count($subcategory);
                        ?>
                        <li><a href="<?php echo base_url()?>user/publication_archieve/<?php echo $i;?>/<?php echo $month;?>"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $month_name." (".$total.")"?>. </a></li>
                        <?php
                        if($i==$year && $month==$m)
                            break;

                    }



                    ?>


                </ul>
                <br>
                <?php

            }
            ?>



    </div>
    <div class="publication-list search">
        <h3><i class="fa fa-book" aria-hidden="true"></i> Category</h3>
        <br>
        <ul>
            <?php
                foreach($category as $value_cat) {
                    $parent = $value_cat->category_id;
                    $CI =& get_instance();
                    $CI->load->model('Mdl_admin');
                    $subcategory = $CI->Mdl_admin->load_subcategory($parent);
                    $count = count($subcategory);

            if($count==0)
            {
            ?>
                <li><b><a href="<?php echo base_url()?>user/publication_category/<?php echo $value_cat->category_id?>"><i class="fa fa-navicon" aria-hidden="true"></i> <?php echo $value_cat->category_name?> </a></b></li>


                <?php
            }
            else{
            ?>
                <li><b><a href="##" data-toggle="collapse" data-target="#demo<?php echo $parent?>"><i class="fa fa-navicon" aria-hidden="true"></i> <?php echo $value_cat->category_name?> <i class="fa fa-caret-down" aria-hidden="true"></i></a></b></li>

                <ul id="demo<?php echo $parent?>" class="collapse">

                    <li><b><a href="<?php echo base_url()?>user/publication_category/<?php echo $value_cat->category_id?>"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $value_cat->category_name?> </a></b></li>

            <?php

            foreach($subcategory as $value_sub) {
                ?>

                    <li><a href="<?php echo base_url()?>user/publication_category/<?php echo $value_sub->category_id?>"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $value_sub->category_name?> </a></li>

          <?php

                }
            }
            ?>
            </ul>
        <br>
                    <?php
                }
            ?>
        </ul>
    </div>


</div>
</div>


<!-- Right sidebar ends -->
<footer>
	  <a href="<?php echo base_url();?>user/home"">Home</a> | <a href="<?php echo base_url();?>user/event">Events</a> | <a href="<?php echo base_url();?>user/researcher">Researcher</a> | <a href="<?php echo base_url();?>user/publication">Publication</a> | <a href="<?php echo base_url();?>user/funding">Funding</a> | <a href="<?php echo base_url();?>user/contact">Contact us</a>

	</br></br>East West University -Dhaka
	</br>&copy Researchers<p class="pull-right"><b>Developed By <a href="http://resoftbd.com/">Resoft</a></b></p>
</footer>
</body>

</html>