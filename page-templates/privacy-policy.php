<?php 
     /* Template Name: Privacy Policy */
?>

<?php 
	get_header(); 
?>

<?php get_template_part( 'template-parts/inner-banner', 'inner-banner' ); ?>

<?php 
	 $pp_content = get_the_content();
?>
<section class="privacy-policy-section">
    <div class="main-wrapper">
        <div class="p-content fade-up"><?php echo $pp_content; ?></div>
    </div>
</section>

<?php
	get_footer();
?>