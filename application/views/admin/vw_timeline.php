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
				<h3><i class="fa fa-tachometer" aria-hidden="true"></i>Project Timeline : </h3><br>
			  <div class="row">
			  <div class="col-sm-7">

			<?php
				 echo form_open(base_url().'admin/insert_timeline');
			?>
			<div class="row">
				<div class="col-sm-11 form-group">
					<input class="form-control" type="date" id="timeline_start_date" required="required"  name="timeline_start_date" placeholder="Activity Starting Date">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-11 form-group">
					<textarea class="form-control" required="required" type="text" id="name" name="timeline_activity" placeholder="Project Activity"></textarea>		
				</div>
				</div>
			<div class="row">
				<div class="col-sm-11 form-group">
			  <button class="btn btn-primary pull-right" type="submit" > Insert New</button>
			  </div>
			  </div>
			 <?php
		echo form_close();
		?>

			  </div>

			  
			   <!-- Showing all objective titles-->
			  <div class="col-sm-5 form-group" style="padding-left:15px; border-left:1px dotted #ccc;">
			  <h3 style="margin-top:-25px; margin-bottom:15px; margin-left:10px;"class="col-sm-11">All Activities</h3>
		<?php
		foreach ($select_timeline as $value1) {

			$id=$value1->timeline_id;
				echo'<div class="row" style="padding:20px 0px 0px ">
					<div class="col-xs-9">
					<a href="'.base_url().'admin/timeline_by_id/'.$value1->timeline_id.'" ><h4 class="cont-head">'.$value1->timeline_start_date.' : '.$value1->timeline_activity.'<span class="label label-success"></span></h4></a>
					</div>
					<div class="col-xs-1">';
					?>
					 <a id="<?php echo $id;?>" style="color:red;"title="delete" onclick="return confirm('Are you sure want to delete this Activity?');" href="<?php echo base_url();?>admin/delete_timeline/<?php echo $id;?>"> Delete </a>
					
					</div>
					</div>
		<?php
		}			
		?>					
								

		<?php
			$count = count($select_timeline);
		?>
				<div class="row" style="padding:20px 0px 0px ">
					<div class="col-xs-11">
						<?php
						if($count==0)
							echo 'Oops! No objectives uploaded!';
						?>
					</div>
				</div>
							
									
				</div>
</body>
</html>