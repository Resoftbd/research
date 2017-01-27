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
				<h3><i class="fa fa-globe" aria-hidden="true"></i>Sponsors ADD</h3><br>
			  <div class="row">
			  <div class="col-sm-8" style="padding-right:25px;">
			  <div class="row">
				<div class="col-sm-3 form-group">
				  <h4>Sponsor Name : </h4>
				</div>
			<?php
				 echo form_open_multipart(base_url().'admin/insert_funding_sponsor');
			?>
				<div class="col-sm-9 form-group">
				  <input class="form-control" id="name" name="funding_sponsor_name" placeholder="Name" type="text" required>
				</div>
			  </div> 
			  
			  <div class="row">
				<div class="col-sm-3 form-group">
				  <h4>Sponsor About : </h4>
				</div>
				<div class="col-sm-9 form-group">
				  <textarea  class="form-control" id="name" name="funding_sponsor_contact" value="" placeholder="" type="text"  rows="6" required></textarea><br>
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
				<div class="col-sm-3 form-group">
				  <h4>Add a Logo</h4>
				</div>
				<div class="col-sm-9 form-group">
					<input id="a" required="required" name="funding_sponsor_logo" placeholder="Add a Logo" type="file">
			    </div>
			  </div>
			  
			   <p class="notice"> *Give proper title, tags and add a relevant photo to your post. All these will help you to get more traffic to your web site.</p>
			<div class="row">
			  <button class="btn btn-primary pull-right" type="submit" style=" margin-top:15px;"> Add </button>
			  </div>
			 <?php
		echo form_close();
		?>
			  </div>
			  
			   <!-- Showing all news titles-->
			  <div class="col-sm-4 form-group" style="padding-left:15px; border-left:1px dotted #ccc;">
			  <h3 style="margin-top:-25px; margin-bottom:15px; margin-left:10px;"class="col-sm-11">All Sponsors</h3>
		<?php
		foreach ($select_funding as $value1) {

			$id=$value1->funding_sponsor_id;
				echo'<div class="row" style="padding:20px 0px 0px ">
					<div class="col-xs-9">
					<a href="'.base_url().'admin/funding_sponsor_by_id/'.$id.'" ><h4 class="cont-head">'.$value1->funding_sponsor_name.'<span class="label label-success"></span></h4></a>
					</div>
					<div class="col-xs-1">';
					?>
					 <a id="<?php echo $id;?>" style="color:red;"title="delete" onclick="return confirm('Are you sure want to delete this sponsor?');" href="<?php echo base_url();?>admin/delete_funding_sponsor/<?php echo $id;?>">Delete </a>
					
					</div>
					</div>
		<?php
		}			
		?>					
								

		<?php
			$count = count($select_funding);
		?>
				<div class="row" style="padding:20px 0px 0px ">
					<div class="col-xs-11">
						<?php
						if($count==0)
							echo 'Oops! No Sponsors Yet!';
						?>
					</div>
				</div>
							
									
				</div>
</body>
</html>