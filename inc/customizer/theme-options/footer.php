<?php
/**
 * Footer theme options
 *
 * @package Ashar
 */

$defaults = ashar_get_default_theme_options();
// Add footer section.
$wp_customize->add_section(
	'ashar_footer_section',
	array(
		'title'       => esc_html__( 'Footer Section', 'ashar' ),
		'description' => esc_html__( 'Footer Section options.', 'ashar' ),
		'panel'       => 'ashar_theme_options_panel',
	)
);


// setting footer copyright text.
$wp_customize->add_setting(
	'ashar_theme_options[footer_copyright_text]',
	array(
		'default'           => $defaults['footer_copyright_text'],
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ashar_theme_options[footer_copyright_text]',
	array(
		'label'       => esc_html__( 'Footer Copyright Text', 'ashar' ),
		'description' => esc_html__( 'This text will appear before &copy; on footer copyright section', 'ashar' ),
		'section'     => 'ashar_footer_section',
		'type'        => 'textarea',
	)
);
