<?php
/**
 * Customizer default options
 *
 * @package Themesmandu
 * @subpackage Ashar
 * @since Ashar 1.0.0
 * @return array An array of default values
 */

if ( ! function_exists( 'ashar_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function ashar_get_default_theme_options() {

		$defaults = array();

		// header defaults.
		$defaults['front_header_title'] = 'This is header titile';
		$defaults['header_button_text'] = 'Know More';
		$defaults['header_button_link'] = home_url();

		// footer defaukts.
		$defaults['footer_copyright_text'] = 'Copyright';

		// Pass through filter.
		$defaults = apply_filters( 'ashar_get_default_theme_options', $defaults );
		return $defaults;
	}

endif;
