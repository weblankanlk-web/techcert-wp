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
    $your_query = new WP_Query( 'pagename=threat-bulletin' );
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
                        <h1 class="h-80 sub"><?php echo $ib_tagline; ?></h1>
                    <?php endif;?>
                    <?php if($ib_main_title):?>
                        <h2 class="h-120 fw-5 main">Threat Bulletin Categories</h2>
                    <?php endif;?>
                    <?php if($ib_content):?>
                        <p class="banner-content h-18"><?php echo $ib_content; ?></p>
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
                    <div class="latest-articles filter-item">
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
                    <div class="categories filter-item">
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