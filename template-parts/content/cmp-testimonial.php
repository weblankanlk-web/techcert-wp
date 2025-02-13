
<?php 
    $ls_image_listing = get_sub_field("ls_image_listing");
?>

<div class="cmp-testimonials">

        <div class="testimonial-listing">

        <?php if($ls_image_listing){
                foreach($ls_image_listing as $ls_image_listing);
            ?>
            <div class="testimonial-item">
                <div class="testimonial-card">
                    <div class="test-img-name-wrap">
                        <img class="image" src="" alt="">
                        <div class="test-img-name">
                            <h3 class="test-img-name"></h3>
                            <span class="test-location"></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        </div>

</div>