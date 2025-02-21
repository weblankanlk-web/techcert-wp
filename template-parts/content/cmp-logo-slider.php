
<?php $ls_image_listing = get_sub_field("ls_image_listing");?>

<div class="cmp-logo-slider">
    <div class="section-inner"> 
        <div class="logo-slider">
            
                <?php if($ls_image_listing){
                    foreach($ls_image_listing as $img_listing_item){
                        $ls_logo_image      = $img_listing_item ["ls_logo_image"];
                        $ls_logo_image_url  = validateImage(120,120,$ls_logo_image);
                ?>
                
                    <div>
                        <img src="<?php echo $ls_logo_image_url;?>" class="logo-img" alt="">
                    </div>

                <?php 
                        } 
                    }
                ?>
        
        </div>
    </div>
</div>