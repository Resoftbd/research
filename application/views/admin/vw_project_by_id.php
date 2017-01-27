<!DOCTYPE html>
<html lang="en">
<body>
<!-- Main content-->
			
	<div class="col-xs-10 content">
				<?php
				if($msg!='')
				{
				?>

				<div class="alert alert-<?php echo $msg_type;?> alert-dismissable"> 
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        &times;
                    </button>
					<?php echo $msg;?>
				</div>

				<?php
				}

				?>

		<div class="cat">
			<h4><i class="fa fa-book" aria-hidden="true"></i>Update Project :</h4><br>
				<div class="row">
					<div class="col-sm-8">

<?php

					  	foreach ($select_project_by_id as $value) 
					  		{
							$id = $value->project_id;
						 echo form_open_multipart(base_url().'admin/update_project_by_id/'.$id);
						?>
					  	<div class="row">
							<div class="col-sm-11 form-group">
								<label>Project Title : </label>
								<input class="form-control" id="name" value="<?php echo $value->project_title; ?>" name="project_title" placeholder="Project Title" type="text" required>
							</div>
					  	</div>
					  	<div class="row">
							<div class="col-sm-11 form-group">
								<label>Project Members : </label>
								<input class="form-control" id="name" value="<?php echo $value->project_member; ?>" name="project_old_member" placeholder="Project Member" type="text" required>
							</div>
					  	</div>

						<div class="row">
							<div class="col-sm-11 selectpicker">
								<label>Select Members : </label>
								<select name="project_member[]"  style="width:100%;margin-top:10px; padding:3px 10px;" class="selectpicker form-control" size="3" multiple="multiple" tabindex="1">
									<option value="" style="display:none">Select Members</option>
									<?php
									foreach ($select_researcher as $value2) {
										echo '<option value="'.$value2->researcher_name.'" >'.$value2->researcher_name.'</option>';
									}

									?>
								</select>
								<p>*Hold down the Ctrl (windows) / Command (Mac) button to select multiple options.</p>
							</div>

						</div>
						<div class="row">
							<div class="col-sm-11 form-group">
								<label>Project Start Date : </label>
								<input class="form-control" type="date" id="timeline_start_date"  value="<?php echo $value->project_start_date; ?>" required="required"  name="project_start_date" placeholder="Project Start Date">
							</div>
						</div>

						<div class="row">
							<div class="col-sm-11 form-group">
								<label>Project Ending Date : </label>
								<input class="form-control" type="date" id="timeline_start_date" value="<?php echo $value->project_end_date ; ?>"  required="required"  name="project_end_date" placeholder="Project Ending Date">
							</div>
						</div>

						<div class="row">
							<div class="col-sm-11 form-group">
								<label>Project Funding : </label>
								<textarea class="form-control" id="name" name="project_funding"  placeholder="Project Funding" rows="5" required><?php echo $value->project_funding; ?></textarea>
							</div>
					  	</div> 

						<div class="row">
							<div class="col-sm-11 form-group">
								<label>Project Remarks : </label>
								<textarea class="form-control" id="name" name="project_remarks"  placeholder="Project Remarks" rows="5" required><?php echo $value->project_remarks; ?></textarea>
							</div>
					  	</div> 
					    <div class="row">
						<div class="col-sm-11 form-group">
								<button class="btn btn-primary pull-right" type="submit" style=" margin-top:20px;"> Update </button>
						</div>
						</div>
						<?php
						echo form_close();
					}
						?>
						<br>
					</div>
					  
					<!-- Showing all project titles-->
					<div class="col-sm-4 form-group" style="padding-left:15px; border-left:1px dotted #ccc;">
						<h3 style="margin-top:-25px; margin-bottom:15px; margin-left:10px;"class="col-sm-11">All Projects</h3>
						<?php
						foreach ($select_project as $value1) {

						$id=$value1->project_id;
						echo'<div class="row" style="padding:20px 0px 0px ">
							<div class="col-xs-9">
							<a href="'.base_url().'admin/project_by_id/'.$id.'"><h4 class="cont-head">'.$value1->project_title.'<span class="label label-success"></span></h4></a>
							</div>
							<div class="col-xs-1">';
							?>
							 <a id="<?php echo $id;?>" style="color:red;"title="delete" onclick="return confirm('Are you sure want to delete this project?');" href="<?php echo base_url();?>admin/delete_project/<?php echo $id;?>">Delete </a>
							
					</div>
				</div>

						<?php
						}			
						?>					
										

				<?php
					$count = count($select_project);
				?>
				<div class="row" style="padding:20px 0px 0px ">
					<div class="col-xs-11">
						<?php
							if($count==0)
								echo 'Oops! No Projects uploaded!';
						?>
					</div>
				</div>							
		</div>
	</div>
</body>
</html>