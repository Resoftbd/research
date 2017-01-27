<!DOCTYPE html>
<html lang="en">

				 <!-- Main content -->

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
				<div class="row">
				<div class="col-sm-4">
				<h3> Category</h3>
				<div class="container-fluid">
					<?php
					echo form_open(base_url().'admin/insert_cat','class="form-horizontal"')
					?>
						<div class="form-group">
						  <h3 class="category-h">Category name:</h3>
							<input type="text" class="form-control" id="add-cat" name="category_name" placeholder="Add a category">
							<h3 class="category-h">Select parent</h3>

								<select name="category_parent" style="width:100%; padding:6px 10px;">
								  <option value="0">None</option>
							<?php
							foreach ($parent as  $value) {
							echo'
								  <option value="'.$value->category_id.'">'.$value->category_name.'</option>';
							}

							?>
								</select><br>
								
								<p class="notice category-h">* In order to add a category, select parent category- "none". In order to add a sub category, select the parent category that you want to make the parent of your sub category. </p> <br> 
							<button type="submit" class="btn btn-primary category-h" title="add category">Add category</button>
						</div>
					<?php
					echo form_close();
					?>
				</div>
				</div>
				<div class="col-sm-8" style="padding-left:100px; padding-right: 50px; margin-top:40px;">
				<h3 style="margin-top:30px;">Existing categories</h3>

					<?php
				foreach ($all_category as $value2) {
					$parent_id = $value2->category_parent;
					 $id =$value2->category_id;
					$CI =& get_instance();
					$CI->load->model('Mdl_admin');
					$parent_name = $CI->Mdl_admin->show_parent($parent_id);

					echo form_open(base_url().'admin/update_cat/'.$id,'class="form-horizontal"');
					echo'
						<div class="form-group row cat">
						<input type="hidden" name="category_id" value="'.$id.'">
						  <div class="col-sm-4">
						  <input type="text" name="category_name" class="form-control" id="add-cat" placeholder="Add a category" value="'.$value2->category_name.'">


							
						  </div>
						  <div class="col-sm-4">
					<select name="category_parent" style="width:100%; padding:6px 10px;">';
				foreach ($parent_name as $value5)
										{
										echo'  <option value="'.$value5->category_id.'" style="display:none">'.$value5->category_name.'</option>';
										}
										echo'
								  		<option value="0">None</option>';
				if($value2->category_parent!=0){
				  foreach ($parent as  $value4) {
				  		if($value2->category_id!=$value4->category_id)
				  				{
								echo'
								  		<option value="'.$value4->category_id.'">'.$value4->category_name.'</option>';
								}
											}
										}
										echo'</select>						  
						
						 </div>  
						  
						
							<div class="col-sm-4 btn-group">';?>
					


								<button type="submit" class="btn btn-warning"  ><i class="fa fa-edit" aria-hidden="true"></i></button>

					<?php
					echo form_close();
					echo form_open(base_url().'admin/category_delete/'.$id,'class="form-horizontal"');

					?>
					<button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure to remove?');"><i class="fa fa-times" aria-hidden="true"></i></button>


					<?php
					echo form_close();

					?>

						

							</div>

						</div>
				<?php

				}
				?>
						
					 
					  
					  <p class="notice category-h">* Hover over the buttons and hold for one or two seconds in order to know the functionalities of that button.</p>
				</div>
				</div>
				</div>
				</div>
				

		</div>

</html>