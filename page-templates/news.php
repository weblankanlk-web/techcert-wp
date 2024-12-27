<?php 
     /* Template Name: News */
?>

<?php 
	get_header(); 
?>

<?php get_template_part( 'template-parts/inner-banner', 'inner-banner' ); ?>

<section class="event-card-listing">
    <div class="main-wrapper">
        <div class="single-inner">
            <div class="featured-section">
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
                <div class="search-articles">
                    <input type="text" id="search" placeholder="Search Article">
                </div>
                <div class="filter-articles-div">
                    <div class="latest-articles filter-item">
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
                    <div class="categories filter-item">
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
                    <div class="archives filter-item">
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

