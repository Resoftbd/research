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
			<h4><i class="fa fa-book" aria-hidden="true"></i>Add Publication :</h4><br>
				<div class="row">
					<div class="col-sm-8">

					  	<?php
					  	foreach ($select_publication_by_id as $value) {
							$id = $value->publication_id;
							$publication_category = $value->publication_category_fkey;

							$CI =& get_instance();
							$CI->load->model('Mdl_admin');
							$category_name = $CI->Mdl_admin->show_parent($publication_category);
						 echo form_open_multipart(base_url().'admin/update_publication_by_id/'.$value->publication_id);
						?>


					  	<div class="row">
							<div class="col-sm-11 form-group">
								<label>Publication Title : </label>
							</div>
							<div class="col-sm-11 form-group">
								<input class="form-control" id="name" value="<?php echo $value->publication_title; ?>" name="publication_title" placeholder="Publication Title" type="text" recquired>
							</div>
					  	</div>
							<div class="row">
								<div class="col-sm-11 form-group">
									<label>Select category</label>
								</div>
								<div class="col-sm-11 form-group">
									<select name="publication_category_fkey" required = "required" style="width:100%;margin-top:10px; padding:3px 10px;" class="form-control">
										<?php
										foreach ($category_name as $value_cat)
										{
											echo'  <option value="'.$value_cat->category_id.'" style="display:none">'.$value_cat->category_name.'</option>';
										}
										foreach ($all_category as $value2) {
											echo '<option value="'.$value2->category_id.'" >'.$value2->category_name.'</option>';
										}

										?>

									</select>
								</div>

							</div>
							<div class="row">
								<div class="col-sm-11 form-group">
									<label>Publication Authors : </label>
									</div>
									<div class="col-sm-11 form-group">
										<input class="form-control" id="name" value="<?php echo $value->publication_author; ?>" name="publication_author_old" placeholder="Publication Author" type="text" recquired>
									</div>
								<div class="col-sm-11 form-group">

										<label>Change Authors : </label>

									<select name="publication_author[]" style="width:100%;margin-top:10px; padding:3px 10px;" class="selectpicker form-control" size="5" multiple="multiple" tabindex="1">
										<option value="" style="display:none">Select Authors</option>
										<?php
										foreach ($select_researcher as $value2) {
											echo '<option value="'.$value2->researcher_name.'" >'.$value2->researcher_name.'</option>';
										}

										?>
									</select>
								</div>

							</div>
							<p>*Hold down the Ctrl (windows) / Command (Mac) button to select multiple options.</p>
							<div class="row">
								<div class="col-sm-11 form-group">
									<label>Publication Date : </label>

									<input class="form-control" type="date" id="timeline_start_date" required="required" value="<?php echo $value->publication_date; ?>" name="publication_date" placeholder="Publication Date">
								</div>
							</div>
					  	<div class="row">
							<div class="col-sm-11 form-group">
								<label>Publication Summary : </label>
							</div>
                            <div class="col-sm-11 form-group">
                                <textarea  class="form-control" id="name" name="publication_summary" placeholder="Summary" type="text"  rows="5"> <?php echo $value->publication_summary; ?></textarea><br>
                            </div>
					  	</div>


							<div class="row">
							<div class="col-sm-11 form-group">
								<label>Publication Type : </label>
							</div>
							<div class="col-sm-11 form-group">
								<input class="form-control" id="name" value="<?php echo $value->publication_type; ?>" name="publication_type" placeholder="Publication Type" type="text" >
							</div>
					  	</div> 
					

					  	<div class="row">
							<div class="col-sm-11 form-group">
								<label>ISBN-13 : </label>
							</div>
							<div class="col-sm-11 form-group">
								<input class="form-control" id="name" value="<?php echo $value->publication_isbn_13; ?>" name="publication_isbn_13" placeholder="ISBN-13" type="text" >
							</div>
					  	</div> 
					

					  	<div class="row">
							<div class="col-sm-11 form-group">
								<label>Publication Book Title : </label>
							</div>
							<div class="col-sm-11 form-group">
								<input class="form-control" id="name" value="<?php echo $value->publication_book_title; ?>" name="publication_book_title" placeholder="Publication Book Title" type="text" >
							</div>
					  	</div> 
					

					  	<div class="row">
							<div class="col-sm-11 form-group">
								<label>Publication Language : </label>
							</div>
							<div class="col-sm-11 form-group">
								<input class="form-control" id="name" value="<?php echo $value->publication_language; ?>" name="publication_language" placeholder="Publication Language" type="text" >
							</div>
					  	</div> 
					

					  	<div class="row">
							<div class="col-sm-11 form-group">
								<label>Additional Informations : </label>
							</div>
							<div class="col-sm-11 form-group">
								<textarea class="form-control" id="name" name="publication_additional_information" placeholder="Publication Additional Information"  rows="5" ><?php echo $value->publication_additional_information; ?></textarea>
							</div>
					  	</div> 
					

					  	<div class="row">
							<div class="col-sm-3 form-group">
								<h5>Publication File : </h5>
							</div>
							<div class="col-sm-5 form-group">
								<a href="<?php echo base_url().$value->publication_file;?>" onclick="return confirm('Do you want to download or open the publication file?');" id="name"> Open/Download </a>
							</div>
					  	</div>

					  	<div class="row">
							<div class="col-sm-3 form-group">
								<h5>New Publication File : </h5>
							</div>
							<div class="col-sm-5 form-group">
								<input type="file" id="name" name="publication_file">
							</div>
					  	</div> 
					  
					    <p class="notice"> *Be careful updating a publication.</p>
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
					  
					<!-- Showing all publication titles-->
					<div class="col-sm-4 form-group" style="padding-left:15px; border-left:1px dotted #ccc;">
						<h3 style="margin-top:-25px; margin-bottom:15px; margin-left:10px;"class="col-sm-11">All Publications</h3>
						<?php
						foreach ($select_publication as $value1) {

						$id=$value1->publication_id;
						echo'<div class="row" style="padding:20px 0px 0px ">
							<div class="col-xs-9">
							<a href="'.base_url().'admin/publication_by_id/'.$id.'"><h4 class="cont-head">'.$value1->publication_title.'<span class="label label-success"></span></h4></a>
							</div>
							<div class="col-xs-1">';
							?>
							 <a id="<?php echo $id;?>" style="color:red;"title="delete" onclick="return confirm('Are you sure want to delete this publication?');" href="<?php echo base_url();?>admin/delete_publication/<?php echo $id;?>">Delete </a>
							
					</div>
				</div>

						<?php
						}			
						?>					
										

				<?php
					$count = count($select_publication);
				?>
				<div class="row" style="padding:20px 0px 0px ">
					<div class="col-xs-11">
						<?php
							if($count==0)
								echo 'Oops! No Publications uploaded!';
						?>
					</div>
				</div>							
		</div>
	</div>
</body>
</html>