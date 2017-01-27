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
				<h3><i class="fa fa-leaf" aria-hidden="true"></i>Update aim and objective : </h3><br>
			  <div class="row">
			  <div class="col-sm-7" style="padding-right:25px;">

			<?php
			foreach ($select_aim as $value) {
				 echo form_open(base_url().'admin/update_aim');
			?>
			<div class="row">
				<div class="col-sm-9 form-group">
					<textarea class="form-control" type="text" id="name" name="aim_text" rows="8" required><?php echo $value->aim_text; ?></textarea>				
				</div>

			  <button class="btn btn-primary pull-right" type="submit" > Update Aim </button>
			  </div>
			 <?php
		echo form_close();
	}
		?>


			<?php
			foreach ($select_objective_by_id as $value) {
				 echo form_open(base_url().'admin/update_objective_by_id/'.$value->objective_id);
			?>
			<div class="row">
				<div class="col-sm-9 form-group">
					<textarea class="form-control" type="text" id="name" name="objective_text" rows="8" required><?php echo $value->objective_text; ?></textarea>				
				</div>

			  <button class="btn btn-primary pull-right" type="submit" > Update Objective </button>
			  </div>
			 <?php
		echo form_close();
	}
		?>
		
			<?php
				 echo form_open(base_url().'admin/insert_objective');
			?>
			
			  <div class="row">
				<div class="col-sm-9 form-group">
				  <textarea class="form-control" id="name" value ="" name="objective_text" placeholder="Add New Objective" type="text" required rows="8"></textarea>
				</div>
			  <button class="btn btn-primary pull-right" type="submit"> Add New </button>
			  </div>
			 <?php
		echo form_close();
		?>


			  </div>

			  
			   <!-- Showing all objective titles-->
			  <div class="col-sm-5 form-group" style="padding-left:15px; border-left:1px dotted #ccc;">
			  <h3 style="margin-top:-25px; margin-bottom:15px; margin-left:10px;"class="col-sm-11">All Objectives</h3>
		<?php
		foreach ($select_objective as $value1) {

			$id=$value1->objective_id;
				echo'<div class="row" style="padding:20px 0px 0px ">
					<div class="col-xs-9">
					<a href="'.base_url().'admin/objective_by_id/'.$value1->objective_id.'" ><h4 class="cont-head">'.$value1->objective_text.'<span class="label label-success"></span></h4></a>
					</div>
					<div class="col-xs-1">';
					?>
					 <a id="<?php echo $id;?>" style="color:red;"title="delete" onclick="return confirm('Are you sure want to delete this objective?');" href="<?php echo base_url();?>admin/delete_objective/<?php echo $id;?>"> Delete </a>
					
					</div>
					</div>
		<?php
		}			
		?>					
								

		<?php
			$count = count($select_objective);
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