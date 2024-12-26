<?php
   
   get_header();
   ?>

<?php get_template_part( 'template-parts/inner-banner', 'inner-banner' ); ?>

<?php 
	$tbi_sub_title	= get_field("tbi_sub_title");
	$tbi_main_image	= get_field("tbi_main_image");
    $tbi_main_image_url=validateImage(1145,567,$tbi_main_image);
    $tb_title = get_the_title();
    $tb_content = get_the_content();
    $tb_date = get_the_date("d F Y");
    $sm_facebook	= get_field("sm_facebook","option");
    $sm_whatsapp	= get_field("sm_whatsapp","option");
    $sm_instagram	= get_field("sm_instagram","option");
    $sm_linkedin		= get_field("sm_linkedin","option");
?>
<section class="threat-bulletin-inner">
    <div class="main-wrapper">
        <div class="detail-div">
            <div class="date-contain">
                <h6 class="sub h-30"><?php echo $tbi_sub_title; ?></h6>
                <p class="tb-date p-25"><b>PUBLISHED : </b><?php echo $tb_date; ?></p>
            </div>
            <div class="image-wrapper">
                <img src="<?php echo $tbi_main_image_url; ?>" alt="">
            </div>
            <h3 class="title h-70"><?php echo $tb_title; ?></h3>
            <div class="tb-inner-content"><?php echo $tb_content; ?></div>
            <div class="share-div">
                <p class="p-18">SHARE THIS ARETICLE</p>
                <ul class="social-media-list">
                    <?php if($sm_facebook){?>
                        <li>
                            <a href="<?php echo $sm_facebook; ?>" class="social-media-link">
                                <svg class="fb-t">
                                    <use xlink:href="#fb-t"></use>
                                </svg>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if($sm_linkedin){?>
                        <li>
                            <a href="<?php echo $sm_linkedin; ?>" class="social-media-link">
                                <svg class="ln-t">
                                    <use xlink:href="#ln-t"></use>
                                </svg>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if($sm_instagram){?>
                        <li>
                            <a href="<?php echo $sm_instagram; ?>" class="social-media-link">
                                <svg class="inst-t">
                                    <use xlink:href="#inst-t"></use>
                                </svg>
                            </a>
                        </li>
                    <?php } ?>
                    <!-- </?php if($sm_whatsapp){?>
                        <li>
                            <a href="<?php echo $sm_whatsapp; ?>" class="social-media-link">
                                <svg class="tw-t">
                                    <use xlink:href="#tw-t"></use>
                                </svg>
                            </a>
                        </li>
                    </?php } ?> -->
                </ul>
            </div>
        </div>
    </div>
</section>

<?php 
   get_footer();
   
?>