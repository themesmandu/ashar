<?php
/**
 * Core functions
 *
 * @package Ashar
 */

if ( ! function_exists( 'ashar_get_theme_option' ) ) :

	/**
	 * Get theme option.
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function ashar_theme_options( $key = '' ) {

		$default_options = ashar_get_default_theme_options();

		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array) get_theme_mod( 'ashar_theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;
	}

endif;


