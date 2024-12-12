<?php 
     /* Template Name: Home */
?>

<?php 
	get_header(); 
?>

<?php 
	$hh_hero_listing	= get_field("hh_hero_listing");
?>
<section class="home-hero-section">
	<div class="full-wrapper">
		<div class="slider-wrapper">
			<div class="hero-slider">
				<?php foreach ($hh_hero_listing as $hero_item) : 
						$hh_title = $hero_item["hh_title"];
						$hh_sub_title = $hero_item["hh_sub_title"];
						$hh_button_text = $hero_item["hh_button_text"];
						$hh_button_url = $hero_item["hh_button_url"];
						$hh_video_url = $hero_item["hh_video_url"];
				?>
					<div class="hero-item">
						<div class="hero-inner">
							<video autoplay muted loop id="heroVideo">
								<source src="<?php echo $hh_video_url; ?>" type="video/mp4">
							</video>
							<div class="main-wrapper">
								<div class="detail-item">
									<h2 class="h-140 main"><?php echo $hh_title; ?></h2>
									<h3 class="h-80 sub"><?php echo $hh_sub_title; ?></h3>
								</div>
								<a href="<?php echo $hh_button_url; ?>" class="common-btn btn-hero">
									<div class="btn-wrap">
										<div class="ar-icon">
											<svg class="left">
												<use xlink:href="#left"></use>
											</svg>
										</div>
										<p class="btn-text"><?php echo $hh_button_text; ?></p>
									</div>
								</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<?php 
	$ha_title	= get_field("ha_title");
	$ha_sub_title	= get_field("ha_sub_title");
	$ha_tagline	= get_field("ha_tagline");
	$ha_button_text	= get_field("ha_button_text");
	$ha_button_url	= get_field("ha_button_url");
	$ha_content	= get_field("ha_content");
	$ha_image	= get_field("ha_image");
	$ha_image_url=validateImage(990,757,$ha_image);
	$white_tagline	= get_field("white_tagline");
	$white_title	= get_field("white_title");
	$white_content	= get_field("white_content");
	$white_icon_listing	= get_field("white_icon_listing");
?>
<section class="home-about">
	<div class="inner-wrapper">
		<div class="top-section">
			<div class="left-div">
				<div class="title-section">
					<p class="h-30 tagline-white"><?php echo $ha_tagline; ?></p>
					<!-- <div class="container-svg">
						<svg>
							<text class="dashed" x="0" y="0" dominant-baseline="hanging">
								<tspan x="0" dy="0"></?php echo $ha_sub_title; ?></tspan>
							</text>
						</svg>
					</div> -->
					<h3 class="h-100 sub"><?php echo $ha_sub_title; ?></h3>
				</div>
				<h2 class="h-120 main"><?php echo $ha_title; ?></h2>
			</div>
			<a href="<?php echo $ha_button_url; ?>" class="common-btn btn-about">
				<div class="btn-wrap">
					<div class="ar-icon">
						<svg class="left">
							<use xlink:href="#left"></use>
						</svg>
					</div>
					<p class="btn-text"><?php echo $ha_button_text; ?></p>
				</div>
			</a>
		</div>
		<div class="bottom-section">
			<div class="image-wrap">
				<img src="<?php echo $ha_image_url; ?>" alt="" class="white-image">
			</div>
			<div class="detail-para">
				<p class="p-20 white-para"><?php echo $ha_content; ?></p>
			</div>
			<div class="white-section">
				<div class="white-section-inner">
					<p class="h-30 tagline-black"><?php echo $white_tagline; ?></p>
					<h3 class="h-80 white-title"><?php echo $white_title; ?></h3>
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
	get_footer();
?>
