<section class="inner-bannner-tc">
    <div class="full-wrapper">
        <?php 
            $ib_tagline	= get_field("ib_tagline");
            $ib_main_title	= get_field("ib_main_title");
            $ib_content	= get_field("ib_content");
            $ib_desktop_image	= get_field("ib_desktop_image");
            $ib_desktop_image_url=validateImage(1920,830,$ib_desktop_image);
            $ib_mobile_image	= get_field("ib_mobile_image");
            $ib_mobile_image_url=validateImage(375,699,$ib_mobile_image);
        ?>
        <div class="image-container">
            <picture>
                <source media="(min-width:992px)" srcset="<?php echo $ib_desktop_image_url; ?>">
                <img src="<?php echo $ib_mobile_image_url; ?>" alt="" class="inner-banner-img">
            </picture>
        </div>
        <div class="banner-details">
            <div class="inner-wrapper">
                <?php if($ib_tagline):?>
                    <h1 class="h-80 sub"><?php echo $ib_tagline; ?></h1>
                <?php endif;?>
                <?php if($ib_main_title):?>
                    <h2 class="h-120 fw-5 main"><?php echo $ib_main_title; ?></h2>
                <?php endif;?>
                <?php if($ib_content):?>
                    <p class="banner-content h-18"><?php echo $ib_content; ?></p>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>