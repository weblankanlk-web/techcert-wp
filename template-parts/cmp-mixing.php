
<?php if( have_rows('components_listing') ): ?>
    <?php while( have_rows('components_listing') ): the_row(); ?>
    
        <?php if( get_row_layout() == 'cmp_welcome_section' ): ?>
            <?php get_template_part( 'template-parts/content/cmp','welcome-section'); ?> 

        <?php elseif ( get_row_layout() == 'cmp_image_with_content' ): ?>
            <?php get_template_part( 'template-parts/content/cmp','img-with-content'); ?>  

        <?php elseif ( get_row_layout() == 'cmp_accordion_section' ): ?>
            <?php get_template_part( 'template-parts/content/cmp','accordion'); ?> 

        <?php elseif ( get_row_layout() == 'cmp_image_card_slider' ): ?>
            <?php get_template_part( 'template-parts/content/cmp','image-content-card-slider'); ?>
            
        <?php elseif ( get_row_layout() == 'cmp_img_logo_slider' ): ?>
            <?php get_template_part( 'template-parts/content/cmp','logo-slider'); ?> 
            
        <?php elseif ( get_row_layout() == 'cmp_image_video_single_slider' ): ?>
            <?php get_template_part( 'template-parts/content/cmp','single-img-video-slider'); ?>
            
        <?php elseif ( get_row_layout() == 'cmp_our_team_listing' ): ?>
            <?php get_template_part( 'template-parts/content/cmp','team-listing'); ?>

        <?php elseif ( get_row_layout() == 'cmp_stickey_content_and_slider' ): ?>
            <?php get_template_part( 'template-parts/content/cmp','sticky-content-slider'); ?>
            
        <?php elseif ( get_row_layout() == 'cmp_contact_wrapper' ): ?>
            <?php get_template_part( 'template-parts/content/cmp','contact-form'); ?> 
            
        <?php elseif ( get_row_layout() == 'cmp_multiple_image' ): ?>
            <?php get_template_part( 'template-parts/content/cmp','multiple-img-content'); ?>

            
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>