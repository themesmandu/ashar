<?php
/**
 * Custom functions  for this theme
 *
 * @package Ashar
 */

if ( ! function_exists( 'ashar_title_split' ) ) :

	/**
	 * Display destination title on front page.
	 *
	 * @since 1.0.0
	 *
	 * @param string $ashar_title title to split.
	 */
	function ashar_title_split( $ashar_title ) {
		$ashar_title_split = explode( ' ', $ashar_title );
		$count             = count( $ashar_title_split );
		for ( $i = 0; $i < $count; $i++ ) {
			if ( ( $count - 1 ) === $i ) {
				echo wp_kses_post( '<span>' . $ashar_title_split[ $i ] . '</span>' );
			} else {
				echo wp_kses_post( $ashar_title_split[ $i ] . ' ' );
			}
		}

	}

endif;





if ( ! function_exists( 'ashar_related_post_query' ) ) :

	/**
	 * Generate the query for related posts based on taxonomies.
	 *
	 * @param int   $post_id post id of single post.
	 * @param int   $related_count post per page.
	 * @param array $args arguments.
	 *
	 * @since 1.0.0
	 */
	function ashar_related_post_query( $post_id, $related_count, $args = array() ) {
		$args = wp_parse_args(
			(array) $args,
			array(
				'orderby' => 'rand',
				'return'  => 'query', // Valid values are: 'query' (WP_Query object), 'array' (the arguments array).
			)
		);

		$related_args = array(
			'post_type'      => get_post_type( $post_id ),
			'posts_per_page' => $related_count,
			'post_status'    => 'publish',
			'post__not_in'   => array( $post_id ),
			'orderby'        => $args['orderby'],
			'tax_query'      => array(),
		);

		$post       = get_post( $post_id );
		$taxonomies = get_object_taxonomies( $post, 'names' );

		foreach ( $taxonomies as $taxonomy ) {
			$terms = get_the_terms( $post_id, $taxonomy );
			if ( empty( $terms ) ) {
				continue;
			}
			$term_list                   = wp_list_pluck( $terms, 'slug' );
			$related_args['tax_query'][] = array(
				'taxonomy' => $taxonomy,
				'field'    => 'slug',
				'terms'    => $term_list,
			);
		}

		if ( count( $related_args['tax_query'] ) > 1 ) {
			$related_args['tax_query']['relation'] = 'OR';
		}

		if ( 'query' === $args['return'] ) {
			return new WP_Query( $related_args );
		} else {
			return $related_args;
		}
	}
endif;
