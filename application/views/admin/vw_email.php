<!DOCTYPE html>
<html lang="en">
	
				 <!-- Main content-->
			
				<div class="col-xs-10 content">
				<?php
				if($msg!='')
				{
				?>
				<div class="alert alert-<?php echo $msg_type;?> alert-dismissable"> 
					<button type="button" class="close" data-dismiss="alert" 
                                aria-hidden="true">
                                &times;
                              </button>
					<?php echo $msg;?>
					</div>
				<?php
				}
				?>
				<div class="cat">
				<h3><i class="fa fa-globe" aria-hidden="true"></i>Send a email :</h3><br>
			  <div class="row">
			  <div class="col-sm-7" style="padding-right:25px;">
				  <?php
				  echo form_open_multipart(base_url().'admin/send_mail');

				  foreach($email_settings as $value1) {
					  ?>
					  <input value="<?php echo $value1->email_name;?>" name="email_name"  type="hidden">
					  <input value="<?php echo $value1->email_email;?>" name="email_email"  type="hidden">
					  <input value="<?php echo $value1->email_password;?>" name="email_password"  type="hidden">

					  <?php
				  }?>
			  <div class="row">
				<div class="col-sm-3 form-group">
				  <h4>To :</h4>
				</div>

				<div class="col-sm-9 form-group">
				  <input class="form-control" id="name" name="email_to" placeholder="To" type="text" required>
				</div>
			  </div>
				  <div class="row">
					  <div class="col-sm-3 form-group">
						  <h4>Subject :</h4>
					  </div>

					  <div class="col-sm-9 form-group">
						  <input class="form-control" id="name" name="email_subject" placeholder="Subject" type="text" required>
					  </div>
				  </div>
				  <div class="row">
				<div class="col-sm-3 form-group">
				  <h4>Message :</h4>
				</div>
				<div class="col-sm-9 form-group">
					<textarea  class="form-control" required="required" id="email_text"  name="email_text" placeholder="Email Content" type="text"  rows="8"></textarea><br>
				</div>
			  </div> 
			  
			<!--  <div class="row">
				<div class="col-sm-3 form-group">
				  <h4>Tags</h4>
				</div>
				<div class="col-sm-9 form-group">
				  <input class="form-control" id="tags" name="news_tags" placeholder="tags" type="text" required>
				</div>
			  </div> 
			 --> 
			  

			  
			 	<div class="row">
			  <button class="btn btn-primary pull-right" type="submit" style=" margin-top:15px;"> Send </button>
			  </div>

			 <?php
		echo form_close();
		?>
			  </div>
			  
			   <!-- Showing all news titles-->
			  <div class="col-sm-5 form-group" style="padding-left:15px; border-left:1px dotted #ccc;">
			  <h3 style="margin-top:-25px; margin-bottom:15px; margin-left:10px;"class="col-sm-11">Email Settings</h3>
<?php

foreach($email_settings as $value) {
	echo form_open_multipart(base_url().'admin/change_email');
	?>
	<div class="row">
		<div class="col-sm-4 form-group">
			<h4>Name</h4>
		</div>
		<input class="form-control" id="name" name="email_id" value="<?php echo $value->email_id;?>" type="hidden" required>
		<div class="col-sm-8 form-group">
			<input class="form-control" id="name" value="<?php echo $value->email_name;?>" name="email_name" placeholder="Gmail Id" type="text" required>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 form-group">
			<h4>Gmail ID</h4>
		</div>

		<div class="col-sm-8 form-group">
			<input class="form-control" value="<?php echo $value->email_email;?>" id="name" name="email_email" placeholder="Gmail Password" type="text" required>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 form-group">
			<h4>Gmail Password</h4>
		</div>

		<div class="col-sm-8 form-group">
			<input class="form-control" id="name" name="email_password" placeholder="To" type="password" required value="<?php echo $value->email_password;?>">
		</div>
	</div>

	<div class="row">
		<button class="btn btn-primary pull-right" type="submit" style=" margin-top:15px;"> Change </button>
	</div>
	<p class="notice"> *This Email service will only work for Gmail.</p>
	<?php
	echo form_close();
}
?>
							
									
				</div>
</body>
</html>