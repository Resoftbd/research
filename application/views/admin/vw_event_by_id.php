 <script>
 	 $( function() {
  	  	$( "#datepicker" ).datepicker({
    		changeMonth: true,
    		changeYear: true,
    		dateFormat: "yy-mm-dd",
    		yearRange: '1990:2071'

    });
 	 } );
  </script>


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
				<h3><i class="fa fa-clock-o" aria-hidden="true"></i>Add an event : </h3><br>
			  <div class="row">
			  <div class="col-sm-7">

			<?php
				 echo form_open(base_url().'admin/insert_event');
			?>
			<div class="row">
				<div class="col-sm-11 form-group">
					<input class="form-control" required="required" type="text" id="name" name="event_name" placeholder="Event Title">	
				</div>
				</div>
			<div class="row">
				<div class="col-sm-11 form-group">
					<input class="form-control" type="date" id="timeline_start_date" required="required"  name="event_date" placeholder="Event Date">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-11 form-group">
					<input class="form-control" required="required" type="text" id="name" name="event_place" placeholder="Event Place">					</div>
				</div>
			<div class="row">
				<div class="col-sm-11 form-group">
					<textarea class="form-control" required="required" type="text" id="name" name="event_details" placeholder="Event Details"></textarea>		

				</div>
				</div>
			<div class="row">
				<div class="col-sm-11 form-group">
			  <button class="btn btn-primary pull-right" type="submit" > Add Event </button>
			  </div>
			  </div>
			 <?php
		echo form_close();
		?>


		

			<?php
			foreach ($select_event_by_id as $value) {
				 echo form_open(base_url().'admin/update_event/'.$value->event_id);
			?>
			<div class="row">
				<div class="col-sm-11 form-group">
					<input class="form-control" required="required" value="<?php echo $value->event_name; ?>" type="text" id="name" name="event_name" placeholder="Event Title">	
				</div>
				</div>
			<div class="row">
				<div class="col-sm-11 form-group">
					<input class="form-control" type="date" id="datepicker" value="<?php echo $value->event_date; ?>" required="required"  name="event_date" placeholder="Event Date">

				</div>
			</div>
			<div class="row">
				<div class="col-sm-11 form-group">
					<input class="form-control" required="required" type="text" id="name" value="<?php echo $value->event_place; ?>"  name="event_place" placeholder="Event Place">	
				</div>
				</div>
			<div class="row">
				<div class="col-sm-11 form-group">
					<textarea class="form-control" required="required"  type="text" id="name" name="event_details" placeholder="Event Details"><?php echo $value->event_details; ?></textarea>		
				</div>
				</div>
			<div class="row">
				<div class="col-sm-11 form-group">
			  <button class="btn btn-primary pull-right" type="submit" > Update </button>
			  </div>
			  </div>
			 <?php
		echo form_close();
	}
		?>



			  </div>

			  
			   <!-- Showing all  events-->
			  <div class="col-sm-5 form-group" style="padding-left:15px; border-left:1px dotted #ccc;">
			  <h3 style="margin-top:-25px; margin-bottom:15px; margin-left:10px;"class="col-sm-11">All Events</h3>
		<?php
		foreach ($select_event as $value1) {

			$id=$value1->event_id;
				echo'<div class="row" style="padding:20px 0px 0px ">
					<div class="col-xs-9">
					<a href="'.base_url().'admin/event_by_id/'.$value1->event_id.'" ><h4 class="cont-head">'.$value1->event_date.' : '.$value1->event_name.'<span class="label label-success"></span></h4></a>
					</div>
					<div class="col-xs-1">';
					?>
					 <a id="<?php echo $id;?>" style="color:red;"title="delete" onclick="return confirm('Are you sure want to delete this Event?');" href="<?php echo base_url();?>admin/delete_event/<?php echo $id;?>"> Delete </a>
					
					</div>
					</div>
		<?php
		}			
		?>					
								

		<?php
			$count = count($select_event);
		?>
				<div class="row" style="padding:20px 0px 0px ">
					<div class="col-xs-11">
						<?php
						if($count==0)
							echo 'Oops! No Events added!';
						?>
					</div>
				</div>
							
									
				</div>
</body>
</html>