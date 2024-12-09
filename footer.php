<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
	
	
	
	<?php 
		$footer_logo			= get_field("footer_logo","option");
		$footer_logo_url		= validateImage(100,90,$footer_logo);
		$footer_description		= get_field("footer_description","option");
		$footer_link			= get_field("footer_link","option");
		$footer_link_text		= get_field("footer_link_text","option");
		$footer_copyright_text 	= get_field("footer_copyright_text","option");

		$sm_facebook	= get_field("sm_facebook","option");
		$sm_whatsapp	= get_field("sm_whatsapp","option");
		$sm_instagram	= get_field("sm_instagram","option");
		$sm_youtube		= get_field("sm_youtube","option");
		$sm_twitter		= get_field("sm_twitter","option");
		
		
	?>		 

	<footer>
		<div class="footer-inner">
			<!-- footer Main -->
			<div class="footer-main">
				<img src="<?php echo $footer_logo_url;?>" class="footer-logo">
				
				<?php if($footer_description){ ?>
					<p class="footer-des">
						<?php echo $footer_description;?>
					</p>
				<?php } ?>
				
				<?php if($footer_link){?>
					<a href="<?php echo $footer_link; ?>">
						<?php echo $footer_link_text; ?>
					</a>
				<?php } ?>
			</div>
			<!-- footer Main -->

			<!-- footer Menu -->
			<div class="footer-menu">
				<?php
					wp_nav_menu( 
						array( 
							'theme_location' => ''
						) 
					); 
				?>
			</div>
			<!-- footer Menu -->
			<div class="footer-socail-media">
				<ul class="footer-social-media-list">
					<?php if($sm_facebook){?>
						<li>
							<a href="<?php echo $sm_facebook; ?>" class="footer-social-media-link">
								<svg class="fb">
									<use xlink:href="#fb"></use>
								</svg>
							</a>
						</li>
					<?php } ?>
					<?php if($sm_instagram){?>
						<li>
							<a href="<?php echo $sm_instagram; ?>" class="footer-social-media-link">
								<svg class="insta">
									<use xlink:href="#insta"></use>
								</svg>
							</a>
						</li>
					<?php } ?>

					<?php if($sm_youtube){?>
						<li>
							<a href="<?php echo $sm_youtube; ?>" class="footer-social-media-link">
								<svg class="youtube">
									<use xlink:href="#youtube"></use>
								</svg>
							</a>
						</li>
					<?php } ?>

					<?php if($sm_twitter){?>
						<li>
							<a href="<?php echo $sm_twitter; ?>" class="footer-social-media-link">
								<svg class="twitter">
									<use xlink:href="#twitter"></use>
								</svg>
							</a>
						</li>
					<?php } ?>

				</ul>
			</div>

		</div>
	</footer>
	<div class="bottom-footer">
		<div class="bottom-footer-inner">
			<?php echo $footer_copyright_text;?>
		</div>
	</div>

	  
<script src="<?php echo get_theme_file_uri() ?>/assets/js/script-library.js"></script>
<script src="<?php echo get_theme_file_uri() ?>/assets/js/custom.js"></script>
<?php	include dirname(__FILE__) . '/svg/svg-library.php';?>
<?php wp_footer(); ?>

</body>
</html>
