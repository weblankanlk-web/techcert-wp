<?php 
     /* Template Name: About Us */
?>

<?php 
	get_header(); 
?>

<?php get_template_part( 'template-parts/inner-banner', 'inner-banner' ); ?>

<?php 
	$af_title	= get_field("af_title");
	$af_sub_title	= get_field("af_sub_title");
	$af_tagline	= get_field("af_tagline");
	$af_content	= get_field("af_content");
	$af_image	= get_field("af_image");
	$af_image_url=validateImage(990,757,$af_image);
?>
<section class="about-first">
	<div class="inner-wrapper">
		<div class="top-section">
			<div class="left-div">
				<div class="title-section">
					<p class="h-30 tagline-white fade-up"><?php echo $af_tagline; ?></p>
					<svg viewBox="0 0 1000 200" class="d-hide-m fade-up">
						<text x="10" y="170" font-size="120"  font-weight="400" fill="none" stroke="white" stroke-width="1" stroke-dasharray="2">
						<?php echo $af_sub_title; ?>
						</text>
					</svg>
					<h3 class="h-100 sub fade-up d-hide-t"><?php echo $af_sub_title; ?></h3>
				</div>
				<h2 class="h-120 main fade-up"><?php echo $af_title; ?></h2>
			</div>
		</div>
		<div class="bottom-section">
			<div class="image-wrap">
				<img src="<?php echo $af_image_url; ?>" alt="" class="white-image">
			</div>
			<div class="detail-para">
				<div class="p-20 white-para fade-up"><?php echo $af_content; ?></div>
			</div>
		</div>
	</div>
</section>

<?php 
	$avm_title	= get_field("avm_title");
	$avm_tagline	= get_field("avm_tagline");
	$avm_image	= get_field("avm_image");
	$avm_image_url= validateImage(707.622,758.127,$avm_image);
	$avm_vision_title	= get_field("avm_vision_title");
	$avm_vision_content	= get_field("avm_vision_content");
	$avm_vision_image	= get_field("avm_vision_image");
	$avm_vision_image_url= validateImage(216,238,$avm_vision_image);
	$avm_mission_title	= get_field("avm_mission_title");
	$avm_mission_content	= get_field("avm_mission_content");
	$avm_mission_image	= get_field("avm_mission_image");
	$avm_mission_image_url= validateImage(216,238,$avm_mission_image);
?>
<section class="about-vision-mission">
    <div class="main-wrapper">  
        <div class="left-div">
			<p class="h-30 tagline-white fade-up"><?php echo $avm_tagline; ?></p>
            <h2 class="main h-120 fade-up"><?php echo $avm_title;?></h2>
            <div class="image-wrap">
                <img src="<?php echo $avm_image_url; ?>" alt="" class="main">
            </div>
        </div>
        <div class="right-div">
            <div class="right-inner">
				<div class="item-div fade-up">
					<div class="item-inner">
						<div class="image-container">
							<img src="<?php echo $avm_vision_image_url; ?>" alt="">
						</div>
						<h4 class="title h-100"><?php echo $avm_vision_title; ?></h4>
						<p class="para p-18"><?php echo $avm_vision_content; ?></p>
					</div>
				</div>
				<div class="item-div fade-up">
					<div class="item-inner">
						<div class="image-container">
							<img src="<?php echo $avm_mission_image_url; ?>" alt="">
						</div>
						<h4 class="title h-100"><?php echo $avm_mission_title; ?></h4>
						<p class="para p-18"><?php echo $avm_mission_content; ?></p>
					</div>
				</div>
			</div>
        </div>  
    </div>
</section>

<?php 
	$aw_image	= get_field("aw_image");
	$aw_image_url=validateImage(1920,827,$aw_image);
	$white_tagline	= get_field("white_tagline");
	$white_title	= get_field("white_title");
	$white_content	= get_field("white_content");
	$white_icon_listing	= get_field("white_icon_listing");
?>
<section class="about-white">
	<div class="full-wrapper">
		<div class="image-container">
			<img src="<?php echo $aw_image_url; ?>" alt="">
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
</section>

<?php 
	$aa_title	= get_field("aa_title");
	$aa_award_listing	= get_field("aa_award_listing");
?>
<section class="about-awards">
	<div class="full-wrapper">
		<div class="top-section">
			<h2 class="main h-120 fade-up"><?php echo $aa_title;?></h2>
		</div>
		<?php
        if ($aa_award_listing) :
        ?>
		<div class="bottom-section">
			<div class="slider-wrapper">
				<div class="awards-slider">
					<?php 
						$n=1;
						foreach ($aa_award_listing as $award_item) : 
							$aa_award_image = $award_item["aa_award_image"];
							$aa_award_image_url= validateImage(251,181,$aa_award_image);
							$aa_award_year = $award_item["aa_award_year"];
							$aa_award_content = $award_item["aa_award_content"];
							$aa_award_button = $award_item["aa_award_button"];
							$modal_id = 'modal-' . $n;
						?>
							<div class="award-div">
								<div class="award-inner" data-toggle="modal"
								data-target="#<?php echo esc_attr($modal_id); ?>" data-aa_award_image_url="<?php echo $aa_award_image_url; ?>">
									<img src="<?php echo $aa_award_image_url;?>" class="award-img" alt="">
									<h5 class="h-30 award-year"><?php echo $aa_award_year;?></h5>
									<p class="p-18 award-para"><?php echo $aa_award_content;?></p>
									<a href="#" class="common-btn-trans btn-as">
										<div class="btn-wrap">
											<div class="ar-icon">
												<svg class="left">
													<use xlink:href="#left"></use>
												</svg>
											</div>
											<p class="btn-text"><?php echo $aa_award_button; ?></p>
										</div>
									</a>
								</div>
							</div>
						<?php
						$n++;
						endforeach;
						?>
				</div>
				<div class="arrow-div">
					<div class="arrow-left-a">
						<svg class="arr-left">
							<use xlink:href="#tc-left"></use>
						</svg>
					</div>
					<div class="arrow-right-a">
						<svg class="arr-right">
							<use xlink:href="#tc-right"></use>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<?php
        endif;
        ?>
	</div>
</section>

<section class="award-modal" id="award-modal">
		<div class="award-modal-content-box">
			<div class="award-modal-content">
				<div class="modal-close">
					<svg class="closeicon">
						<use xlink:href="#closeicon"></use>
					</svg>
				</div> 
				<div class="image-container-model">
					<img src="" alt="" class="award-image">
				</div>
			</div>
		</div>
	</section>

<?php
	get_footer();
?>