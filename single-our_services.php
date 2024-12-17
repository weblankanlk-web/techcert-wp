<?php 
     /* Template Name: About Us */
?>

<?php 
	get_header(); 
?>

<?php get_template_part( 'template-parts/inner-banner', 'inner-banner' ); ?>

<?php 
	$sf_title	= get_field("sf_title");
	$sf_tagline	= get_field("sf_tagline");
	$sf_first_content	= get_field("sf_first_content");
	$sf_second_content	= get_field("sf_second_content");
	$sf_video_url	= get_field("sf_video_url");
    $white_tagline	= get_field("white_tagline");
	$white_title	= get_field("white_title");
	$white_content	= get_field("white_content");
	$white_icon_listing	= get_field("white_icon_listing");
?>
<section class="single-first-section">
    <div class="inner-wrapper">
        <div class="left-div">
            <div class="left-inner">
                <p class="h-30 tagline-white"><?php echo $sf_tagline; ?></p>
                <h2 class="main h-120 d-hide-t"><?php echo $sf_title;?></h2>
                <p class="large-para h-40"><?php echo $sf_first_content; ?></p>
                <div class="para p-18"><?php echo $sf_second_content; ?></div>
            </div>
        </div>
        <div class="right-div">
            <div class="right-inner">
                <h2 class="main h-120 d-hide-m"><?php echo $sf_title;?></h2>
                <div class="video-wrap">
                <video autoplay muted loop id="singleVideo">
                    <source src="<?php echo $sf_video_url; ?>" type="video/mp4">
                </video>
                </div>
                <div class="white-div-sec">
                    <div class="white-section">
                        <div class="white-section-inner">
                            <p class="h-30 tagline-black"><?php echo $white_tagline; ?></p>
                            <h3 class="h-80-s white-title"><?php echo $white_title; ?></h3>
                            <p class="p-18 white-para"><?php echo $white_content; ?></p>
                            <div class="white-listing">
                                <div class="slide-wrapper">
                                    <div class="white-icon-slider">
                                        <?php foreach ($white_icon_listing as $white_item) : 
                                            $white_icon_title = $white_item["white_icon_title"];
                                            $white_icon = $white_item["white_icon"];
                                            $white_icon_url=validateImage(85,85,$white_icon);
                                        ?>
                                            <div class="white-item">
                                                <div class="white-inner">
                                                    <img src="<?php echo $white_icon_url; ?>" alt="" class="white-icon">
                                                    <p class="p-18 white-icon-para"><?php echo $white_icon_title; ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $hcp_form_title            = get_field("hcp_form_title"); 
    $hcp_form_content           = get_field("hcp_form_content");
    $hcp_form_image           = get_field("hcp_form_image");
    $hcp_contact_form           = get_field("hcp_contact_form");
    $hcp_form_image_url=validateImage(938,651,$hcp_form_image);
?>
<section class="services-page-form">
    <div class="main-wrapper">  
        <div class="left-div">
            <h3 class="h-120 main"><?php echo $hcp_form_title; ?></h3>
            <p class="p-18 para"><?php echo $hcp_form_content; ?></p>
            <div class="image-wrap">
                <img src="<?php echo $hcp_form_image_url; ?>" alt="">
            </div>
        </div>
        <div class="right-div">
            <div class="form-wrap">
                <?php 
                    if($hcp_contact_form){
                        echo $hcp_contact_form;
                    }
                ?>
            </div>
        </div>  
    </div>
</section>

<?php 
	$htb_tagline	= get_field("htb_tagline");
	$htb_button_text	= get_field("htb_button_text");
	$htb_button_url	= get_field("htb_button_url");
	$htb_title	= get_field("htb_title");
	$htb_mobile_image	= get_field("htb_mobile_image");
	$htb_mobile_image_url=validateImage(796,485,$htb_mobile_image);
	$htb_desktop_image	= get_field("htb_desktop_image");
	$htb_desktop_image_url=validateImage(1232,1003,$htb_desktop_image);
	$hcp_key_bulletin_listing	= get_field("hcp_key_bulletin_listing");
	$hcp_other_bulletin_listing	= get_field("hcp_other_bulletin_listing");
?>
<section class="services-threat-bulletins">
	<div class="main-wrapper">
		<div class="image-container">
			<div class="image-wrap">
				<picture>
					<source media="(min-width:992px)" srcset="<?php echo $htb_desktop_image_url; ?>">
					<img src="<?php echo esc_url($htb_mobile_image_url);?>" alt="" class="home-tb">
				</picture>
			</div>
		</div>
		<div class="main-div">
			<div class="top-section">
				<div class="first-sec">
					<p class="h-30 tagline-white"><?php echo $htb_tagline; ?></p>
					<h2 class="h-120 main"><?php echo $htb_title; ?></h2>
				</div>
				<a href="<?php echo $htb_button_url; ?>" class="common-btn-blue btn-tb">
					<div class="btn-wrap">
						<div class="ar-icon">
							<svg class="left">
								<use xlink:href="#left"></use>
							</svg>
						</div>
						<p class="btn-text"><?php echo $htb_button_text; ?></p>
					</div>
				</a>
			</div>
			<div class="bottom-section">
				<div class="slider-wrapper">
					<div class="bulletin-slider">
					    <?php
                            if ($hcp_key_bulletin_listing) :
                                foreach($hcp_key_bulletin_listing as $bulletin_item):
                                    $bulletin_key        = $bulletin_item["hcp_key_threat_bulletins"];
                                    $bulletin_key_id     = $bulletin_key->ID;
                                    $key_bulletin_title = get_the_title($bulletin_key_id);
                                    $key_single_image_url = get_the_post_thumbnail_url($bulletin_key_id, 'large');
                                    $key_single_bulletin_url=get_the_permalink( $bulletin_key_id);
                        ?>
                            <div class="bulletin-div">
                                <div class="bulletin-inner">
                                        <div class="featured-image">
                                            <img src="<?php echo $key_single_image_url; ?>" alt="">
                                        </div>
                                    <div class="post-content">
                                        <h2 class="post-title h-30">
                                            <a href="<?php echo $key_single_bulletin_url; ?>"><?php echo $key_bulletin_title; ?></a>
                                        </h2>
                                        <a href="<?php echo esc_url($key_single_bulletin_url); ?>" class="common-btn-trans btn-tb-item">
                                            <div class="btn-wrap">
                                                <div class="ar-icon">
                                                    <svg class="left">
                                                        <use xlink:href="#left"></use>
                                                    </svg>
                                                </div>
                                                <p class="btn-text">Read More</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php 
                                endforeach;
                            endif;
					    ?>
                        <?php
                            if ($hcp_other_bulletin_listing) :
                                foreach($hcp_other_bulletin_listing as $bulletin_item):
                                    $bulletin_other        = $bulletin_item["hcp_other_threat_bulletins"];
                                    $bulletin_other_id     = $bulletin_other->ID;
                                    $other_bulletin_title = get_the_title($bulletin_other_id);
                                    $other_single_image_url = get_the_post_thumbnail_url($bulletin_other_id, 'large');
                                    $other_single_bulletin_url=get_the_permalink( $bulletin_other_id);
                        ?>
                            <div class="bulletin-div">
                                <div class="bulletin-inner">
                                        <div class="featured-image">
                                            <img src="<?php echo $other_single_image_url; ?>" alt="">
                                        </div>
                                    <div class="post-content">
                                        <h2 class="post-title h-30">
                                            <a href="<?php echo $other_single_image_url; ?>"><?php echo $other_bulletin_title; ?></a>
                                        </h2>
                                        <a href="<?php echo $other_single_image_url; ?>" class="common-btn-trans btn-tb-item">
                                            <div class="btn-wrap">
                                                <div class="ar-icon">
                                                    <svg class="left">
                                                        <use xlink:href="#left"></use>
                                                    </svg>
                                                </div>
                                                <p class="btn-text">Read More</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php 
                                endforeach;
                            endif;
					    ?>
				    </div>
					
					<div class="arrow-num-bulletins">
                        <div class="left-arrow-bulletins">
                            <svg class="arr-left">
                                <use xlink:href="#tc-left"></use>
                            </svg>
                        </div>
                        <div class="num-pack-bulletins">
                             01 /<span>06</span>
                        </div>
                        <div class="right-arrow-bulletins">
                            <svg class="arr-right">
                                <use xlink:href="#tc-right"></use>
                            </svg>
                        </div>
                    </div>
				</div>
				<div class="right-div">
				</div>
			</div>
		</div>
	</div>
</section>


<?php
	get_footer();
?>