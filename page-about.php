<?php
/**
 * Template Name: Custom About Page
 *
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ashar
 */

get_header();
?>

<section class="section_about_one">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="content">
					<i class="far fa-eye"></i>
					<h3 class="sub_heading">Modern Design</h3>
					<p>Brook embraces a modern look with various enhanced pre-defined page elements.</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="content">
					<i class="far fa-eye"></i>
					<h3 class="sub_heading">Modern Design</h3>
					<p>Brook embraces a modern look with various enhanced pre-defined page elements.</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="content">
					<i class="far fa-eye"></i>
					<h3 class="sub_heading">Modern Design</h3>
					<p>Brook embraces a modern look with various enhanced pre-defined page elements.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section_about_two">
	<div class="container">
		<h2 class="section_title"><span>What we do</span>Fresh ideas & unique designs</h2>
		<div class="row">
			<div class="col-md-6 col-left">
				<figure>
					<img src="<?php echo get_template_directory_uri() . '/assets/images/about_sec_two.jpg'; ?>" />
				</figure>
			</div>

			<div class="col-md-6 col-right">
				<div class="column-content">
					<h3 class="sub_heading">Creative designs</h3>
					<p>Brook presents your services with flexible, convenient and multipurpose layouts. You can select your
						favorite layouts & elements for particular projects with unlimited customization possibilities.</p>
				</div>

				<div class="column-content">
					<h3 class="sub_heading">Creative designs</h3>
					<p>Brook presents your services with flexible, convenient and multipurpose layouts. You can select your
						favorite layouts & elements for particular projects with unlimited customization possibilities.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section_about_three">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<figure>
					<img src="<?php echo get_template_directory_uri() . '/assets/images/four.jpg'; ?>" />
				</figure>
			</div>

			<div class="col-md-6">
				<h2 class="section_title">What we do</h2>
				<ul>
					<li class="column-content active">
						<h3 class="sub_heading">Digital strategy</h3>
						<div class="paragraph">
							<p>Brook presents your services with flexible, convenient and multipurpose layouts. You can select your
								favorite layouts & elements for particular projects with unlimited customization possibilities.</p>
						</div>
					</li>

					<li class="column-content">
						<h3 class="sub_heading">Digital strategy</h3>
						<div class="paragraph">
							<p>Brook presents your services with flexible, convenient and multipurpose layouts. You can select your
								favorite layouts & elements for particular projects with unlimited customization possibilities.</p>
						</div>
					</li>

					<li class="column-content">
						<h3 class="sub_heading">Digital strategy</h3>
						<div class="paragraph">
							<p>Brook presents your services with flexible, convenient and multipurpose layouts. You can select your
								favorite layouts & elements for particular projects with unlimited customization possibilities.</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="section_about_four">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2 class="section_title">Features you will love</h2>
				<div class="row">
					<div class="col-md-6">
						<div class="col-row">
							<span><i class="fas fa-desktop"></i></span>
							<div class="col-content">
								<h3 class="sub_heading">Digital marketing</h3>
								<p>We conduct the marketing of products & services using latest digital technologies.</p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="col-row">
							<span><i class="fas fa-desktop"></i></span>
							<div class="col-content">
								<h3 class="sub_heading">Digital marketing</h3>
								<p>We conduct the marketing of products & services using latest digital technologies.</p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="col-row">
							<span><i class="fas fa-desktop"></i></span>
							<div class="col-content">
								<h3 class="sub_heading">Digital marketing</h3>
								<p>We conduct the marketing of products & services using latest digital technologies.</p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="col-row">
							<span><i class="fas fa-desktop"></i></span>
							<div class="col-content">
								<h3 class="sub_heading">Digital marketing</h3>
								<p>We conduct the marketing of products & services using latest digital technologies.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<figure>
					<img src="<?php echo get_template_directory_uri() . '/assets/images/mobile.png'; ?>" />
				</figure>
			</div>
		</div>
	</div>
</section>

<section class="section_three section_about_five">
	<div class="container">
		<div class="content">
			<h3 class="sub_heading">We're motivated by the desire to achieve.</h3>
			<a href="#" class="sec_btn">Find out more</a>
		</div>
</section>

<?php
get_footer();
