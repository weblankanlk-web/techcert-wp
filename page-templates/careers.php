<?php 
     /* Template Name: Careers */
?>

<?php 
	get_header(); 
?>

<?php get_template_part( 'template-parts/inner-banner', 'inner-banner' ); ?>

<?php
    $cpc_sub_title            = get_field("cpc_sub_title"); 
    $cpc_title           = get_field("cpc_title");
    $cpc_career_listing           = get_field("cpc_career_listing");
?>
<section class="careers-section">
    <div class="main-wrapper">
        <div class="top-section">
            <p class=" h-70 sub"><?php echo $cpc_sub_title; ?></p>
            <h4 class="h-120 main"><?php echo $cpc_title; ?></h4>
        </div>
        <div class="bottom-section">
            <?php
                foreach ($cpc_career_listing as $c_item) : 
                    $career       = $c_item["cpc_career_item"];
                    $career_id     = $career->ID;
                    $career_title = get_the_title($career_id);
                    $career_publish_date = get_the_date("d.m.Y",$career_id);
                    $career_single_image = get_the_post_thumbnail_url($career_id, 'large');
            ?>
            <div class="career-item">
                <div class="career-inner">
                    <div class="left-div">
                        <p class="c-date p-20"><span>Published on | </span><?php echo $career_publish_date; ?></p>
                        <h4 class="c-title h-50"><?php echo $career_title; ?></h4>
                    </div>
                    <div class="right-div">
                        <a href="#" class="p-18 link-c" target="_blank">View More</a>
                        <a href="#form-career" class="common-btn-trans btn-careers">
                            <div class="btn-wrap">
                                <div class="ar-icon">
                                    <svg class="left">
                                        <use xlink:href="#left"></use>
                                    </svg>
                                </div>
                                <p class="btn-text">Send Now</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php
                endforeach;
            ?>
        </div>
    </div>
</section>

<?php
	get_footer();
?>