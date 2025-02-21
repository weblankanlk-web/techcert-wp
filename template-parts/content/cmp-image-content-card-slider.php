
<?php 
    $ics_image_card_listing    = get_sub_field("ics_image_card_listing");  
?>

<div class="cmp-image-content-card-slider">
     <div class="section-inner">
        <div class="responsive-card-slider">
            <?php
                if($ics_image_card_listing){
                    foreach($ics_image_card_listing as $card_item){
                        $ics_post_item  = $card_item["ics_post_item"];
                        if($ics_post_item){ 
                           $ics_post_item   = $card_item["ics_post_item"];
                           $post_id         = $ics_post_item->ID;
                           $ics_image       = get_field("pa_thumbnail_image",$post_id);
                           $ics_image_url   = validateImage(536,663,$ics_image);
                           $ics_card_title  = get_the_title($post_id);
                           $pa_card_short   = get_field("pa_card_short",$post_id);  
                           $ics_link_text   = "Explore";
                           $ics_link_url    = get_the_permalink($post_id);
                        } 

                        else{
                            $ics_image      = $card_item["ics_image"];
                            $ics_image_url  = validateImage(536,663,$ics_image);
                            $ics_card_title = $card_item["ics_card_title"];
                            $ics_short      = $card_item["ics_short"];
                            $ics_link_text  = $card_item["ics_link_text"];
                            $ics_link_url   = $card_item["ics_link_url"];
                        }
            ?>
                        <div>
                            <div class="item"> 
                                <img src="<?php echo $ics_image_url; ?>">
                                <div class="item-content">
                                    <?php if($ics_card_title){?>
                                        <h2 class="item-content-title">
                                            <?php echo $ics_card_title; ?>
                                        </h2>
                                    <?php } ?>
                                    <?php if($ics_short){?>
                                        <p class="item-conten-short">
                                            <?php echo $ics_short; ?>    
                                        </p>
                                    <?php } ?> 
                                    <?php if($ics_link_url){?>
                                        <a class="item-content-link" href="<?php echo $ics_link_url; ?>">
                                            <?php echo $ics_link_text; ?>
                                        </a>
                                    <?php } ?>  
                                </div>
                            </div>
                        </div>  

            <?php
                
                    }
                }
            ?>


            

        </div>
    </div>
</div>