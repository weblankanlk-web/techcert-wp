<?php 
     /* Template Name: Contact */
?>

<?php 
	get_header(); 
?>

<?php get_template_part( 'template-parts/inner-banner', 'inner-banner' ); ?>

<?php 
	$hm_title	= get_field("hm_title");
	$hm_content	= get_field("hm_content");
	$hm_video_url	= get_field("hm_video_url");
?>
<section class="contact-map">
	<div class="full-wrapper">
		<div class="video-div">
			<video autoplay muted loop id="mapVideo">
				<source src="<?php echo $hm_video_url; ?>" type="video/mp4">
			</video>
		</div>
		<div class="details-section">
			<div class="detail-inner">
				<h2 class="h-200 main"><?php echo $hm_title; ?></h2>
				<p class="p-18 para"><?php echo $hm_content; ?></p>
			</div>
		</div>
	</div>
</section>

<?php
    $cfp_title            = get_field("cfp_title"); 
    $cfp_content           = get_field("cfp_content");
    $cfp_image           = get_field("cfp_image");
    $cfp_contact_form           = get_field("cfp_contact_form");
    $cfp_image_url=validateImage(938,651,$cfp_image);
?>
<section class="contact-page-form">
    <div class="main-wrapper">  
        <div class="left-div">
            <h3 class="h-120 main"><?php echo $cfp_title; ?></h3>
            <p class="p-18 para"><?php echo $cfp_content; ?></p>
            <div class="image-wrap">
                <img src="<?php echo $cfp_image_url; ?>" alt="">
            </div>
        </div>
        <div class="right-div">
            <div class="form-wrap">
                <?php 
                    if($cfp_contact_form){
                        echo $cfp_contact_form;
                    }
                ?>
            </div>
        </div>  
    </div>
</section>

<?php 
	$cds_title	= get_field("cds_title");
	$cds_sub_title	= get_field("cds_sub_title");
	$cds_contact_phone_title	= get_field("cds_contact_phone_title");
    $cds_contact_number_listing	= get_field("cds_contact_number_listing");
    $cds_contact_address_title	= get_field("cds_contact_address_title");
    $cds_contact_address	= get_field("cds_contact_address");
    $cds_contact_email_title	= get_field("cds_contact_email_title");
    $cds_contact_email	= get_field("cds_contact_email");
    $cds_map_url	= get_field("cds_map_url");
    $cds_youtube_url	= get_field("cds_youtube_url");
    $sm_facebook	= get_field("sm_facebook","option");
    $sm_whatsapp	= get_field("sm_whatsapp","option");
    $sm_instagram	= get_field("sm_instagram","option");
    $sm_linkedin		= get_field("sm_linkedin","option");
?>
<section class="contact-details">
    <div class="full-wrapper">
        <div class="top-section">
            <div class="main-wrapper">
                <div class="left-div">
                    <p class="h-160 main"><?php echo $cds_title; ?></p>
                    <p class="h-30 sub"><?php echo $cds_sub_title; ?></p>
                </div>
                <div class="right-div">
                    <div class="first-div">
                        <div class="detail-div detail-1">
                            <div class="detail-inner">
                                <p class="p-18 title"><?php echo $cds_contact_phone_title; ?></p>
                                <?php
                                    foreach ($cds_contact_number_listing as $d_item) : 
                                        $cds_contact_number = $d_item["cds_contact_number"];
                                ?>
                                <a href="tel:<?php echo $cds_contact_number; ?>"><p class="h-30 contact-phone"><?php echo $cds_contact_number; ?></p></a>
                                <?php
                                    endforeach;
                                ?>
                            </div>
                        </div>
                        <div class="detail-div detail-2">
                            <div class="detail-inner">
                                <p class="p-18 title"><?php echo $cds_contact_email_title; ?></p>
                                <a href="mailto:<?php echo $cds_contact_email; ?>"><p class="h-30 contact-email"><?php echo $cds_contact_email; ?></p></a>
                            </div>
                        </div>
                    </div>
                    <div class="second-div">
                        <div class="detail-div detail-3">
                            <div class="detail-inner">
                                <p class="p-18 title"><?php echo $cds_contact_address_title; ?></p>
                                <p class="h-30 contact-address"><?php echo $cds_contact_address; ?></p>
                        </div>
                        </div>
                        <div class="detail-div detail-4">
                            <div class="detail-inner">
                                <a href="<?php echo $sm_facebook; ?>">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/fb-tc.png" alt="" class="c-icon">
                                </a>
                                <a href="<?php echo $sm_instagram; ?>">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/ins-tc.png" alt="" class="c-icon">
                                </a>
                                <a href="<?php echo $cds_youtube_url; ?>">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/yt-tc.png" alt="" class="c-icon">
                                </a>
                                <a href="<?php echo $sm_linkedin; ?>">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/ln-tc.png" alt="" class="c-icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-section">
            <div class="map-sec">
                <?php echo $cds_map_url; ?>
            </div>
        </div>
    </div>
</section>

<?php
	get_footer();
?>