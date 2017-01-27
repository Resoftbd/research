<!DOCTYPE html>
<html lang="en">

         <!-- Main COntents-->
      
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
            <h3>Slideshow</h3>
              <div class="row">
      <?php
       echo form_open_multipart(base_url().'admin/insert_slideshow','class="form-horizontal"');
      ?>
            
              </div> 
              <div class="row">
              <div class="col-sm-3 form-group">
                <h4 class="slide">Add photo for slide</h4>
              </div>
              <div class="col-sm-6 form-group slide">
                <input id="a" name="slideshow_photo" placeholder="Add a photo" type="file" required="required">
              </div>
              <div class="col-sm-2 form-group">
                <button class="btn btn-primary inbox-del pull-right">Add Slider </button>
              </div>
              </div>  
      <?php
      echo form_close();
      ?>
              <div style="padding-top:10px; border-top:1px dotted #ccc;"></div>
              <h3>Show sliders</h3>
      
              <div class="row slide" >
      <?php
      foreach ($select_slideshow as $value) {
    
      ?>
                <div class="col-xs-3" >
                <input type = "hidden" name="<?php echo $value->slideshow_id;?>">
                <img src="<?php echo base_url();?><?php echo $value->slideshow_photo;?>" class="img-thumbnail img-responsive " style="height:200px;">
                <a onclick="return confirm('Are you sure want to delete this slide?');"href ="<?php echo base_url();?>admin/delete_slideshow/<?php echo $value->slideshow_id;?>"><button class="btn btn-danger inbox-del">Delete</button></a>
                </div>
          
      <?php
      }
      ?>            
              </div>
      
              <p class="notice"> *Select a name for your slider and add a photo then press ADD SLIDER button.</p>
        
          </div>
    </div>
</body>
</html>