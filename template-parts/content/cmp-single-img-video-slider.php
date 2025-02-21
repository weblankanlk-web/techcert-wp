
<?php 
    $ls_image_listing   = get_sub_field("ls_image_listing");
    $item_count         = count($ls_image_listing);
    if($item_count==1){
        $swap_class ="";
    }
    else{
        $swap_class ="img-video-slider";    
    }
?>

<div class="cmp-single-img-video-slider">
    <div class="section-inner"> 
        <div class="img-video-wrapper <?php echo $swap_class; ?>">
            <?php 
                if($ls_image_listing){
                   foreach($ls_image_listing as $image_item){     
                    $ivss_mobile_image      = $image_item["ivss_mobile_image"]; 
                    $ivss_mobile_image_url  = validateImage(390,250,$ivss_mobile_image);

                    $ivss_ipad_image        = $image_item["ivss_ipad_image"];
                    $ivss_ipad_image_url    = validateImage(1435,636,$ivss_ipad_image);

                    $ivss_desktop_image     = $image_item["ivss_desktop_image"];
                    $ivss_desktop_image_url = validateImage(1435,636,$ivss_desktop_image);
                    
                    $ivvs_video_url         = $image_item["ivvs_video_url"];

                    
            ?>
            <div class="item"> 

                <picture>
                    <source media="(min-width:1200px)" srcset="<?php echo $ivss_desktop_image_url; ?>">
                    <source media="(min-width:768px)" srcset="<?php echo $ivss_ipad_image; ?>">
                    <img src="<?php echo $ivss_mobile_image_url;?>">
                </picture>

                <?php if($ivvs_video_url){?>
                    <a href="<?php echo $ivvs_video_url; ?>" class="play-item-link" data-fancybox>
                        <svg class="play-icon">
                            <use xlink:href="#play-icon"></use>
                        </svg>
                    </a>
                <?php } ?>

            </div>
            <?php
                }
            }
            ?>
        
        </div>
    </div>
</div>