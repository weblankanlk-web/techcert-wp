
<?php 
    $mic_image_listing  = get_sub_field("mic_image_listing");
    $mic_content        = get_sub_field("mic_content");    
?>

<div class="cmp-multiple-img-content">
    <div class="section-inner"> 
        <div class="mul-img">
            <?php if($mic_image_listing){
                    foreach($mic_image_listing as $mic_img_item){
                    $mic_image      = $mic_img_item["mic_image"];     
                    $mic_image_url  = validateImage(700,500,$mic_image);  
                ?>
            <div class="img-item">
                <img src="<?php echo $mic_image_url;?>" alt="">
            </div>
            <?php 
                } 
            }
            
            ?>
        </div>
        <?php if($mic_content){?>
            <div class="multi-content">
                <?php echo $mic_content; ?>
            </div>
        <?php } ?>
    </div>
</div>