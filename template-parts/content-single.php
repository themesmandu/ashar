<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ashar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php

		the_content( '' );


			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ashar' ),
					'after'  => '</div>',
				)
			);
			?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
