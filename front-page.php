<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ashar
 */

get_header();
?>

<section class="section_one">
    <div class="container">
        <h2 class="section_title">We're always ready for challenges.</h2>
        <div class="row">
            <div class="col-lg-4 column">
                <figure>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/one.jpg'; ?>" />
                </figure>

                <div class="content">
                    <h4>Digital Marketing</h4>
                    <p>We conduct the marketing of products & services using latest digital technologies.</p>
                </div>
            </div>

            <div class="col-lg-4 column">
                <figure>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/two.jpg'; ?>" />
                </figure>

                <div class="content">
                    <h4>Digital Marketing</h4>
                    <p>Our approach is to focus on growing visibility in organic search engine results.</p>
                </div>
            </div>

            <div class="col-lg-4 column">
                <figure>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/three.jpg'; ?>" />
                </figure>

                <div class="content">
                    <h4>Digital Marketing</h4>
                    <p>We successfully implemented numerous UI/UX projects for both global & local clients.</p>
                </div>
            </div>

            <div class="col-lg-4 column">
                <figure>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/two.jpg'; ?>" />
                </figure>

                <div class="content">
                    <h4>Digital Marketing</h4>
                    <p>We successfully implemented numerous UI/UX projects for both global & local clients.</p>
                </div>
            </div>

            <div class="col-lg-4 column">
                <figure>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/three.jpg'; ?>" />
                </figure>

                <div class="content">
                    <h4>Digital Marketing</h4>
                    <p>We successfully implemented numerous UI/UX projects for both global & local clients.</p>
                </div>
            </div>

            <div class="col-lg-4 column">
                <figure>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/one.jpg'; ?>" />
                </figure>

                <div class="content">
                    <h4>Digital Marketing</h4>
                    <p>We successfully implemented numerous UI/UX projects for both global & local clients.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_two">
    
</section>

<?php
get_footer();
