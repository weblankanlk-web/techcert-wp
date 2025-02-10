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
							<video class="Video-item"  playsinline="" autoplay="" muted="" loop="" id="heroVideo"
								src="<?php echo $hh_video_url; ?>">
							</video>
							<svg class="main-banner-svg">
								<use xlink:href="#document-and-video-element-grid"></use>
							</svg>
							<div class="main-wrapper">
								<div class="detail-item">
									<h3 class="h-80 sub fade-up"><?php echo $hh_title; ?></h3>
									<h2 class="h-140 main fade-up"><?php echo $hh_sub_title; ?></h2>
								</div>
								<a href="<?php echo $hh_button_url; ?>" class="common-btn-blue btn-hero fade-up">
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

<section class="about-other-services">
	<svg class="about-other-banner">
		<use xlink:href="#about-other-banner"></use>
	</svg>
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
	<div class="home-about">
		<div class="inner-wrapper">
			<div class="top-section">
				<div class="left-div">
					<div class="title-section">
						<p class="h-30 tagline-white fade-up"><?php echo $ha_tagline; ?></p>
						<svg viewBox="0 0 1000 200" class="d-hide-m fade-up">
							<text x="10" y="170" font-size="100"  font-weight="400" fill="none" stroke="white" stroke-width="1" stroke-dasharray="2">
							<?php echo $ha_sub_title; ?>
							</text>
						</svg>
						<h3 class="h-100 sub fade-up d-hide-t"><?php echo $ha_sub_title; ?></h3>
					</div>
					<h2 class="h-120 main fade-up"><?php echo $ha_title; ?></h2>
				</div>
				<a href="<?php echo $ha_button_url; ?>" class="common-btn-blue btn-about fade-up">
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
					<p class="p-20 white-para fade-up"><?php echo $ha_content; ?></p>
				</div>
				<div class="white-section fade-up">
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

	<?php 
		$hs_tagline	= get_field("hs_tagline");
		$hs_title	= get_field("hs_title");
		$hs_service_listing	= get_field("hs_service_listing");
	?>
	<div class="home-services">
		<div class="full-wrapper">
			<div class="top-section">
				<div class="title-section">
					<p class="h-30 tagline-white fade-up"><?php echo $hs_tagline; ?></p>
					<h3 class="h-120 main fade-up"><?php echo $hs_title; ?></h3>
				</div>
			</div>
			<div class="bottom-section">
				<div class="slider-wrapper">
					<div class="services-slider">
						<?php if($hs_service_listing):
							foreach($hs_service_listing as $service_item):
								$service_key        = $service_item["hs_key_service_item"];
								$service_key_id     = $service_key->ID;
								$hcp_sevice_name    = get_field("hcp_sevice_name",$service_key_id);
								$hcp_service_image    = get_field("hcp_service_image",$service_key_id);
								$hcp_service_butttn_text    = get_field("hcp_service_butttn_text",$service_key_id);
								$hcp_service_image_url=validateImage(816,416,$hcp_service_image);
								$hcp_sevice_url=get_the_permalink( $service_key_id);
						?>
							<div class="key-service-item fade-up">
								<div class="key-service-inner">
									<img src="<?php echo $hcp_service_image_url; ?>" alt="" class="key-service-image">
									<div class="details-item">
										<h3 class="h-60 title"><?php echo $hcp_sevice_name; ?></h3>
										<a href="<?php echo $hcp_sevice_url; ?>" class="common-btn-trans btn-sk">
											<div class="btn-wrap">
												<div class="ar-icon">
													<svg class="left">
														<use xlink:href="#left"></use>
													</svg>
												</div>
												<p class="btn-text"><?php echo $hcp_service_butttn_text; ?></p>
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
				</div>
			</div>
		</div>
	</div>

	<?php 
		$hos_tagline	= get_field("hos_tagline");
		$hos_sub_title	= get_field("hos_sub_title");
		$hos_title	= get_field("hos_title");
		$hos_button_text	= get_field("hos_button_text");
		$hos_button_url	= get_field("hos_button_url");
		$hos_other_services_listing	= get_field("hos_other_services_listing");
	?>
	<div class="home-other-services">
		<div class="full-wrapper">
			<div class="top-section">
				<div class="left-div">
					<div class="title-section">
						<h3 class="h-70 sub fade-up"><?php echo $hos_sub_title; ?></h3>
						<p class="h-30 tagline-white fade-up"><?php echo $hos_tagline; ?></p>
					</div>
					<h2 class="h-120 main fade-up"><?php echo $hos_title; ?></h2>
				</div>
				<a href="<?php echo $hos_button_url; ?>" class="common-btn-blue btn-other fade-up">
					<div class="btn-wrap">
						<div class="ar-icon">
							<svg class="left">
								<use xlink:href="#left"></use>
							</svg>
						</div>
						<p class="btn-text"><?php echo $hos_button_text; ?></p>
					</div>
				</a>
			</div>
			<div class="bottom-section">
				<div class="slider-wrapper">
					<div class="other-services-slider">
						<?php if($hos_other_services_listing):
							foreach($hos_other_services_listing as $o_service_item):
								$service_other        = $o_service_item["hos_other_service_item"];
								$service_other_id     = $service_other->ID;
								$hcp_sevice_name    = get_field("hcp_sevice_name",$service_other_id);
								$hos_service_content    = get_field("hos_service_content",$service_other_id);
								$hcp_service_image    = get_field("hcp_service_image",$service_other_id);
								$hcp_service_butttn_text    = get_field("hcp_service_butttn_text",$service_other_id);
								$hcp_service_image_url=validateImage(228,197,$hcp_service_image);
								$hcp_sevice_url=get_the_permalink( $service_other_id);
						?>
							<div class="other-service-item">
								<div class="other-service-inner">
									<img src="<?php echo $hcp_service_image_url; ?>" alt="" class="other-service-image">
									<div class="details-item">
										<h3 class="h-60 title"><?php echo $hcp_sevice_name; ?></h3>
										<p class="p-18 content"><?php echo $hos_service_content; ?></p>
										<a href="<?php echo $hcp_sevice_url; ?>" class="common-btn-trans btn-so">
											<div class="btn-wrap">
												<div class="ar-icon">
													<svg class="left">
														<use xlink:href="#left"></use>
													</svg>
												</div>
												<p class="btn-text"><?php echo $hcp_service_butttn_text; ?></p>
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
					<div class="arrow-div">
						<div class="arrow-left-o">
							<svg class="arr-left">
								<use xlink:href="#tc-left"></use>
							</svg>
						</div>
						<div class="arrow-right-o">
							<svg class="arr-right">
								<use xlink:href="#tc-right"></use>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
	$hm_title	= get_field("hm_title");
	$hm_content	= get_field("hm_content");
	$hm_video_url	= get_field("hm_video_url");
?>
<section class="home-map">
	<div class="full-wrapper">
		<div class="video-div">
			<video class="Video-item"  playsinline="" autoplay="" muted="" loop="" id="mapVideo"
				src="<?php echo $hm_video_url; ?>">
			</video>
			<svg class="map-h">
				<use xlink:href="#map-h"></use>
			</svg>
		</div>
		<div class="details-section">
			<div class="detail-inner">
				<h2 class="h-200 main fade-up"><?php echo $hm_title; ?></h2>
				<p class="p-18 para fade-up"><?php echo $hm_content; ?></p>
			</div>
		</div>
	</div>
</section>

<?php 
	$hi_title	= get_field("hi_title");
	$hi_tagline	= get_field("hi_tagline");
	$hi_nav_tabs	= get_field("hi_nav_tabs");
?>
<section class="home-industries" id="ins">
    <div class="main-wrapper">
		<svg class="industries-svg">
			<use xlink:href="#indusrtry"></use>
		</svg>
        <div class="industry-list">
			<div class="title-section d-hide-t">
				<p class="h-30 tagline-white fade-up tag-ins"><?php echo $hi_tagline; ?></p>
				<h3 class="h-120 main fade-up"><?php echo $hi_title; ?></h3>
			</div>
			<div class="tab-content" id="inTabsContent">
				<?php foreach ($hi_nav_tabs as $index => $tab_item):
					$hi_industry_image = $tab_item["hi_industry_image"];
					$hi_industry_image_url=validateImage(891,940,$hi_industry_image);
				?>
					<div class="tab-pane <?php echo $index === 0 ? 'show active' : ''; ?>"
						id="tab-<?php echo $index; ?>"
						role="tabpanel"
						data-number="<?php echo $index; ?>"
						aria-labelledby="tab-<?php echo $index; ?>-tab">
						<div class="slider-wrapper">
							<div class="industry-slider">
								<div class="insustry-item">
									<div class="industry-inner">
										<img src="<?php echo $hi_industry_image_url; ?>" alt="" class="industry-image">
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
            <div class="bottom-section">
                <div class="bottom-inner">
					<div class="title-section d-hide-m">
						<p class="h-30 tagline-white fade-up"><?php echo $hi_tagline; ?></p>
						<h3 class="h-120 main fade-up"><?php echo $hi_title; ?></h3>
					</div>

					<div class="tab-sec">
							<ul class="nav nav-tabs" id="inTabs" role="tablist">
							<?php foreach ($hi_nav_tabs as $index => $tab_item):
								$hi_tab_nav_title = $tab_item["hi_tab_nav_title"];
							?>
								<li class="nav-item fade-up" role="presentation">
									<button class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>"
										id="tab-<?php echo $index; ?>-tab"
										data-bs-toggle="tab"
										type="button"
										role="tab"
										data-number="<?php echo $index; ?>"
										data-bs-target="#tab-<?php echo $index; ?>"
										aria-controls="tab-<?php echo $index; ?>"
										aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
										<?php echo $hi_tab_nav_title; ?>
									</button>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<a href="<?php echo esc_url(home_url('/our-industries')); ?>" class="common-btn-blue btn-inds fade-up">
						<div class="btn-wrap">
							<div class="ar-icon">
								<svg class="left">
									<use xlink:href="#left"></use>
								</svg>
							</div>
							<p class="btn-text">Explore More</p>
						</div>
					</a>
                </div>
            </div>
			<div class="arrow-num-industries">
				<div class="left-arrow-industries">
					<svg class="arr-left">
						<use xlink:href="#tc-left"></use>
					</svg>
				</div>
				<div class="num-pack-industries">
						<b>01</b>/<span>06</span>
				</div>
				<div class="right-arrow-industries">
					<svg class="arr-right">
						<use xlink:href="#tc-right"></use>
					</svg>
				</div>
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
	$tbis_threat_listing	= get_field("tbis_threat_listing");
?>

<section class="home-threat-bulletins">
	<div class="main-wrapper">
		<div class="image-container">
			<div class="image-wrap">
				<picture>
					<source media="(min-width:992px)" srcset="<?php echo $htb_desktop_image_url; ?>">
					<img src="<?php echo $htb_mobile_image_url;?>" alt="" class="home-tb">
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
							if ($tbis_threat_listing) :
								foreach($tbis_threat_listing as $bulletin_item):
									$bulletin        = $bulletin_item["tbis_threat_bulletin"];
									$bulletin_id     = $bulletin->ID;
									$tb_title = get_the_title($bulletin_id);
									$tb_date = get_the_date("d F Y",$bulletin_id);
									$tbi_sub_title = get_field('tbi_sub_title', $bulletin_id);
									$tbi_link=get_the_permalink($bulletin_id);
						?>
							<button type="button" class="threat-item">
								<div class="detail-div">
									<h6 class="p-25 sub"><?php echo $tbi_sub_title; ?></h6>
									<h3 class="title h-30"><?php echo esc_html($tb_title); ?></h3>
									<p class="p-20 tb-date"><?php echo $tb_date; ?></p>
								</div>
								<a href="<?php echo $tbi_link; ?>" class="common-btn-trans btn-tb">
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
						<b>01</b>/<span>06</span>
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
	$hp_title	= get_field("hp_title");
	$hp_brand_listing	= get_field("hp_brand_listing");
?>
<section class="home-partners">
	<div class="full-wrapper">
		<div class="top-section">
			<h2 class="main h-80-s fade-up"><?php echo $hp_title;?></h2>
		</div>
		<?php
        if ($hp_brand_listing) :
        ?>
		<div class="bottom-section">
			<div class="slider-wrapper">
				<div class="brands-slider">
					<?php foreach ($hp_brand_listing as $brand_item) : 
						$hp_brand_image = $brand_item["hp_brand_image"];
						$hp_brand_image_url= validateImage(244.355,100,$hp_brand_image);
						$hp_brand_content = $brand_item["hp_brand_content"];
					?>
						<div class="brand-div">
							<div class="brand-inner">
								<img src="<?php echo $hp_brand_image_url;?>" class="brand-img" alt="">
								<p class="p-16 brand-para"><?php echo $hp_brand_content;?></p>
							</div>
						</div>
					<?php
					endforeach;
					?>
				</div>
				<div class="arrow-div">
					<div class="arrow-left-b">
						<svg class="arr-left">
							<use xlink:href="#tc-left"></use>
						</svg>
					</div>
					<div class="arrow-right-b">
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

<script>
document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll("#inTabs .nav-link");
    const tabPanes = document.querySelectorAll(".tab-pane");
    const prevArrow = document.querySelector(".left-arrow-industries");
    const nextArrow = document.querySelector(".right-arrow-industries");
    const numPack = document.querySelector(".num-pack-industries"); 
    const totalTabs = tabs.length;

    let activeIndex = 0;

    if (numPack) {
        const totalSpan = numPack.querySelector("span");
        if (totalSpan) {
            totalSpan.textContent = String(totalTabs).padStart(2, '0'); 
        }
    }

    function updateNumberDisplay() {
        const currentNumber = String(activeIndex + 1).padStart(2, '0'); 
        if (numPack) {
            numPack.innerHTML = `<b>${currentNumber}</b>/ <span>${String(totalTabs).padStart(2, '0')}</span>`;
        }
    }

    function updateTabs(newIndex) {
        if (newIndex < 0) {
            newIndex = totalTabs - 1; // Go to last tab if moving left from first tab
        } else if (newIndex >= totalTabs) {
            newIndex = 0; // Go to first tab if moving right from last tab
        }

        tabs[activeIndex].classList.remove("active");
        tabPanes[activeIndex].classList.remove("show", "active");

        activeIndex = newIndex;

        tabs[activeIndex].classList.add("active");
        tabPanes[activeIndex].classList.add("show", "active");

        updateNumberDisplay(); 
    }

    tabs.forEach((tab, index) => {
        tab.addEventListener("click", function () {
            updateTabs(index);
        });
    });

    if (prevArrow) {
        prevArrow.addEventListener("click", function () {
            updateTabs(activeIndex - 1);
        });
    }

    if (nextArrow) {
        nextArrow.addEventListener("click", function () {
            updateTabs(activeIndex + 1);
        });
    }

    updateNumberDisplay();
});

</script>