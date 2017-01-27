<div class="col-sm-6 main">
    <h3><i class="glyphicon glyphicon-leaf" aria-hidden="true"></i> News</h3>

    <div class="row">

        <?php
        $count=0;
        foreach ($select_news as $value3):
            //Read More
            $original_string =  $value3->news_text;
            $num_words = 25;
            $words = array();
            $words = explode(" ", $original_string, $num_words);
            $shown_string = "";

            $date = strtotime($value3->news_date_and_time);
            $formated_date = date('j M, Y',$date) ;
            if(count($words) ==25){
                $words[24] = " ... ";
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

            <div class="col-xs-6" style="">
                <div class="events" style="margin:40px 0px; padding:1px 7px; border:0px;height:600px !importent;overflow:hidden;">

                    <a href="<?php echo base_url()?>user/show_news/<?php echo $value3->news_id?>"><h3 style=" border-bottom:0px solid #888;min-height:100px;"><?php echo $shown_string2; ?></h3></a>
                    <p class="date-time pull-right"><?php echo $formated_date;?></p>
                    <a href="<?php echo base_url()?>user/show_news/<?php echo $value3->news_id?>"><img src="<?php echo base_url();?><?php echo $value3->news_photo?>" class="img-thumbnail" style="width:100%; height:150px; margin-bottom:10px;"></a>
                    <p ><?php echo $shown_string; ?></p>
                    <a href="<?php echo base_url()?>user/show_news/<?php echo $value3->news_id?>">>>Read More</a>
                </div>
            </div>



        <?php endforeach ?>

    </div>

</div>