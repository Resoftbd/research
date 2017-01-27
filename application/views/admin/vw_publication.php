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
			<h3><i class="fa fa-book" aria-hidden="true"></i>Add Publication :</h3><br>
				<div class="row">
					<div class="col-sm-8" style="padding-right:25px;">

					  	<?php
						 echo form_open_multipart(base_url().'admin/insert_publication');
						?>

					  	<div class="row">
							<div class="col-sm-11 form-group">
								<input class="form-control" id="name" name="publication_title" placeholder="Publication Title" type="text" required>
							</div>
					  	</div>
						<div class="row">
							<div class="col-sm-11 form-group">
								<select name="publication_category_fkey" style="width:100%;margin-top:10px; padding:3px 10px;" class="form-control">
									<option value="" style="display:none">Select Category</option>
									<?php
									foreach ($all_category as $value) {
										echo '<option value="'.$value->category_id.'" >'.$value->category_name.'</option>';
									}

									?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-11 selectpicker">
								<label>Publication Authors : </label>
								<select name="publication_author[]" required = "required" style="width:100%;margin-top:10px; padding:3px 10px;" class="selectpicker form-control" size="5" multiple="multiple" tabindex="1">
									<option value="" style="display:none">Select Authors</option>
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
								<input class="form-control" type="date" id="timeline_start_date" required="required"  name="publication_date" placeholder="Publication Date">
							</div>
						</div>

						<div class="row">
							<div class="col-sm-11 form-group">
								<textarea class="form-control" id="name" name="publication_summary" placeholder="Publication Summary" rows="5" required></textarea>

							</div>
					  	</div> 
					

					  	<div class="row">
							<div class="col-sm-11 form-group">
								<input class="form-control" id="name" name="publication_type" placeholder="Publication Type" type="text" required>
							</div>
					  	</div> 
					

					  	<div class="row">
							<div class="col-sm-11 form-group">
								<input class="form-control" id="name" name="publication_isbn_13" placeholder="ISBN-13" type="text" required>
							</div>
					  	</div> 
					

					  	<div class="row">
							<div class="col-sm-11 form-group">
								<input class="form-control" id="name" name="publication_book_title" placeholder="Publication Book Title" type="text" required>
							</div>
					  	</div> 
					

					  	<div class="row">
							<div class="col-sm-11 form-group">
								<input class="form-control" id="name" name="publication_language" placeholder="Publication Language" type="text" required>
							</div>
					  	</div> 
					

					  	<div class="row">
							<div class="col-sm-11 form-group">
								<textarea class="form-control" id="name" name="publication_additional_information" placeholder="Publication Additional Information"  required></textarea>
							</div>
					  	</div> 
					

					  	<div class="row">
							<div class="col-sm-3 form-group">
								<h5>Publication File : </h5>
							</div>
							<div class="col-sm-5 form-group">
								<input class="" id="" name="publication_file" placeholder="" type="file" required>
							</div>
					  	</div> 

					  
					    <p class="notice"> *Be careful adding a publication.</p>
						<div class="col-sm-11">
								<button class="btn btn-primary pull-right" type="submit" style=" margin-top:20px;">Publish </button>
						</div>
						<?php
						echo form_close();
						?>
					</div>
					  
					<!-- Showing all publication titles-->
					<div class="col-sm-4 form-group" style="padding-left:15px; border-left:1px dotted #ccc;">
						<h3 style="margin-top:-25px; margin-bottom:15px; margin-left:10px;"class="col-sm-11">All Publications</h3>
						<?php
						foreach ($select_publication as $value1) {

						$id=$value1->publication_id;
						echo'<div class="row" style="padding:20px 0px 0px ">
							<div class="col-xs-9">
							<a href="'.base_url().'/admin/publication_by_id/'.$id.'"><h4 class="cont-head">'.$value1->publication_title.'<span class="label label-success"></span></h4></a>
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