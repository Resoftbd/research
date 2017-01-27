<!-- MAIN PART STARTS -->

<div class="col-sm-6 main">
    <h3><i class="fa fa-building" aria-hidden="true"></i> News</h3>

    <!-- Fixed image -->
    <?php
    foreach ($select_news as $value) {
        $date = strtotime($value->news_date_and_time);
        $formated_date = date('j M, Y',$date) ;
        ?>
        <div class="container-fluid slides">

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo base_url();?><?php echo $value->news_photo ?>" alt="resoft" class="slider-image img-responsive">
                </div>
            </div>


            <!--  ends-->

        </div>
        <div style="margin:5px 12px;">
            <b><h4> <?php echo $value->news_headline ?></h4></b>
            <p class="date-time pull-left"><?php echo $formated_date;?></p>

            <p class="text-justify"><?php echo $value->news_text ?></p>
        </div>
        <?php
    }
?>
</div>


<!-- MAIN BODY ENDS -->