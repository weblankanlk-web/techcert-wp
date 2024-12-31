<?php 
     /* Template Name: Careers */
?>

<?php 
	get_header(); 
?>

<?php get_template_part( 'template-parts/inner-banner', 'inner-banner' ); ?>

<?php
    $cdcp_sub_title            = get_field("cdcp_sub_title"); 
    $cdcp_title           = get_field("cdcp_title");
    $cdcp_image           = get_field("cdcp_image");
    $cdcp_image_url=validateImage(1364,912,$cdcp_image);
    $cdcp_detail_listing           = get_field("cdcp_detail_listing");
?>
<section class="career-details">
    <div class="full-wrapper">
        <div class="top-section">
            <p class=" h-80 sub fade-up"><?php echo $cdcp_sub_title; ?></p>
            <h4 class="h-140 main fade-up"><?php echo $cdcp_title; ?></h4>
            <div class="image-wrap">
                <img src="<?php echo $cdcp_image_url; ?>" alt="">
            </div>
        </div>
        <div class="bottom-section">
            <?php
                foreach ($cdcp_detail_listing as $c_item) : 
                    $cdcp_detail_title       = $c_item["cdcp_detail_title"];
                    $cdcp_detail_content       = $c_item["cdcp_detail_content"];
                    $cdcp_detail_image       = $c_item["cdcp_detail_image"];
                    $cdcp_detail_image_url=validateImage(85,85,$cdcp_detail_image);
            ?>
                <div class="detail-item fade-up">
                    <div class="detail-inner">
                        <img src="<?php echo $cdcp_detail_image_url; ?>" alt="">
                        <div class="detail-sec">
                            <ul class="detail">
                                <li class="item h-30"><?php echo $cdcp_detail_title; ?></li>
                            </ul>
                            <p class="p-18 content"><?php echo $cdcp_detail_content; ?></p>
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
    $cpc_sub_title            = get_field("cpc_sub_title"); 
    $cpc_title           = get_field("cpc_title");
    $cpc_career_listing           = get_field("cpc_career_listing");
    $cpc_tagline           = get_field("cpc_tagline");
?>
<section class="careers-section">
    <div class="main-wrapper">
        <div class="top-section">
            <div class="title-section">
                <p class=" h-70 sub fade-up"><?php echo $cpc_sub_title; ?></p>
                <p class="h-30 tagline-white fade-up"><?php echo $cpc_tagline; ?></p>
            </div>
            <h4 class="h-120 main fade-up"><?php echo $cpc_title; ?></h4>
        </div>
        <div class="bottom-section">
            <?php
                foreach ($cpc_career_listing as $c_item) : 
                    $career       = $c_item["cpc_career_item"];
                    $career_id     = $career->ID;
                    $modal_id = 'modal-' .  $career_id;
                    $career_title = get_the_title($career_id);
                    $career_publish_date = get_the_date("d.m.Y",$career_id);
                    $career_single_image = get_the_post_thumbnail_url($career_id, 'large');
            ?>
            <div class="career-item fade-up" data-toggle="modal"
            data-target="#<?php echo esc_attr($modal_id); ?>" data-career_single_image="<?php echo $career_single_image; ?>" >
                <div class="career-inner">
                    <div class="left-div">
                        <p class="c-date p-20"><span>Published on | </span><?php echo $career_publish_date; ?></p>
                        <h4 class="c-title h-50"><?php echo $career_title; ?></h4>
                        <ul class="carrer-types">
                            <?php
                            $career_terms = get_the_terms($career_id, 'career_categories');
                            if (!empty($career_terms) && !is_wp_error($career_terms)) :
                                $career_terms = array_slice($career_terms, 0, 2); // Limit to 2 terms
                                foreach ($career_terms as $term) : ?>
                                    <li>
                                        <a href="<?php echo esc_url(get_term_link($term)); ?>" class="category-filter" data-category="<?php echo esc_attr($term->term_id); ?>">
                                            <?php echo esc_html($term->name); ?>
                                        </a>
                                    </li>
                                <?php endforeach;
                            else : ?>
                                <li>No career categories found.</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="right-div">
                        <a href="#" class="p-18 link-c">View More</a>
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

<section class="career-modal" id="main-career-modal">
    <div class="career-modal-content-box">
        <div class="career-modal-content">
            <div class="modal-close">
                <svg class="closeicon">
                    <use xlink:href="#closeicon"></use>
                </svg>
            </div> 
            <div class="image-container-model">
             <img src="" alt="" class="career-image">
            </div>
        </div>
    </div>
</section>

<?php
     $ccfp_title            = get_field("ccfp_title"); 
     $ccfp_content           = get_field("ccfp_content");
     $ccfp_image           = get_field("ccfp_image");
     $ccfp_career_form           = get_field("ccfp_career_form");
     $ccfp_image_url=validateImage(1085,862,$ccfp_image);
?>
<section class="career-form" id="form-career">
    <div class="full-wrapper">
        <div class="left-div">
            <div class="detail-div">
                <h3 class="h-140 main fade-up"><?php echo $ccfp_title; ?></h3>
                <p class="p-18 para fade-up"><?php echo $ccfp_content; ?></p>
            </div>
            <div class="image-wrap">
                <img src="<?php echo $ccfp_image_url; ?>" alt="">
            </div>
        </div>
        <div class="right-div">
            <div class="form-wrap fade-up">
                <?php 
                    if($ccfp_career_form){
                        echo $ccfp_career_form;
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php
	get_footer();
?>

