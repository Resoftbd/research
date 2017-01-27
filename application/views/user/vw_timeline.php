
	  
	  
	  <!-- MAIN PART STARTS -->
	  
	  <div class="col-sm-6 main">
	  <h3><i class="fa fa-tachometer" aria-hidden="true"></i> Project Timeline</h3>
	  <p class="text-justify">Lorem ipsum dolor sit amet, nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
	  
		<img src=<?php echo base_url()."asset/static/timeline.jpg" ?> class="slider-image img-responsive"></img>
		<br>
		<p>The UCL Global Social Media Impact Study is a five-year project running from 2012 until 2017. However, it is intended that the project will leave a lasting impact that far exceeds its duration. The project has is currently preparing its final findings and publications. Preliminary reports and theories from our fieldwork can be seen in our project blog. </p>
		<br>
	 <table class="table table-sriped table-bordered table-hover table-condensed table-responsive">
	  <tr>
		  <th>Start date</th>
		  <th>Projects</th>
	  </tr>
	  <?php foreach ($select_project as $value): ?>
	  	 <tr>
			<td><?php echo $value->project_start_date ?></td>
			<td><a href="<?php echo base_url()."user/project_by_id/".$value->project_id;?>"><?php echo $value->project_title;?></a></td>
	 	 </tr>
	  <?php endforeach ?>

	 
	 
	  </table>
	  <br>
	  <br>
	  <p>* All the dates are provisional and may be subjected to change.</p>
	  <br>
	  </div>
	  
	  
	  <!-- MAIN BODY ENDS -->
	  
	  
	  