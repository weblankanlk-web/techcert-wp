<?php
   
   get_header();
   ?>

<?php get_template_part( 'template-parts/inner-banner', 'inner-banner' ); ?>

<?php 
	$tbi_sub_title	= get_field("tbi_sub_title");
	$tbi_main_image	= get_field("tbi_main_image");
    $tbi_main_image_url=validateImage(1145,567,$tbi_main_image);
    $tb_title = get_the_title();
    $tb_content = get_the_content();
    $tb_date = get_the_date("d F Y");
    $sm_facebook	= get_field("sm_facebook","option");
    $sm_whatsapp	= get_field("sm_whatsapp","option");
    $sm_instagram	= get_field("sm_instagram","option");
    $sm_linkedin		= get_field("sm_linkedin","option");
?>
<section class="threat-bulletin-inner">
    <div class="main-wrapper">
        <div class="detail-div">
            <div class="date-contain">
                <h6 class="sub h-30 fade-up"><?php echo $tbi_sub_title; ?></h6>
                <p class="tb-date p-25 fade-up"><b>PUBLISHED : </b><?php echo $tb_date; ?></p>
            </div>
            <?php if($tbi_main_image): ?>
                <div class="image-wrapper fade-up">
                    <img src="<?php echo $tbi_main_image_url; ?>" alt="">
                </div>
            <?php endif; ?>
            
            <h3 class="title h-70 fade-up"><?php echo $tb_title; ?></h3>
            <div class="share-div fade-up">
                <p class="p-18">SHARE THIS ARTICLE</p>
                <ul class="social-media-list">
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" class="social-media-link" target="_blank" rel="noopener noreferrer">
                                <svg class="fb-t">
                                    <use xlink:href="#fb-t"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" class="social-media-link" target="_blank" rel="noopener noreferrer">
                                <svg class="ln-t">
                                    <use xlink:href="#ln-t"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" class="social-media-link" target="_blank"  rel="noopener">
                                <svg class="inst-t">
                                    <use xlink:href="#inst-t"></use>
                                </svg>
                            </a>
                        </li>
                    <!-- </?php if($sm_whatsapp){?>
                        <li>
                            <a href="</?php echo $sm_whatsapp; ?>" class="social-media-link">
                                <svg class="tw-t">
                                    <use xlink:href="#tw-t"></use>
                                </svg>
                            </a>
                        </li>
                    </?php } ?> -->
                </ul>
            </div>
            <div class="tb-inner-content fade-up"><?php echo $tb_content; ?></div>
            
        </div>
        <div class="filter-div">
            <div class="div-inner">
                <!-- <div class="search-articles">
                    <input type="text" id="search" placeholder="Search Article">
                </div> -->
                <div class="filter-articles-div ">
                    <div class="latest-articles filter-item fade-up">
                        <h3 class="filter-title p-18 fw-7">Recent Articles</h3>
                        <ul>
                            <?php
                            $latest_articles = new WP_Query(array(
                                'post_type' => 'threat_bulletin',
                                'posts_per_page' => 5,
                                'orderby' => 'date',
                                'order' => 'DESC'
                            ));
                            if ($latest_articles->have_posts()) :
                                while ($latest_articles->have_posts()) : $latest_articles->the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                <?php endwhile;
                            else : ?>
                                <li>No recent articles found.</li>
                            <?php endif;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                    <div class="categories filter-item fade-up">
                        <h3 class="filter-title p-18 fw-7">Categories</h3>
                        <ul>
                            <?php
                            $featured_category = get_term_by('slug', 'featured', 'news_categories');
                            $excluded_id = $featured_category ? $featured_category->term_id : null;
                            $categories = get_terms(array(
                                'taxonomy' => 'threat_bulletin_categories',
                                'hide_empty' => false,
                            ));
                            if (!empty($categories) && !is_wp_error($categories)) :
                                foreach ($categories as $category) : 
                                     $term_link = get_term_link($category);?>
                                    <li>
                                        <a href="<?php echo esc_url($term_link); ?>" class="category-filter" data-category="<?php echo esc_attr($category->term_id); ?>">
                                            <?php echo esc_html($category->name); ?>
                                        </a>
                                    </li>
                                <?php endforeach;
                            else : ?>
                                <li>No categories found.</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="archives filter-item fade-up">
                        <h3 class="filter-title p-18 fw-7">Archive</h3>
                         <?php
                             $args = array(
                                'type'            => 'yearly',
                                'limit'           => '',
                                'format'          => 'html',
                                'before'          => '',
                                'after'           => '',
                                'show_post_count' => false,
                                'echo'            => 1,
                                'order'           => 'DESC',
                                'post_type'         => 'threat_bulletin'
                            );

                            wp_get_archives($args);
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
	$tbis_title	= get_field("tbis_title");
	$tbis_threat_listing	= get_field("tbis_threat_listing");
?>
<section class="more-threat-slider">
    <div class="full-wrapper">
        <div class="top-section">
            <h2 class="h-80 title"><?php echo $tbis_title; ?></h2>
        </div>
        <div class="bottom-section">
            <div class="slider-wrapper">
                <div class="threat-more-slider">
                    <?php
                        if ($tbis_threat_listing) :
                            foreach($tbis_threat_listing as $bulletin_item):
                                $bulletin        = $bulletin_item["tbis_threat_bulletin"];
                                $bulletin_id     = $bulletin->ID;
                                $tb_title = get_the_title($bulletin_id);
                                $tb_date = get_the_date("d F Y",$bulletin_id);
                                $tbi_sub_title=get_field("tbi_sub_title");
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
                <div class="arrow-num-bm">
                    <div class="left-arrow-bm">
                        <svg class="arr-left">
                            <use xlink:href="#tc-left"></use>
                        </svg>
                    </div>
                    <div class="num-pack-bm">
                    <b>01</b><span>06</span>
                    </div>
                    <div class="right-arrow-bm">
                        <svg class="arr-right">
                            <use xlink:href="#tc-right"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
   get_footer();
   
?>