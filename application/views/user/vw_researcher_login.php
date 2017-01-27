<!DOCTYPE html>
<html lang="en">
<head>
  <title>EWU Bio-informatic Research Team</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700,500" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset/style.css">
	<style>
		.content{margin-top:160px; height:270px; border-radius:7px; overflow:hidden;}
		.element{margin:15px;}
		@media screen and (max-width: 780px) {
			.content{padding:10px!important; margin-left:170px!important; margin-right:170px!important; margin-top:160px;}
			.element{margin:15px 10px;}
		}
		@media screen and (max-width: 560px) {
			.content{padding:10px!important; margin-left:50px!important; margin-right:50px!important; margin-top:150px;}
		}
		@media screen and (max-width: 480px) {
			.content{padding:5px!important; margin-left:16px!important; margin-right:16px!important; margin-top:150px;}
			.element{margin:15px 5px;}
		}
		@media screen and (max-width: 321px) {
			.content{padding:4px!important; margin-left:4px!important; margin-right:4px!important; margin-top:140px;}
			.element{margin:15px 0px;}
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-md-4">
			
		</div>
			<div class="col-md-4 content">
				<h3>Researcher Login</h3>
					<?php
				if(isset($_SERVER['HTTP_REFERER']))
                {
                   $redirect_to = str_replace(base_url(),'',$_SERVER['HTTP_REFERER']);
                }
                else
                {
                     $redirect_to = $this->uri->uri_string();
                }  
						if(isset($msg)	)
						{
					?>
						<div class="alert-danger" style="padding:15px;"> <?php echo $msg ?></div>

					<?php	
						}
				    ?>
					<?php
						if(validation_errors())
						{
					?>
						<div class="alert-danger"> <?php echo validation_errors(); ?></div>

					<?php	
						}
				    ?>
					
					<?php
					echo form_open(base_url().'




researcher_login/do_login?redirect='.urlencode($redirect_to),'class="form-horizontal"');
					?>
						<div class="row element">
						<div class="col-xs-3">
						<h4>Username:</h4>
						</div>
						<div class="col-xs-9">
						<input class="form-control" id="researcher_username" name="researcher_username" placeholder="Type Username" type="text" required>
						</div>
						</div>
						<div class="row element">
						<div class="col-xs-3">
						<h4>Password:</h4>
						</div>
						<div class="col-xs-9">
						<input class="form-control" id="researcher_password" name="researcher_password" placeholder="Type Password" type="password" required>
						</div>
						</div>
						<button class="btn btn-primary pull-right" type="submit" style="margin:20px;">Log in</button><br>
					<?php
					echo form_close();
					?>
				<p class="notice"> Forgot password? <a href="admin.html"> Click here. </a>
			</div>
		<div class="col-xs-4">
		
		</div>
	</div>
	
</body>
</html>