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
					<p class="h-30 tagline-white"><?php echo $af_tagline; ?></p>
					<!-- <div class="container-svg">
						<svg>
							<text class="dashed" x="0" y="0" dominant-baseline="hanging">
								<tspan x="0" dy="0"></?php echo $ha_sub_title; ?></tspan>
							</text>
						</svg>
					</div> -->
					<h3 class="h-100 sub"><?php echo $af_sub_title; ?></h3>
				</div>
				<h2 class="h-120 main"><?php echo $af_title; ?></h2>
			</div>
		</div>
		<div class="bottom-section">
			<div class="image-wrap">
				<img src="<?php echo $af_image_url; ?>" alt="" class="white-image">
			</div>
			<div class="detail-para">
				<div class="p-20 white-para"><?php echo $af_content; ?></div>
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
</section>

<?php 
	$aa_title	= get_field("aa_title");
	$aa_award_listing	= get_field("aa_award_listing");
?>
<section class="about-awards">
	<div class="full-wrapper">
		<div class="top-section">
			<h2 class="main h-120"><?php echo $aa_title;?></h2>
		</div>
		<?php
        if ($aa_award_listing) :
        ?>
		<div class="bottom-section">
			<div class="slider-wrapper">
				<div class="awards-slider">
					<?php foreach ($aa_award_listing as $award_item) : 
						$aa_award_image = $award_item["aa_award_image"];
						$aa_award_image_url= validateImage(251,181,$aa_award_image);
						$aa_award_year = $award_item["aa_award_year"];
						$aa_award_content = $award_item["aa_award_content"];
					?>
						<div class="award-div">
							<div class="award-inner">
								<img src="<?php echo $aa_award_image_url;?>" class="award-img" alt="">
								<h5 class="h-30 award-year"><?php echo $aa_award_year;?></h5>
								<p class="p-18 award-para"><?php echo $aa_award_content;?></p>
							</div>
						</div>
					<?php
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

<?php
	get_footer();
?>