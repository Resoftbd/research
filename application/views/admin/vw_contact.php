<html>
<head>
	<title></title>
</head>
<body>

	<div class="col-xs-10 content">

			<?php
				if($msg!='')
					{
				?>
					<div class="alert alert-<?php echo $msg_type;?> alert-dismissable"> 
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<?php echo $msg;?>
					</div>
				<?php
				}
				?>

		<h3><i class="fa fa-users" aria-hidden="true"></i>Update Contact Information</h3><br>
		 <?php

		 	foreach ($select_contact as $value1) 

						 	{

			echo form_open(base_url().'admin/update_contact','class="form-horizontal"');

			  
			
		  ?>

		  <input class="form-control inbox-del" value="<?php echo $value1->contact_id?>" id="contact_id" name="contact_id" placeholder="" type="hidden">

		  <div class="col-sm-11 form-group">
			<label>General inquiries</label>
			<textarea class="form-control inbox-del"  rows="5" required="" value="" id="" name="contact_general_inquiries"  type="text"><?php echo $value1->contact_general_inquiries?></textarea>
		</div>


		<div class="col-sm-11 form-group">
			<label>Website</label>
			<textarea class="form-control inbox-del"  rows="8" required="" value="" id="" name="contact_website"  type="text"><?php echo $value1->contact_website?></textarea>
		</div>

		<div class="col-sm-11 form-group">
		<label>Getting Involved</label>
			<textarea class="form-control inbox-del"  rows="5" required="" value="" id="" name="contact_getting_involved"  type="text"><?php echo $value1->contact_getting_involved?></textarea>
		</div>

		

		<div class="col-sm-11 form-group">
		<label>Write To Us</label>
			 <textarea class="form-control inbox-del" rows="5" required="required" value="" id="" name="contact_write_to_us" type="text"><?php echo $value1->contact_write_to_us?></textarea>
		</div>
	
		<div class="col-sm-11 form-group">
			<label>Email</label>
			 <textarea class="form-control inbox-del" rows="5" required="required" value="" id="" name="contact_email" type="text"><?php echo $value1->contact_email?></textarea>

		</div>
		<div clas="row">
		<div class="col-sm-11 form-group">
			<label>Cell</label>
		 <textarea class="form-control inbox-del" rows="5" required="required" value="" id="" name="contact_cell" type="text"><?php echo $value1->contact_cell?></textarea>
		</div>
	</div>
		
	
	<!--	<div class="col-sm-8 form-group">
			<input class="form-control inbox-del"  value="" id="publication_open-access" name="publication_open_access" placeholder="" type="checkbox">want to shown in public
		</div>-->
		
			<div class="col-sm-11 form-group">
				<button type="submit" class="btn btn-primary category-h" title=""> Update </button>
			</div>
		<?php
			echo form_close();
		


	

		}
		?>				
	</div>

</body>
</html>