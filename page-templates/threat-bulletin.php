<?php 
     /* Template Name: Threat Bulletin */
?>

<?php 
	get_header(); 
?>

<?php get_template_part( 'template-parts/inner-banner', 'inner-banner' ); ?>

<section class="threat-bulletin-section">
    <div class="main-wrapper">
        <div class="threat-wrapper">
            <div class="threats-landing-slider">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'threat_bulletin',
                    'posts_per_page' => 3, 
                    'paged' => $paged,
                );
                $loop = new WP_Query($args);

                $total_pages = $loop->max_num_pages; 

                if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post();
                        $tb_title = get_the_title();
                        $tb_date = get_the_date("d F Y");
                        $tbi_sub_title=get_field("tbi_sub_title");
                        $tbi_link=get_the_permalink();
                        ?>
                        <button type="button" class="threat-item fade-up">
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
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No announcements found.</p>';
                endif;
                ?>
            </div>
           
            <div class="pagination-wrapper">
                <a href="<?php echo ($paged > 1) ? '?paged=' . ($paged - 1) : '#'; ?>" 
                   class="pagination-link prev-page <?php echo ($paged == 1) ? 'disabled' : ''; ?>">
                    <svg class="left-arrow">
                        <use xlink:href="#left-tb"></use>
                    </svg>
                </a>

                <div class="page-numbers">
                    <?php
                    if ($total_pages > 1) {
                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo '<a href="?paged=' . $i . '" class="page-number ' . ($paged == $i ? 'current-page' : '') . '">' . $i . '</a>';
                        }
                    }
                    ?>
                </div>
                <a href="<?php echo ($paged < $total_pages) ? '?paged=' . ($paged + 1) : '#'; ?>" 
                   class="pagination-link next-page <?php echo ($paged == $total_pages) ? 'disabled' : ''; ?>">
                    <svg class="right-arrow">
                        <use xlink:href="#right-tb"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="filter-div">
            <div class="div-inner">
                <!-- <div class="search-articles">
                    <input type="text" id="search" placeholder="Search Article">
                </div> -->
                <div class="filter-articles-div">
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
	get_footer();
?>