<?php
	/*
		Template Name: News Event Archive
	*/
	get_header();

    if (is_date()) {
        $year = get_query_var('year'); // Get the year
        $month = get_query_var('monthnum'); // Get the month number
    
        // Format the month number to display the month name
        $month_name = date_i18n('F', mktime(0, 0, 0, $month, 1));
    }
?>

<?php
    $your_query = new WP_Query( 'pagename=news-updates' );
    while ( $your_query->have_posts() ) : $your_query->the_post();
        $ib_tagline	= get_field("ib_tagline");
        $ib_main_title	= get_field("ib_main_title");
        $ib_content	= get_field("ib_content");
        $ib_desktop_image	= get_field("ib_desktop_image");
        $ib_desktop_image_url=validateImage(1920,830,$ib_desktop_image);
        $ib_mobile_image	= get_field("ib_mobile_image");
        $ib_mobile_image_url=validateImage(375,699,$ib_mobile_image);
        ?>
        <?php if($ib_desktop_image || $ib_mobile_image): ?>
    <section class="inner-bannner-tc">
        <div class="full-wrapper">
            <div class="image-container">
                <picture>
                    <source media="(min-width:992px)" srcset="<?php echo $ib_desktop_image_url; ?>">
                    <img src="<?php echo $ib_mobile_image_url; ?>" alt="" class="inner-banner-img">
                </picture>
            </div>
            <div class="banner-details">
                <div class="inner-wrapper">
                    <?php if($ib_tagline):?>
                        <h1 class="h-80 sub fade-up"><?php echo $ib_tagline; ?></h1>
                    <?php endif;?>
                    <?php if($ib_main_title):?>
                        <h2 class="h-120 fw-5 main fade-up">News Archive</h2>
                    <?php endif;?>
                    <?php if($ib_content):?>
                        <p class="banner-content h-18 fade-up"><?php echo $ib_content; ?></p>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
        <?php
    endwhile;
    wp_reset_postdata();
?>

<section class="event-card-listing">
    <div class="main-wrapper">
        <div class="single-inner">
            <div class="featured-section fade-up">
                <?php
                    $args = array(
                        'post_type' => 'news_events',
                        'posts_per_page' => 1,
                        'meta_key'      => 'ne_featured',
                        'meta_value'    => '1',
                    );
                $events = new WP_Query($args);

                if ($events->have_posts()) :
                    while ($events->have_posts()) : $events->the_post();
                        $event_single_url = get_the_permalink();
                        $ne_publish_date = get_the_date('j');
                        $ne_publish_month = get_the_date('M, Y');
                        $event_title = get_the_title();
                        $ne_read_time = get_field("ne_read_time");
                        $ne_featured_image = get_field("ne_featured_image");
                        $ne_featured_image_url = validateImage(546.782,364.118,$ne_featured_image);
                ?>
                <div class="events-section-f" id="post-<?php the_ID(); ?>">
                    <div class="event-inner">
                        <div class="left-div">
                            <div class="featured-btn">
                                <p class="p-20 featured">Featured</p>
                            </div>
                            <?php if ($ne_featured_image_url): ?>
                                <div class="featured-image">
                                    <img src="<?php echo esc_url($ne_featured_image_url); ?>" alt="<?php echo esc_attr($event_title); ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="news-date">
                            <p class="day h-80"><?php echo esc_html($ne_publish_date); ?></p>
                            <p class="year h-30"><?php echo esc_html($ne_publish_month); ?></p>
                        </div>
                        <div class="event-item-inner">
                            <p class="event-read p-20"><?php echo esc_html($ne_read_time); ?></p>
                            <a href="<?php echo esc_url($event_single_url); ?>">
                                <h2 class="event-title h-30"><?php echo esc_html($event_title); ?></h2>
                            </a>
                            <a href="<?php echo esc_url($event_single_url); ?>" class="common-btn-trans btn-news">
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
                    endwhile;
                endif;
                ?>
            </div>

            <div class="events-div">
                <div class="event-inner-wrapper" id="event-content">
                    <!-- AJAX content will load here -->
                </div>
            </div>
            <div class="pagination-wrap" id="pagination">
                <!-- AJAX Pagination Links Will Load Here -->
            </div>
        </div>
        <div class="filter-div">
            <div class="div-inner">
                <div class="search-articles fade-up">
                    <input type="text" id="search" placeholder="Search Article">
                </div>
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
                         <!-- </?php
                              $args = array(
                                'type'            => 'monthly',
                                'limit'           => '',
                                'format'          => 'html', 
                                'before'          => '',
                                'after'           => '',
                                'show_post_count' => false,
                                'echo'            => 1,
                                'order'           => 'DESC',
                                'post_type'         => 'news_events'
                            );
                            wp_get_archives( $args );
                         ?> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
	get_footer();
?>