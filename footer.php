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
		$footer_logo_url		= validateImage(380,84,$footer_logo);
		$footer_email		= get_field("footer_email","option");
		$footer_phone_number			= get_field("footer_phone_number","option");
		$footer_address		= get_field("footer_address","option");
		$footer_image		= get_field("footer_image","option");
		$footer_image_url		= validateImage(379,379,$footer_image);
		$footer_main_title		= get_field("footer_main_title","option");
		$footer_copyright_text 	= get_field("footer_copyright_text","option");
		$sm_facebook	= get_field("sm_facebook","option");
		$sm_whatsapp	= get_field("sm_whatsapp","option");
		$sm_instagram	= get_field("sm_instagram","option");
		$sm_linkedin		= get_field("sm_linkedin","option");
	?>		 
	<footer>
		<div class="footer-inner">
			<!-- footer Main -->
			<div class="footer-main">
				<div class="image-wrap">
					<img src="<?php echo $footer_logo_url;?>" class="footer-logo">
				</div>
				<div class="footer-menu">
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer',
							'depth'           => 2,
							'menu_class'      => 'footer-main-menu',
							'menu_id'         => 'footer'
						)
					); ?>
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer_sub',
							'depth'           => 2,
							'menu_class'      => 'footer-sub-menu',
							'menu_id'         => 'footer_sub'
						)
					); ?>
				</div>
				<video class="Video-item"  playsinline="" autoplay="" muted="" loop="" id="footerVideo"
					src="<?php bloginfo('template_directory'); ?>/assets/videos/footer-bg.mp4">
				</video>
			</div>
			<!-- footer Main -->

			<!-- footer Details -->
			 <div class="footer-details">
				<div class="top-section">
					<h3 class="h-140 main"><?php echo $footer_main_title;?></h3>
					<img src="<?php echo $footer_image_url;?>" alt="">
				</div>
				<div class="bottom-section">
					<div class="left-div">
						<div class="detail-item">
							<div class="detail-inner">
								<p class="p-18-l d-main fw-5">Email</p>
								<h5 class="p-18-l d-sub fw-8"><a href="mailto:<?php echo $footer_email;?>"><?php echo $footer_email;?></a></h5>
							</div>
						</div>
						<div class="detail-item">
							<div class="detail-inner">
								<p class="p-18-l d-main fw-5">Phone</p>
								<h5 class="p-18-l d-sub fw-8"><a href="tel:<?php echo $footer_phone_number;?>"><?php echo $footer_phone_number;?></a></h5>
							</div>
						</div>
					</div>
					<div class="right-div">
						<div class="detail-item">
							<div class="detail-inner">
								<p class="p-18-l d-main fw-5">Address</p>
								<h5 class="p-18-l d-sub fw-8"><?php echo $footer_address;?></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-socail-media">
					<ul class="footer-social-media-list">
						<?php if($sm_facebook){?>
							<li>
								<a href="<?php echo $sm_facebook; ?>" class="footer-social-media-link">
									<h6 class="fw-5 social">Facebook</h6>
								</a>
							</li>
						<?php } ?>
						<?php if($sm_instagram){?>
							<li>
								<a href="<?php echo $sm_instagram; ?>" class="footer-social-media-link">
									<h6 class="fw-5 social">instagram</h6>
								</a>
							</li>
						<?php } ?>

						<?php if($sm_linkedin){?>
							<li>
								<a href="<?php echo $sm_linkedin; ?>" class="footer-social-media-link">
									<h6 class="fw-5 social">Linkedin</h6>
								</a>
							</li>
						<?php } ?>

						<?php if($sm_whatsapp){?>
							<li>
								<a href="<?php echo $sm_whatsapp; ?>" class="footer-social-media-link">
									<h6 class="fw-5 social">whatsapp</h6>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			 </div>
			<!-- footer Details -->
		</div>
	</footer>
	<div class="bottom-footer">
		<div class="bottom-footer-inner">
			<p class="p-16 fw-6">Copyright @ <?php echo date("Y"); ?> - <span>TECHCERT</span> - All Rights Reserved.</p>
			<p class="p-16 fw-6">Concept Designing & Development By <a href="https://www.weblankan.com" target="_blank" rel="noopener noreferrer"><span class="fw-8" >web lankan</span></a></p>
		</div>
	</div>
	<a href="#" class="scrollup" id="backToTop">
		<div class="scrollup-btn">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,12a1,1,0,0,1-.71-.29L12,8.41,8.71,11.71a1,1,0,0,1-1.41-1.41l4-4a1,1,0,0,1,1.41,0l4,4A1,1,0,0,1,16,12Z"/><path d="M12,18a1,1,0,0,1-1-1V7a1,1,0,0,1,2,0V17A1,1,0,0,1,12,18Z" /></svg>
		</div>
	</a>
	  
<script src="<?php echo get_theme_file_uri() ?>/assets/js/script-library.js"></script>
<script src="<?php echo get_theme_file_uri() ?>/assets/js/custom.js"></script>
<?php	include dirname(__FILE__) . '/svg/svg-library.php';?>
<?php wp_footer(); ?>
<script>
	$(document).ready(function() {
    // When mobile menu button is clicked
    $('#mobile-hum').on('click', function(e) {
        e.preventDefault(); // Prevent default anchor behavior
        $('#navbar_main_mobile').addClass('show'); // Show the off-canvas menu
    });

    // When mobile close button is clicked
    $('#close-menu-mobile').on('click', function() {
        $('#navbar_main_mobile').removeClass('show'); // Hide the off-canvas menu
    });

    // When desktop menu button is clicked
    $('#desktop-hum').on('click', function(e) {
        e.preventDefault(); // Prevent default anchor behavior
        $('#navbar_main_desktop').addClass('show'); // Show the off-canvas menu
    });

    // When desktop close button is clicked
    $('#close-menu-desktop').on('click', function() {
        $('#navbar_main_desktop').removeClass('show'); // Hide the off-canvas menu
    });

    // Remove 'show' class from navbars when scrolling
    $(document).on("scroll", function() {
        $('#navbar_main_mobile, #navbar_main_desktop').removeClass('show');
    });
});


		document.addEventListener('DOMContentLoaded', function() {
		// Fade-up animation on scroll
		const fadeUpElements = document.querySelectorAll('.fade-up');
		
		const fadeInObserver = new IntersectionObserver(entries => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					entry.target.classList.add('fade-up-active');
					fadeInObserver.unobserve(entry.target);
				}
			});
		});
		
		fadeUpElements.forEach(element => {
			fadeInObserver.observe(element);
		});
	});

	document.addEventListener("DOMContentLoaded", function() {
		const video = document.querySelector('.Video-item');
		if (video) {
			video.play().catch(error => {
				console.error('Video autoplay blocked:', error);
			});
		}
		});

	// document.addEventListener('DOMContentLoaded', function() {
	// 	var body = document.body;
	// 	window.addEventListener('scroll', function() {
	// 		if (window.scrollY > 0) {
	// 			body.classList.add('scrolled');
	// 		} else {
	// 			body.classList.remove('scrolled');
	// 		}
	// 	});
	// });
	document.addEventListener("DOMContentLoaded", function() {
		var backToTopBtn = document.getElementById("backToTop");
		window.addEventListener("scroll", function() {
			if (window.scrollY > window.innerHeight) {
				backToTopBtn.classList.add("scrolled");
			} else {
				backToTopBtn.classList.remove("scrolled");
			}
		});
		backToTopBtn.addEventListener("click", function() {
			window.scrollTo({ top: 0, behavior: "smooth" });
		});
		});
		
</script>
</body>
</html>
