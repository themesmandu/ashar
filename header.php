<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ashar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Poppins:400,500,600&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header class="site-header">
			<nav id="site-navigation" class="main-navigation">
				<div class="container">
					<div class="navbar navbar-expand-lg top-navigation">
						<div class="site-branding">
							<?php
							if (has_custom_logo()) :
								the_custom_logo();
							else :
								the_custom_logo();
								$ashar_site_title            = get_bloginfo('name');
								$ashar_site_title_letter     = substr($ashar_site_title, -2, 1);
								$ashar_site_title_first_part = substr($ashar_site_title, 0, -2);
								$ashar_site_title_last_part  = substr($ashar_site_title, -1);
								if (is_front_page() && is_home()) :
									?>
									<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><strong><?php echo esc_html($ashar_site_title_first_part); ?></strong><span><?php echo esc_html($ashar_site_title_letter); ?></span><strong><?php echo esc_html($ashar_site_title_last_part); ?></strong></a></h1>
								<?php
							else :
								?>
									<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><strong><?php echo esc_html($ashar_site_title_first_part); ?></strong><span><?php echo esc_html($ashar_site_title_letter); ?></span><strong><?php echo esc_html($ashar_site_title_last_part); ?></strong></a></p>

								<?php
							endif;
							$ashar_description = get_bloginfo('description', 'display');
							if ($ashar_description || is_customize_preview()) :
								?>
									<p class="site-description"><?php echo $ashar_description; /* WPCS: xss ok. */ ?></p>
								<?php
							endif;
						endif;
						?>
						</div><!-- .site-branding -->

						<button id="menu" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmenus">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarmenus">
							<?php
							if (has_nav_menu('menu-1')) :
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'menu_class'     => 'navbar-nav',
									)
								);
							endif;
							?>

						</div>
					</div><!-- .navbar-wrap -->
				</div><!-- .container -->
			</nav><!-- #site-navigation -->
			<?php if (is_front_page()) : ?>
				<div id="image_slider">
					<div class="slider_images">
						<ul>
							<li>
								<img src="<?php echo get_template_directory_uri() . '/assets/images/one.jpg'; ?>" alt="one" title="one" />
								<div class="slide_caption">
									<span class="square-1"></span>
									<span class="square-2"></span>
									<span class="square-3"></span>
									<span class="square-4"></span>
									<span class="square-5"></span>
									<span class="square-6"></span>
									<span class="square-7"></span>
									<span class="square-8"></span>
									<span class="square-9"></span>
									<span class="square-10"></span>
									<span class="square-11"></span>
									<span class="square-12"></span>
									<span class="square-13"></span>
									<span class="square-14"></span>
									<span class="square-15"></span>
									<div class="slide_content">
										<h2>Bringing the best digital solutions for your brands</h2>
										<a href="#">Find out how </a>
									</div>
								</div>
							</li>

							<li>
								<img src="<?php echo get_template_directory_uri() . '/assets/images/two.jpg'; ?>" alt="two" title="two" />
								<div class="slide_caption">
									<span class="square-6"></span>
									<span class="square-7"></span>
									<span class="square-9"></span>
									<span class="square-11"></span>
									<span class="square-12"></span>
									<span class="square-14"></span>
									<span class="square-15"></span>
									<div class="slide_content">
										<h2>Bringing the best digital solutions for your brands</h2>
										<a href="#">Find out how </a>
									</div>
								</div>
							</li>

							<li>
								<img src="<?php echo get_template_directory_uri() . '/assets/images/three.jpg'; ?>" alt="three" title="three" />
								<div class="slide_caption">
									<span class="square-2"></span>
									<span class="square-4"></span>
									<span class="square-8"></span>
									<span class="square-11"></span>
									<span class="square-14"></span>
									<span class="square-15"></span>
									<span class="square-16"></span>
									<div class="slide_content">
										<h2>Aliquam tincidunt velit ut felis malesuada.</h2>
										<a href="#">Find out how </a>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="slider_indicator">
						<a href="#" title="one"><span>01</span></a>
						<a href="#" title="two"><span>02</span></a>
						<a href="#" title="three"><span>03</span></a>
					</div>
				</div>
			<?php endif; ?>
			<?php if (is_page() && !is_front_page()) : ?>
				<div class="page-content">
					<h1 class="header-title"><?php single_post_title(); ?></h1>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->

		<div id="content" class="site-content">