
<!DOCTYPE html>
<html lang="en">

				 <!-- Main COntents-->




			<?php
				echo form_open_multipart(base_url().'admin/insert_researcher');
			?>
				<div class="cat">
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
				
				<?php 
						if(validation_errors())
					       echo'<div class="alert">'
					   					.validation_errors().'
					            </div>';

				foreach($email_settings as $value1) {
					?>
					<input value="<?php echo $value1->email_name;?>" name="email_name"  type="hidden">
					<input value="<?php echo $value1->email_email;?>" name="email_email"  type="hidden">
					<input value="<?php echo $value1->email_password;?>" name="email_password"  type="hidden">

					<?php
				}?>

				<h3><i class="fa fa-user-md" aria-hidden="true"></i>Add a Researcher :</h3>

			  <div class="row">
			  <div class="col-sm-9">
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Upload researcher's photo:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="" name="researcher_photo" placeholder="" type="file" >
				</div>
			  </div> 
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Name:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="name" name="researcher_name" placeholder="Full Name" type="text" required>
				</div>
			  </div> 
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Username:</h4>
				</div>
				<div class="col-sm-8 form-group">
				
				  <input class="form-control" id="name" name="researcher_username" placeholder="Username" type="text" required>
				</div>
			  </div> 
			  
			 <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Email:</h4>
				</div>
				<div class="col-sm-8 form-group">
				
				  <input class="form-control" id="mail" name="researcher_email" placeholder="Email" type="email" required>
				</div>
			  </div> 
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Password:</h4>
				</div>
				<div class="col-sm-8 form-group">
				
				  <input class="form-control" id="password" name="researcher_password" placeholder="Password" type="password" required>
				</div>
			  </div> 
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Re-enter Password:</h4>
				</div>
				<div class="col-sm-8 form-group">
				
				  <input class="form-control" id="re-pass" name="researcher_confirm_password" placeholder="Re-type Password" type="password" required>
				</div>
			  </div> 
			  
			   <!-- Right side photo showing portion -->
			  <div class="row">
				<div class="col-sm-12 form-group">
				  	
				 <button class="btn btn-success" type="submit" style="width:100%;">Submit</button>
		<?php
			echo form_close();
		?> 
				</div>
			  </div> 
			 <p class="notice"> *Be sure before you add a member. He/She will have permission to download publications.</p>
			  </div>
			  
			  <!-- Right side photo showing portion -->
			  <div class="col-sm-3 form-group">
				 
				
				<!--remove admin-->
				<div class="row">
				<ul class="cat" style="margin-top:-40px; margin-bottom:40px;">
				<h3>Make an admin</h3>
				<?php
				foreach ($select_researcher as $key => $value_all) {
					$id = $value_all->researcher_id;
					$count = count($select_researcher);
					$online = $this->session->userdata('admin_id');
					if($id != $online )
					{
				?>
				<li style="margin:15px; list-style:none;">
					<div class="col-sm-12">
						<?php if($value_all->researcher_photo==1){
						?>
						<img src="<?php echo base_url()."asset/pro.gif";?>" style="height:40px;" class="img-circle img-responsive">
						<?php
						}
						else{
						?>
							<img src="<?php echo base_url().$value_all->researcher_photo;?>" style="height:40px;" class="img-circle img-responsive">
							<?php
						}
						?>

				</div>
				<div class="col-sm-12">
						<?php
							if(($value_all->researcher_designation)==true)
								echo '<b style="font-size:16px; color:green">'.$value_all->researcher_name.'</b>';
							else
								echo '<b style="font-size:16px;">'.$value_all->researcher_name.'</b>';

						?> 
				</div>
					<div class="col-sm-12">
						<table>
							<tr>
								<td>
									<a id="<?php echo $value_all->researcher_id;?>" title="Delete Complete Profile" onclick="return confirm('Are you sure want to delete the Profile?');" href="<?php echo base_url()?>admin/delete_researcher/<?php echo $value_all->researcher_id;?>" style="color:#a00; margin-left:15px;"> 
										Remove 
									</a>
								</td>
								<td>
									<?php 
									if(($value_all->researcher_designation)==true)
									{
									?>
									<a id="<?php echo $value_all->researcher_id;?>" title="Make Member" onclick="return confirm('Are you sure want to demote <?php echo $value_all->researcher_name; ?> to MEMBER?');" href="<?php echo base_url()?>admin/update_researcher_adminship/<?php echo $value_all->researcher_id;?>" style="color:#a00; margin-left:15px;"> 
										Make Member 
									</a>
									<?php
									}

									else
									{
									?>
									<a id="<?php echo $value_all->researcher_id;?>" title="Make Admin" onclick="return confirm('Are you sure want to promote <?php echo $value_all->researcher_name; ?> to ADMIN?');" href="<?php echo base_url()?>admin/update_researcher_adminship/<?php echo $value_all->researcher_id;?>" style="color:#a00; margin-left:15px;"> 
										Make Admin 
									</a>
									<?php
									}
									?>
								</td>
							</tr>
						</table>
					</div>
				</li>
				<?php
					}
					if($count == 1 )
					{
				?>
						<li style="margin:15px; list-style:none;">
							<h4>No more members!<br>Please add one....</h4>
						</li>
				<?php
					}		
				}
				?>
				</ul>
				</div>
			
				</div>
			  </div>
			  
				
				</div>
		</div>
</body>
</html>
