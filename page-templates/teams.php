<?php 
     /* Template Name: Teams */
?>

<?php 
	get_header(); 
?>

<?php get_template_part( 'template-parts/inner-banner', 'inner-banner' ); ?>

<?php 
	$ttl_team_listing	= get_field("ttl_team_listing");
?>

<section class="team-listing-sec">
    <div class="main-wrapper">
        <?php
            foreach ($ttl_team_listing as $team_item) : 
                $ttl_alignment = $team_item["ttl_alignment"];
                $ttl_sub_title = $team_item["ttl_sub_title"];
                $ttl_title = $team_item["ttl_title"];
                $ttl_tagline = $team_item["ttl_tagline"];
                $ttl_content_listing = $team_item["ttl_content_listing"];
                if($ttl_alignment=="1"){
                    $ttl_left_alignment = "left";
                }
                else{
                    $ttl_left_alignment = "center";
                }
        ?>
        <div class="team-div">
            <div class="team-inner">
                <div class="top-section <?php echo $ttl_left_alignment; ?>">
                    <div class="deatil-div">
                        <h3 class="h-70 sub fade-up"><?php echo $ttl_sub_title; ?></h3>
                        <?php
                            if($ttl_tagline):
                        ?>
                            <p class="h-30 tagline-white fade-up tag-bod"><?php echo $ttl_tagline; ?></p>
                        <?php
                            endif;
                        ?>
                    </div>
                   <h4 class="h-120 main fade-up"><?php echo $ttl_title; ?></h4>
                </div>
                <div class="bottom-section">
                    <?php
                        foreach ($ttl_content_listing as $t_item) : 
                            $ttl_name = $t_item["ttl_name"];
                            $ttl_designation = $t_item["ttl_designation"];
                            $ttl_achivements = $t_item["ttl_achivements"];
                            $ttl_linkedin_url = $t_item["ttl_linkedin_url"];
                    ?>
                    <div class="content-div fade-up">
                        <div class="content-inner">
                            <h5 class="h-30 t-name"><?php echo $ttl_name; ?></h5>
                            <p class="p-18 t-des"><?php echo $ttl_designation; ?></p>
                            <div class="detail-inner">
                                <p class="p-16 t-ach"><?php echo $ttl_achivements; ?></p>
                                <a href="<?php echo $ttl_linkedin_url; ?>" target="_blank" >
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/linkedin1.png" alt="" class="t-img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
        <?php
            endforeach;
        ?>
    </div>
</section>


<?php
	get_footer();
?>