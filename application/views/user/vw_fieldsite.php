	
	<!-- MAIN PART STARTS -->
	  
	  <div class="col-sm-6 main">
	  <h3><i class="fa fa-globe" aria-hidden="true"></i> Field Sites</h3>
	  <p class="text-justify">Lorem ipsum dolor sit amet, nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>

		  <div id="googleMap" class="google-map"></div>


		  <!-- Add Google Maps -->

		  <script src="http://maps.googleapis.com/maps/api/js"></script>
		  <script>
			  var myCenter = new google.maps.LatLng(22.455577, 91.961122);

			  function initialize() {
				  var mapProp = {
					  center:myCenter,
					  zoom:12,
					  scrollwheel:false,
					  draggable:false,
					  mapTypeId:google.maps.MapTypeId.ROADMAP
				  };

				  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

				  var marker = new google.maps.Marker({
					  position:myCenter,
				  });

				  marker.setMap(map);
			  }

			  google.maps.event.addDomListener(window, 'load', initialize);
		  </script>
		<br>
		<p>The UCL Global Social Media Impact Study is a five-year project running from 2012 until 2017. However, it is intended that the project will leave a lasting impact that far exceeds its duration. The project has is currently preparing its final findings and publications. Preliminary reports and theories from our fieldwork can be seen in our project blog. </p>
		<br>
	 <table class="table table-sriped table-bordered table-hover table-condensed table-responsive">
	  <tr>

	  <th>Team Member</th>
	  <th>Topics</th>
	  <th>Country</th>
	  </tr>
		 <?php
		 foreach ($select_researcher as $value){
		 ?>
	  <tr>
	  <td><a href="<?php echo base_url().'user/researcher_by_id/'.$value->researcher_id; ?>"><?php echo $value->researcher_name?></a></td>
	  <td><?php echo $value->researcher_fieldsite?></td>
	  <td><?php echo $value->researcher_country?></td>

	  </tr>
	<?php
		 }
	?>
	  </table>
	  <p>* All the dates are provisional and may be subjected to change.</p>
	  </div>
	  
	  
	  <!-- MAIN BODY ENDS -->
	  
	  
	  	