<?php
   /*
   	Template Name: Industies
   */
   get_header();
   ?>

<?php get_template_part( 'template-parts/inner-banner', 'inner-banner' ); ?>

<?php 
	$ip_industry_listing	= get_field("ip_industry_listing");
?>
<section class="our-industries">
    <div class="main-wrapper">
        <?php foreach ($ip_industry_listing as $industry_item):
            $ip_title = $industry_item["ip_title"];
            $ip_image = $industry_item["ip_image"];
            $ip_content = $industry_item["ip_content"];
            $ip_industry_slider = $industry_item["ip_industry_slider"];
            $ip_image_url=validateImage(1012,807,$ip_image);
        ?>
            <div class="industry-item">
                <div class="industry-inner">
                    <div class="top-section">
                        <div class="left-div">
                            <div class="img-wrap fade-up">
                                <img src="<?php echo $ip_image_url; ?>" alt="">
                            </div>
                        </div>
                        <div class="right-div">
                            <h3 class="h-120 title fade-up"><?php echo $ip_title; ?></h3>
                            <p class="p-18 para fade-up"><?php echo $ip_content; ?></p>
                        </div>
                    </div>
                    <div class="bottom-section">
                        <div class="slide-left"></div>
                        <div class="slider-wrapper">
                            <div class="industry-land-slider">
                                <?php
                                    foreach($ip_industry_slider as $industry_item):
                                        $ip_industry_name        = $industry_item["ip_industry_name"];
                                        $ip_industry_content    = $industry_item["ip_industry_content"];
                                        $ip_icon_image    =$industry_item["ip_icon_image"];
                                        $ip_industry_url    =$industry_item["ip_industry_url"];
                                        $ip_icon_image_url=validateImage(228,197,$ip_icon_image);
                                ?>
                                <div class="insdustry-land-item">
                                    <div class="insdustry-land-inner">
                                        <img src="<?php echo $ip_icon_image_url; ?>" alt="" class="insdustry-land-image">
                                        <div class="details-item">
                                            <h3 class="h-60 title"><?php echo $ip_industry_name; ?></h3>
                                            <p class="p-18 content"><?php echo $ip_industry_content; ?></p>
                                            <a href="<?php echo $ip_industry_url; ?>" class="common-btn-trans btn-so">
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
                                ?>
				            </div>
                            <div class="arrow-num-indus">
                                <div class="left-arrow-indus">
                                    <svg class="arr-left">
                                        <use xlink:href="#tc-left"></use>
                                    </svg>
                                </div>
                                <div class="num-pack-indus">
                                    01 /<span>06</span>
                                </div>
                                <div class="right-arrow-indus">
                                    <svg class="arr-right">
                                        <use xlink:href="#tc-right"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php 
   get_footer();
   
?>
