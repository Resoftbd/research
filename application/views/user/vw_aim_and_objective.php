
 
	  
	  
	  <!-- MAIN PART STARTS -->
	  
	  <div class="col-sm-6 main">
		  <h3><i class="glyphicon glyphicon-leaf" aria-hidden="true"></i> Aim and Objectives</h3>
		 
		  		
				
				<!-- Slider -->
			<div class="container-fluid slides">
				  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4500">
						<div class="carousel-inner" role="listbox">
						  	<div class="item active">
								<img src="<?php echo base_url();?>asset/static/aim_and_objective1.jpg" alt="Aim And Objective" class="slider-image img-responsive">
							</div>
						</div>
						<!-- Indicators -->
					
					</div>
			</div>
				
				<!-- Slider ends-->
				<?php foreach ($select_aim as $value): ?>
					<p><h4>Aim:</h4> <?php echo $value->aim_text;?></p><br>

				<?php endforeach ?>
				<h4>Objectives:</h4>
				<?php foreach ($select_objective as $value1): ?>
					<br><i class="fa fa-location-arrow" style ="color:#2aa6ca" aria-hidden="true"></i> &nbsp <?php echo $value1->objective_text;?><br>

				<?php endforeach ?>
				
				
		  <br>
		  <br>
	  </div>
	  
	  
	  <!-- MAIN BODY ENDS -->
	  
	  
	  <!-- RIGHT SIDE BAR STARTS -->
	  
	  
  
 