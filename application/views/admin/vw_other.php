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
				<h3><i class="fa fa-chain" aria-hidden="true"></i>Update Logo</h3><br>

			   <!-- Showing logo preview-->
		<?php
		foreach ($select_logo as $value1) {
			$id=$value1->logo_id;?>

					<div class="col-sm-7" style="padding:20px 0px 20px ">
					<div class="col-sm-3">
						<img src="<?php echo base_url().$value1->logo_link;?>" class="img-thumbnail img-responsive">
					</div>
					<div class="col-xs-1">
					</div>
					</div>
		<?php
		}			
		?>					
								

		<?php
			$count = count($select_logo);
		?>
				<div class="row" style="padding:20px 0px 0px ">
					<div class="col-xs-11">
						<?php
						if($count==0)
							echo 'Oops! No logo uploaded!';
						?>
					</div>
				</div>
							
		
			  <div class="row">
			  <div class="col-sm-8" style="padding-right:25px;">
			  <div class="row">
			<?php
				 echo form_open_multipart(base_url().'admin/update_logo');
			?>
			  
			  <div class="row">
				<div class="col-sm-3 form-group">
				  <h4>Update logo:</h4>
				</div>
				<div class="col-sm-8 form-group">
					<input id="name" class="form-control" name="logo_link" placeholder="" type="file" required="required">
					<?php 
					foreach ($select_logo as $value1) {

					echo '<input id="name" value="'.$value1->logo_id.'" name="logo_id" placeholder="" type="hidden">';
				}
					?>
			    </div>
			  </div>
			  
			 <div class="row">
			 					<div class="col-sm-11">

			 	<button class="btn btn-primary pull-right" type="submit" style=" margin-top:15px;"> Update </button>
			 </div>
			 </div>
			 <?php
		echo form_close();
		?>
			  </div>
									
				</div>
			  </div>
			  <?php echo form_open(base_url().'admin/update_link');
			  foreach ($select_link as $value) {
			  ?>
			  <div class="row">
			  	<div class="col-sm-9 form-group">
			  		<h4>Update Social Media Links:</h4><br>
			  	    <div class="row">
			  	        <div class="col-sm-2">
			  	        	<label>Facebook : </label>
			  	        </div>
			  	        <div class="col-sm-8">
							<input type="text" class="form-control" id="name" value="<?php echo $value->link_facebook; ?>" name="link_facebook" placeholder="facebook">
			  	        </div>
			  	    </div>
			  	    <div class="row">
			  	        <div class="col-sm-2">
			  	        	<label>Twitter : </label>
			  	        </div>
			  	        <div class="col-sm-8">
							<input type="text" class="form-control" id="name"  value="<?php echo $value->link_twitter; ?>" name="link_twitter" placeholder="twitter">
			  	        </div>
			  	    </div>
			  	    <div class="row">
			  	        <div class="col-sm-2">
			  	        	<label>Google+ : </label>
			  	        </div>
			  	        <div class="col-sm-8">
							<input type="text" class="form-control" id="name" value="<?php echo $value->link_google_plus; ?>" name="link_google_plus" placeholder="google+">
			  	        </div>
			  	    </div>
			  	    <div class="row">
			  	        <div class="col-sm-2">
			  	        	<label>Linkedin : </label>
			  	        </div>
			  	        <div class="col-sm-8">
							<input type="text" class="form-control" id="name" value="<?php echo $value->link_linkedin; ?>" name="link_linkedin" placeholder="linkedin">
			  	        </div>
			  	    </div>
			  	    <div class="row">
			  	    	<div class="col-sm-10">
			  	    		<button class="btn btn-primary pull-right" type="submit" style=" margin-top:15px;"> Update </button>
			  	    	</div>
			  	    </div>
			  	</div>
			  </div>
			  <?php } echo form_close(); ?>
		</div>
</body>
</html>