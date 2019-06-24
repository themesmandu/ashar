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

	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<?php if ( 'post' === get_post_type() ) : ?>
	<div class="entry-meta">
		<?php
				ashar_posted_on();
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( esc_html__( ', ', 'ashar' ) );
		if ( $categories_list ) {
			/* translators: 1: list of categories. */
			printf( '<span class="cat-links">' . esc_html__( ' %1$s', 'ashar' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}
		?>
	</div><!-- .entry-meta -->
	<?php endif; ?>

	<figure>
		<?php ashar_post_thumbnail(); ?>
	</figure>
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
			<?php
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'ashar' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tags: %1$s', 'ashar' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
			?>

</article><!-- #post-<?php the_ID(); ?> -->
