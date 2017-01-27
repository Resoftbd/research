 <div class="col-sm-6 main">
 	<?php foreach ($select_home	 as $value): ?>
 		
	 	
			  <h3><i class="glyphicon glyphicon-home" aria-hidden="true"></i> <?php echo $value->home_title; ?></h3>
			  <p class="text-justify"><?php echo $value->home_text; ?></p>
    <?php endforeach ?>
		<!-- Slider -->
		<div class="container-fluid slides">
			  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4500">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				  <li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

			<!-- Wrapper for slides -->
			
		
			<div class="carousel-inner" role="listbox">
				<?php
				$active = 0;
				foreach ($select_slideshow as $slide_value) {
				
					if($active==0)
					{
				?>
				  <div class="item active">
					<img src="<?php echo base_url();?><?php echo $slide_value->slideshow_photo?>" alt="resoft" class="slider-image img-responsive" style="height:400px; width: 800px;">
				  </div>

				 <?php
					}
					else
					{
				 ?>
				 <div class="item">
					<img src="<?php echo base_url();?><?php echo $slide_value->slideshow_photo?>" alt="resoft" class="slider-image img-responsive" style="height:400px; width: 800px;">
				  </div>
				 <?php
				    }
				    $active++;
				  }

				?>

				 

				</div>

				<div class="carousel-inner jumborton" role="listbox">
				

				</div>
					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
			    </div>
			</div>
			<div class="row">

				<?php 
					$count=0;
					foreach ($select_news as $value3):
				//Read More
				$original_string =  $value3->news_text;
				$num_words = 40;
				$words = array();
				$words = explode(" ", $original_string, $num_words);
				$shown_string = "";

				$date = strtotime($value3->news_date_and_time);
				$formated_date = date('j M, Y',$date) ;
				if(count($words) ==40){
					$words[39] = " ... ";
				}
				$shown_string = implode(" ", $words);

				 //news_headline
            $original_string2 =  $value3->news_headline;
            $num_words2 = 11;
            $words2 = array();
            $words2 = explode(" ", $original_string2, $num_words2);
            $shown_string2 = "";

           
            if(count($words2) ==11){
                $words2[10] = " ... ";
            }
            $shown_string2 = implode(" ", $words2); ?>
						<div class="col-xs-6">
							<div class="events" style="margin:40px 0px; padding:1px 7px; border:0px;min-height:450px;">

							<a href="<?php echo base_url()?>user/show_news/<?php echo $value3->news_id?>"><h3 style=" border-bottom:0px solid #888;min-height:100px;"><?php echo $shown_string2; ?></h3></a>
								<p class="date-time pull-right"><?php echo $formated_date;?></p>
								<a href="<?php echo base_url()?>user/show_news/<?php echo $value3->news_id?>"><img src="<?php echo base_url();?><?php echo $value3->news_photo?>" class="img-thumbnail" style="width:100%; height:150px; margin-bottom:10px;"></a>
							<p><?php echo $shown_string; ?></p>
								<a href="<?php echo base_url()?>user/show_news/<?php echo $value3->news_id?>">>>Read More</a>
							</div>
						</div>

						<?php 
							 $count++;
							 if($count==2)
							 break;
						 ?>

				<?php endforeach ?>
				
			</div>
	  
	  </div>