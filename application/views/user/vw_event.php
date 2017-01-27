<!-- MAIN PART STARTS -->

	  <div class="col-sm-6 main">
	  <h3><i class="glyphicon glyphicon-time" aria-hidden="true"></i> Events</h3><br>
	  <ul class="event-list">
	  	<?php
	  	$count = count($select_event);

	  	foreach ($select_event as $value):
			// j=01(date),l=(day),g=(hour),i=(minute) a=(am/pm)

			$date = strtotime($value->event_date);
			$formated_date = date('j M, Y',$date) ;
		  ?>
			<li><h4><b> <?php echo $value->event_name; ?></b></h4>
				<label>Place: </label> <?php echo $value->event_place; ?><br>
				<label>Date: </label> <?php echo $formated_date; ?><br>
				<label>Details: </label> <?php echo $value->event_details; ?><br>
			</li>
		<?php endforeach;
			if($count==0)
			{
		?>	<div class="alert alert-danger alert">
					<!--<button type="button" data-dismiss="alert"
                                aria-hidden="true">
                                &times;
                              </button>-->
					There is no event upcoming. Further events news will be here when available......
					</div>

		<?php
			}

		 ?>
	</ul>
	  </div>


	  <!-- MAIN BODY ENDS -->



