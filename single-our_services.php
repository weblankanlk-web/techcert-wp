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
<?php 
    if ($white_icon_listing) :
?>
<section class="single-first-section">
    <div class="inner-wrapper">
        <div class="left-div">
            <div class="left-inner">
                <p class="h-30 tagline-white fade-up"><?php echo $sf_tagline; ?></p>
                <h2 class="main h-120 d-hide-t fade-up"><?php echo $sf_title;?></h2>
                <p class="large-para h-40 fade-up"><?php echo $sf_first_content; ?></p>
                <div class="para p-18 fade-up"><?php echo $sf_second_content; ?></div>
            </div>
        </div>
        <div class="right-div">
            <div class="right-inner">
                <h2 class="main h-120 d-hide-m fade-up"><?php echo $sf_title;?></h2>
                <div class="video-wrap">
                    <video class="Video-item"  playsinline="" autoplay="" muted="" loop="" id="singleVideo"
                        src="<?php echo $sf_video_url; ?>">
                    </video>
                </div>
                <div class="white-div-sec fade-up">
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
    endif;
?>

<?php 
	$id_desktop_image	= get_field("id_desktop_image");
	$id_mobile_image	= get_field("id_mobile_image");
	$id_main_title	= get_field("id_main_title");
	$id_desktop_image_url=validateImage(1919,875,$id_desktop_image);
	$id_mobile_image_url=validateImage(768,500,$id_mobile_image);
	$id_points_listing	= get_field("id_points_listing");
?>
<?php 
    if ($id_points_listing) :
?>
<section class="services_detail-include">
    <div class="full-wrapper">
        <div class="image-container fade-up">
            <picture>
                <source media="(min-width:992px)" srcset="<?php echo $id_desktop_image_url; ?>">
                <img src="<?php echo $id_mobile_image_url;?>" alt="">
            </picture>
        </div>
        <div class="detail-div">
            <div class="detail-inner">
                <h3 class="main h-80-s fade-up"><?php echo $id_main_title; ?></h3>
                <div class="points-sec">
                    <ul class="point-list">
                        <?php 
                            foreach($id_points_listing as $id_item):
                                $id_point  = $id_item["id_point"];
                            ?>
                            <li class="point-item p-25 fade-up"><?php echo $id_point; ?></li>
                        <?php
                            endforeach;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</section>
<?php
    endif;
?>

<?php 
	$vf_image	= get_field("vf_image");
	$vf_video_url	= get_field("vf_video_url");
	$vf_title	= get_field("vf_title");
	$vf_image_url=validateImage(1524,806,$vf_image);
	$vf_pdf_listing	= get_field("vf_pdf_listing");
?>
<?php 
    if ($vf_image) :
?>
<section class="services-pdf-video fade-up">
    <div class="full-wrapper">
        <div class="image-container">
            <img src="<?php echo $vf_image_url; ?>" alt="">
        </div>
        <?php  if ($vf_video_url) :?>
            <a href="<?php echo $vf_video_url; ?>" data-fancybox class="video-icon-url">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/video-btn.png" alt="" class="video-icon">
            </a>
        <?php
            endif;
        ?>
        <div class="detail-div">
            <div class="left-div">
                <?php  if ($vf_title) :?>
                    <h3 class="h-80-s main fade-up"><?php echo $vf_title; ?></h3>
                <?php
                    endif;
                ?>
            </div>
            <div class="right-div">
                <?php 
                      if ($vf_pdf_listing) :
                ?>
                <div class="pdf-listing">
                    <div class="pdf-slider">
                        <?php
                            foreach($vf_pdf_listing as $pdf_item):
                                $vf_file_name = $pdf_item["vf_file_name"];
                                $vf_pdf_url = $pdf_item["vf_pdf_url"];
                        ?>
                        <div class="pdf-item">
                            <div class="pdf-inner">
                                <div class="item-top">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/file.png" alt="">
                                    <p class="name p-18"><?php echo $vf_file_name; ?></p>
                                </div>
                                <a href="<?php echo $vf_pdf_url; ?>" class="p-18 link-pdf" target="_blank" rel="noopener" >Read More</a>
                            </div>
                        </div>
                        <?php
                            endforeach;
                        ?>
                    </div>
                </div>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>
<?php
    endif;
?>

<?php
    $hcp_form_title            = get_field("hcp_form_title"); 
    $hcp_form_content           = get_field("hcp_form_content");
    $hcp_form_image           = get_field("hcp_form_image");
    $hcp_contact_form           = get_field("hcp_contact_form");
    $hcp_form_image_url=validateImage(938,651,$hcp_form_image);
?>
<?php 
    if ($hcp_contact_form) :
?>
<section class="services-page-form">
    <div class="main-wrapper">  
        <div class="left-div">
            <h3 class="h-120 main fade-up"><?php echo $hcp_form_title; ?></h3>
            <p class="p-18 para fade-up"><?php echo $hcp_form_content; ?></p>
            <div class="image-wrap fade-up">
                <img src="<?php echo $hcp_form_image_url; ?>" alt="">
            </div>
        </div>
        <div class="right-div">
            <div class="form-wrap fade-up">
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
    endif;
?>

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
<?php 
    if ($hcp_key_bulletin_listing||$hcp_other_bulletin_listing) :
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
					<p class="h-30 tagline-white fade-up"><?php echo $htb_tagline; ?></p>
					<h2 class="h-120 main fade-up"><?php echo $htb_title; ?></h2>
				</div>
				<a href="<?php echo $htb_button_url; ?>" class="common-btn-blue btn-tb fade-up">
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
					<div class="threat-slider">
                    <?php
                            if ($hcp_key_bulletin_listing) :
                                foreach($hcp_key_bulletin_listing as $bulletin_item):
                                    $bulletin_key        = $bulletin_item["hcp_key_threat_bulletins"];
                                    $bulletin_key_id     = $bulletin_key->ID;
                                    $key_bulletin_title = get_the_title($bulletin_key_id);
                                    $tb_date = get_the_date("d F Y",$bulletin_key_id);
									$tbi_sub_title = get_field('tbi_sub_title', $bulletin_key_id);
                                    $key_single_image_url = get_the_post_thumbnail_url($bulletin_key_id, 'large');
                                    $key_single_bulletin_url=get_the_permalink( $bulletin_key_id);
                        ?>
                            <button type="button" class="threat-item">
								<div class="detail-div">
									<h6 class="p-25 sub"><?php echo $tbi_sub_title; ?></h6>
									<h3 class="title h-30"><?php echo esc_html($key_bulletin_title); ?></h3>
									<p class="p-20 tb-date"><?php echo $tb_date; ?></p>
								</div>
								<a href="<?php echo $key_single_bulletin_url; ?>" class="common-btn-trans btn-tb">
									<div class="btn-wrap">
										<div class="ar-icon">
											<svg class="left">
												<use xlink:href="#left"></use>
											</svg>
										</div>
										<p class="btn-text">Read More</p>
									</div>
								</a>
							</button>
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
                                    $tb_date = get_the_date("d F Y",$bulletin_other_id);
									$tbi_sub_title = get_field('tbi_sub_title', $bulletin_other_id);
                                    $other_single_image_url = get_the_post_thumbnail_url($bulletin_other_id, 'large');
                                    $other_single_bulletin_url=get_the_permalink( $bulletin_other_id);
                        ?>
                            <button type="button" class="threat-item">
								<div class="detail-div">
									<h6 class="p-25 sub"><?php echo $tbi_sub_title; ?></h6>
									<h3 class="title h-30"><?php echo esc_html($other_bulletin_title); ?></h3>
									<p class="p-20 tb-date"><?php echo $tb_date; ?></p>
								</div>
								<a href="<?php echo $other_single_bulletin_url; ?>" class="common-btn-trans btn-tb">
									<div class="btn-wrap">
										<div class="ar-icon">
											<svg class="left">
												<use xlink:href="#left"></use>
											</svg>
										</div>
										<p class="btn-text">Read More</p>
									</div>
								</a>
							</button>
                        <?php 
                                endforeach;
                            endif;
					    ?>
					</div>
					<div class="arrow-num-bms">
						<div class="left-arrow-bms">
							<svg class="arr-left">
								<use xlink:href="#tc-left"></use>
							</svg>
						</div>
						<div class="num-pack-bms">
						<b>01</b><span>06</span>
						</div>
						<div class="right-arrow-bms">
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
    endif;
?>

<?php 
	$ssm_title	= get_field("ssm_title");
	$ssm_sub_title	= get_field("ssm_sub_title");
	$ssm_image	= get_field("ssm_image");
	$ssm_image_url=validateImage(1640,463,$ssm_image);
	$ssm_first_button_text	= get_field("ssm_first_button_text");
	$ssm_second_button_text	= get_field("ssm_second_button_text");
    $sm_whatsapp	= get_field("sm_whatsapp","option");
?>
<?php 
    if ($ssm_image) :
?>
<section class="service-redirect-social fade-up">
    <div class="main-wrapper">
        <div class="image-container">
            <img src="<?php echo $ssm_image_url;?>" alt="">
        </div>
        <div class="detail-div">
            <div class="detail-inner">
                <h4 class="h-80-s main fade-up"><?php echo $ssm_title;?></h4>
                <h3 class="h-30 sub fade-up"><?php echo $ssm_sub_title;?></h3>
                <div class="btn-group">
                    <a href="<?php echo $sm_whatsapp; ?>" class="common-btn-green btn-sc-1 fade-up" target="_blank" target="_blank" >
                        <div class="btn-wrap">
                            <div class="ar-icon">
                                <svg class="left">
                                    <use xlink:href="#left"></use>
                                </svg>
                            </div>
                            <p class="btn-text"><?php echo $ssm_first_button_text;?></p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="common-btn-blue btn-sc-2 fade-up">
                        <div class="btn-wrap">
                            <div class="ar-icon">
                                <svg class="left">
                                    <use xlink:href="#left"></use>
                                </svg>
                            </div>
                            <p class="btn-text"><?php echo $ssm_second_button_text;?></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    endif;
?>

<?php
	get_footer();
?>