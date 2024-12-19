<?php 
     /* Template Name: Other Services */
?>
<?php 
	get_header(); 
?>

<?php get_template_part( 'template-parts/inner-banner', 'inner-banner' ); ?>

<section class="other-services-landing">
    <div class="main-wrapper">
        <div class="other-services-listing">
        <?php
        $args = [
            'post_type' => 'our_services',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
            'tax_query' => [
                [
                    'taxonomy' => 'service_categories', 
                    'field'    => 'slug',     
                    'terms'    => 'other-services', 
                ],
            ],
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); 
                $hcp_sevice_name    = get_field("hcp_sevice_name");
                $hos_service_content    = get_field("hos_service_content");
                $hcp_service_image    = get_field("hcp_service_image");
                $hcp_service_butttn_text    = get_field("hcp_service_butttn_text");
                $hcp_service_image_url=validateImage(228,197,$hcp_service_image);
                $hcp_sevice_url=get_the_permalink();
                $post_class = ($query->current_post % 2 == 0) ? 'odd' : 'even'; 
            ?>
                <div class="other-service-item <?php echo $post_class; ?>" id="post-<?php the_ID(); ?>">
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
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>
        </div>
    </div>
</section>

<?php
	get_footer();
?>