		<style type="text/css">
			 pre {
        white-space: pre-wrap;       /* CSS 3 */
        white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
        white-space: -pre-wrap;      /* Opera 4-6 */
        white-space: -o-pre-wrap;    /* Opera 7 */
        word-wrap: break-word;       /* Internet Explorer 5.5+ */
        padding:0px;
        margin:0px
    }
		</style>

	  
	  <!-- MAIN PART STARTS -->
	<?php foreach ($select_contact as $value): ?>
	 
		  <div class="col-sm-6 main">

		  <h3><i class="fa fa-users" aria-hidden="true"></i> Contact</h3>
		  <p>Individual members of our research team can be contacted directly via the email addresses on their profile pages.</p>
		  
		  <h4 style="margin-top:25px;">General inquiries</h4>
		  <p><?php echo $value->contact_general_inquiries;?><p>
		  
		  <h4 style="margin-top:25px;">Website</h4>
			<p><?php echo $value->contact_website;?><p>
		  <h4 style="margin-top:25px;">Getting Involved</h4>
			<p><?php echo $value->contact_getting_involved;?><p>
		  <h4 style="margin-top:25px;">Write to us</h4>
			 <p><?php echo $value->contact_write_to_us;?><p>
		  
		  <h4 style="margin-top:25px;">Email</h4>
			<p><?php echo $value->contact_email;?><p>
		  <h4 style="margin-top:25px;">Cell</h4>
			 <p><?php echo $value->contact_cell;?><p>
		  
		  </div>
		  
	 <?php endforeach ?> 
	  <!-- MAIN BODY ENDS -->
	  
	  
	  