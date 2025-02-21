<?php 
	get_header(); 
?>

<?php get_template_part( 'template-parts/inner-banner', 'inner-banner' ); ?>

<?php 
	$neis_main_image	= get_field("neis_main_image");
    $neis_main_image_url=validateImage(1145,567,$neis_main_image);
    $neis_title = get_the_title();
    $neis_content_1 = get_field("neis_content_1");
    $neis_content_2 = get_field("neis_content_2");
    $ne_publish_date = get_the_date('j');
    $ne_publish_month = get_the_date('M, Y');
    $sm_facebook	= get_field("sm_facebook","option");
    $sm_whatsapp	= get_field("sm_whatsapp","option");
    $sm_instagram	= get_field("sm_instagram","option");
    $sm_linkedin		= get_field("sm_linkedin","option");
    $neis_image_slider = get_field("neis_image_slider");
?>
<section class="news-updates-inner">
    <div class="main-wrapper">
        <div class="detail-div">
            <div class="news-date">
                <p class="day h-80 fade-up"><?php echo esc_html($ne_publish_date); ?></p>
                <p class="year h-30 fade-up"><?php echo esc_html($ne_publish_month); ?></p>
            </div>
            <div class="image-wrapper fade-up">
                <img src="<?php echo $neis_main_image_url; ?>" alt="">
            </div>
            <h3 class="title h-70 fade-up"><?php echo $neis_title; ?></h3>
            <div class="tb-inner-content fade-up"><?php echo $neis_content_1; ?></div>
            <div class="image-slider-section">
                <div class="image-news-slider">
                <?php if($neis_image_slider):
						foreach($neis_image_slider as $image_item):
							$neis_slider_image        = $image_item["neis_slider_image"];
							$neis_slider_image_url=validateImage(570,392,$neis_slider_image);
					?>
                    <div class="image-item">
                        <div class="image-inner">
                            <img src="<?php echo $neis_slider_image_url; ?>" alt="">
                        </div>
                    </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
            <div class="tb-inner-content fade-up"><?php echo $neis_content_2; ?></div>
            <div class="share-div fade-up">
                <p class="p-18">SHARE THIS ARETICLE</p>
                <ul class="social-media-list">
                    <?php if($sm_facebook){?>
                        <li>
                            <a href="<?php echo $sm_facebook; ?>" class="social-media-link" target="_blank" rel="noopener">
                                <svg class="fb-t">
                                    <use xlink:href="#fb-t"></use>
                                </svg>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if($sm_linkedin){?>
                        <li>
                            <a href="<?php echo $sm_linkedin; ?>" class="social-media-link" target="_blank" rel="noopener">
                                <svg class="ln-t">
                                    <use xlink:href="#ln-t"></use>
                                </svg>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if($sm_instagram){?>
                        <li>
                            <a href="<?php echo $sm_instagram; ?>" class="social-media-link" target="_blank" rel="noopener">
                                <svg class="inst-t">
                                    <use xlink:href="#inst-t"></use>
                                </svg>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="filter-div">
            <div class="div-inner">
                <!-- <div class="search-articles fade-up">
                    <input type="text" id="search" placeholder="Search Article">
                </div> -->
                <div class="filter-articles-div">
                    <div class="latest-articles filter-item fade-up">
                        <h3 class="filter-title p-18 fw-7">Recent Articles</h3>
                        <ul>
                            <?php
                            $latest_articles = new WP_Query(array(
                                'post_type' => 'news_events',
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
                                'taxonomy' => 'news_categories',
                                'hide_empty' => false,
                                'exclude' => $excluded_id ? array($excluded_id) : array(),
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
                                'post_type'         => 'news_events'
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
	$vf_image	= get_field("vf_image");
	$vf_video_url	= get_field("vf_video_url");
	$vf_title	= get_field("vf_title");
	$vf_image_url=validateImage(1524,806,$vf_image);
	$vf_pdf_listing	= get_field("vf_pdf_listing");
?>
<?php 
    if ($vf_image) :
?>
<section class="news-pdf-video">
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
                    <h3 class="h-80-s main"><?php echo $vf_title; ?></h3>
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
                                <a href="<?php echo $vf_pdf_url; ?>" class="p-18 link-pdf" target="_blank" rel="noopener">Read More</a>
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
	$ner_title	= get_field("ner_title");
	$ner_tagline	= get_field("ner_tagline");
	$ner_button_text	= get_field("ner_button_text");
	$ner_recent_news_listing	= get_field("ner_recent_news_listing");
?>
<section class="recent-news-section">
    <div class="full-wrapper">
    <div class="top-section">
			<div class="left-div">
				<div class="title-section">
					<p class="h-30 tagline-white"><?php echo $ner_tagline; ?></p>
				</div>
				<h2 class="h-120 main"><?php echo $ner_title; ?></h2>
			</div>
			<a href="<?php echo esc_url(home_url('/news-updates')); ?>" class="common-btn-blue btn-news-more">
				<div class="btn-wrap">
					<div class="ar-icon">
						<svg class="left">
							<use xlink:href="#left"></use>
						</svg>
					</div>
					<p class="btn-text"><?php echo $ner_button_text; ?></p>
				</div>
			</a>
		</div>
        <div class="bottom-section">
            <div class="slider-wrapper">
                <div class="news-more-slider">
                    <?php
                        if ($ner_recent_news_listing) :
                            foreach($ner_recent_news_listing as $news_item):
                                $news       = $news_item["ner_recent_news_item"];
                                $news_id     = $news->ID;
                                $news_title = get_the_title($news_id);
                                $news_single_url = get_the_permalink($news_id);
                                $news_publish_date = get_the_date('j',$news_id);
                                $news_publish_month = get_the_date('M, Y',$news_id);
                                $ne_read_time = get_field("ne_read_time");
                                $event_single_image = get_the_post_thumbnail_url($news_id, 'large');
                    ?>
                         <div class="events-section" id="post-<?php the_ID(); ?>">
                            <div class="event-inner">
                                <a href="<?php echo esc_url($news_single_url); ?>">
                                    <?php if ($event_single_image): ?>
                                        <div class="featured-image">
                                            <img src="<?php echo $event_single_image; ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                </a>
                                <div class="news-date">
                                    <p class="day h-80"><?php echo esc_html($news_publish_date); ?></p>
                                    <p class="year h-30"><?php echo esc_html($news_publish_month); ?></p>
                                </div>
                                <div class="event-item-inner">
                                    <p class="event-read p-20"><?php echo esc_html($ne_read_time); ?></p>
                                    <a href="<?php echo esc_url($event_single_url); ?>">
                                        <h2 class="event-title h-30"><?php echo esc_html($news_title); ?></h2>
                                    </a>
                                    <a href="<?php echo $news_single_url; ?>" class="common-btn-trans btn-news">
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
                <div class="arrow-num-nw">
                    <div class="left-arrow-nw">
                        <svg class="arr-left">
                            <use xlink:href="#tc-left"></use>
                        </svg>
                    </div>
                    <div class="num-pack-nw">
                            01 /<span>06</span>
                    </div>
                    <div class="right-arrow-nw">
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