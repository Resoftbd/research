
	  
	  
	  <!-- MAIN PART STARTS -->
	  
	  <div class="col-sm-6 main">
	  <h3><i class="fa fa-briefcase" aria-hidden="true"></i>Project Funding</h3>
	  <p class="text-justify">Lorem ipsum our sponsors, consectetuer ad elit, nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate our sponsors are:</p>
	  <?php foreach ($select_funding as $value): ?>
	  	
	 
	  
		<div class="col-xs-4">
			<img src="<?php echo base_url().$value->funding_sponsor_logo;?>" class="img-responsive" style=" height:125px; width:100%">
			<h4><?php echo $value->funding_sponsor_name; ?></h4>
			<p><?php echo $value->funding_sponsor_contact; ?></p>
		</div>
	   <?php endforeach ?>
		
	  </div>
	  
	  
	  <!-- MAIN BODY ENDS -->
	  
	  
	 