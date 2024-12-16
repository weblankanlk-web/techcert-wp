<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
	<!-- Google Font Link Here -->

	<?php
		$favicon_icon		= get_field("favicon_icon","option");
		$favicon_icon_url	= validateImage(32,32,$favicon_icon);
	?>
	<link rel="icon" href="<?php echo $favicon_icon_url; ?>" type="image/x-icon"> 

	<link rel="stylesheet" href="<?php echo get_theme_file_uri()?>/assets/sass/style.css">
	<?php if(is_front_page()){?>
		<link rel="stylesheet" href="<?php echo get_theme_file_uri()?>/assets/sass/front-page.css">
	<?php } else{?>
		<link rel="stylesheet" href="<?php echo get_theme_file_uri()?>/assets/sass/inner-page.css">
	<?php } ?>

	<!-- CSS Plugins -->
		<link rel="stylesheet" href="<?php echo get_theme_file_uri()?>/assets/css/slick.css">
		<link rel="stylesheet" href="<?php echo get_theme_file_uri()?>/assets/css/slick-theme.css">
		<link rel="stylesheet" href="<?php echo get_theme_file_uri()?>/assets/css/fancybox.css">
	<!-- CSS Plugins -->	
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php 
	$main_logo		= get_field("main_logo","option");
	$main_logo_url	= validateImage(380,64,$main_logo);
?>
<header id="header" class="header">
	<div class="header-main">
		<div class="main-wrapper">
			<div class="header-inner">
				<div class="left">
					<a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
						<img src="<?php echo $main_logo_url; ?> " alt="" />
					</a>
				</div>
				<div class="mid d-hide-m">
					<div class="menu" id="navbar_main">
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'depth'           => 2,
								'menu_class'      => 'navbar-nav navbardropdown',
								'menu_id'         => 'primary',
							)
						); ?>
					</div>
				</div>
				<div class="right">
					<div class="btn-wrap d-hide-m" id="desktop-hum">
						<a href="" class="btn-item">Menu</a>
						<div class="message-icon">
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/hum-arr.png" alt="">
						</div>
					</div>
					<div class="mobile-btn d-hide-t" id="mobile-hum">
						<a href="" class="btn-item">Menu</a>
						<div class="message-icon">
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/hum-arr.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<nav id="navbar_main_desktop" class="offcanvas-d d-hide-m">
	<div class="header-inner">
		<div class="container-fluid">
			<div class="close-btn">
				<img class="close-menu" id="close-menu-desktop" src="<?php bloginfo('template_directory'); ?>/assets/images/header-mobile.png" alt="">
			</div>
			<div class="header-main-menu">
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'sub',
						'depth'           => 2,
						'menu_class'      => 'navbar-nav-desktop-sub navbardropdown-desktop-sub',
						'menu_id'         => 'sub'
					)
				); ?>
			</div>
		</div>
	</div>
</nav>

<nav id="navbar_main_mobile" class="offcanvas d-hide-t">
	<div class="header-inner">
		<div class="container-fluid">
			<div class="close-btn">
				<img class="close-menu" id="close-menu-mobile" src="<?php bloginfo('template_directory'); ?>/assets/images/header-mobile.png" alt="">
			</div>
			<div class="header-main-menu">
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'depth'           => 2,
						'menu_class'      => 'navbar-nav-mobile navbardropdown--mobile',
						'menu_id'         => 'primary'
					)
				); ?>
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'sub',
						'depth'           => 2,
						'menu_class'      => 'navbar-nav-mobile-sub navbardropdown-mobile-sub',
						'menu_id'         => 'sub'
					)
				); ?>
			</div>
		</div>
	</div>
</nav>

<?php if (is_front_page()){
	$hm_main_banner		= get_field("hm_main_banner","option"); 
	?>
	<section class="main-banner inner-banner">
	<?php if($hm_main_banner){ 
		?>
	<div class="main-slider-wrapper">	
		<div class="main-slider"> 
			<?php
					foreach($hm_main_banner as $banner_item){
						$hm_main_banner_mobile_image		= $banner_item["hm_main_banner_mobile_image"];
						$hm_main_banner_mobile_image_url	= validateImage(800,1024,$hm_main_banner_mobile_image);
						$hm_main_banner_tab_image			= $banner_item["hm_main_banner_tab_image"];
						$hm_main_banner_tab_image_url		= validateImage(800,1024,$hm_main_banner_tab_image);
						$hm_main_banner_desktop_image		= $banner_item["hm_main_banner_desktop_image"];
						$hm_main_banner_desktop_image_url	= validateImage(1920,1080,$hm_main_banner_desktop_image);
						$hm_banner_title_tag				= $banner_item["hm_banner_title_tag"];
						$hm_banner_title					= $banner_item["hm_banner_title"];
						$hm_banner_link_text				= $banner_item["hm_banner_link_text"];
						$hm_banner_link_url					= $banner_item["hm_banner_link_url"];
						$hm_banner_content					= $banner_item["hm_banner_content"];
			?>
				<div class="slider-item">
					<picture>
						<source media="(min-width:1200px)" srcset="<?php echo $hm_main_banner_desktop_image_url; ?>">
						<source media="(min-width:992px)" srcset="<?php echo $hm_main_banner_tab_image_url; ?>">
						<img src="<?php echo $hm_main_banner_mobile_image_url;?>" alt="">
					</picture>
					<div class="slider-content">
						<?php 
							if($hm_banner_title){
								echo "<".$hm_banner_title_tag.">".$hm_banner_title."</".$hm_banner_title_tag.">";	
							}	
						?>
						<?php if($hm_banner_content){?>
							<p class="slider-content-text"> 
								<?php echo $hm_banner_content; ?>	
							</p>
						<?php } ?>

						<?php if($hm_banner_link_url){?>
							<a href="<?php echo $hm_banner_link_url; ?>" class="slider-content-link">
								<?php echo $hm_banner_link_text;?>
							</a>
						<?php } ?>
					</div>
				</div>
			<?php
					}
			?>	

		</div>
	</div>
	<?php } ?>
</section>
 <?php 
 	}else{
?>
	<?php 
	$page_id			= get_the_id();
	$inner_main_banner	= get_field("inner_main_banner",$page_id);
	$has_breadcrum		= get_field("has_breadcrum",$page_id);
	if($inner_main_banner){  
	?>
	<section class="main-banner inner-banner">
	<div class="main-slider-wrapper">
		<?php
			foreach($inner_main_banner as $banner_item){
				$in_main_banner_mobile_image		= $banner_item["in_main_banner_mobile_image"];
				$in_main_banner_mobile_image_url	= validateImage(800,1024,$in_main_banner_mobile_image);
				$in_main_banner_tab_image			= $banner_item["in_main_banner_tab_image"];
				$in_main_banner_tab_image_url		= validateImage(800,1024,$in_main_banner_tab_image);
				$in_main_banner_desktop_image		= $banner_item["in_main_banner_desktop_image"];
				$in_main_banner_desktop_image_url	= validateImage(1920,1080,$in_main_banner_desktop_image);
				$in_banner_title_tag				= $banner_item["in_banner_title_tag"];
				$in_banner_title					= $banner_item["in_banner_title"];
				$in_banner_link_text				= $banner_item["in_banner_link_text"];
				$in_banner_link_url					= $banner_item["in_banner_link_url"];
		?>
			<div class="slider-item">
				<picture>
					<source media="(min-width:1200px)" srcset="<?php echo $in_main_banner_desktop_image_url; ?>">
					<source media="(min-width:992px)" srcset="<?php echo $in_main_banner_tab_image_url; ?>">
					<img src="<?php echo $in_main_banner_mobile_image_url;?>" alt="">
				</picture>
				<div class="slider-content">
					<?php 
						if($in_banner_title){
							echo "<".$in_banner_title_tag." class='banner-title'>".$in_banner_title."</".$in_banner_title_tag.">";	
						}	
					?>
					<?php if($in_banner_link_url){?>
						<a href="<?php echo $in_banner_link_url; ?>" class="slider-content-link">
							<?php echo $in_banner_link_text;?>
						</a>
					<?php } ?>   
				</div>
			</div>
		<?php 
			}
		?>	

		</div>
		<?php if($has_breadcrum=="1"){?>
			<div class="breadcrumb-wrapper">
				<div class="bredcrumbswrap">
					<?php echo the_breadcrumb(); ?>
				</div>
			</div>
		<?php } ?>
	</section>
	<?php } ?>	   

<?php 
	} 

?>