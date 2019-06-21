<?php
/**
 * Header theme options
 *
 * @package Ashar
 */

$defaults = ashar_get_default_theme_options();
// Add header section.
$wp_customize->add_section(
	'ashar_header_section',
	array(
		'title'       => esc_html__( 'Header Section', 'ashar' ),
		'description' => esc_html__( 'Header Section options.', 'ashar' ),
		'panel'       => 'ashar_theme_options_panel',
	)
);

// setting header title  area.
$wp_customize->add_setting(
	'ashar_theme_options[front_header_title]',
	array(
		'default'           => $defaults['front_header_title'],
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ashar_theme_options[front_header_title]',
	array(
		'label'       => esc_html__( 'Front Page Header Title', 'ashar' ),
		'description' => esc_html__( 'This title will appear in front page in header section', 'ashar' ),
		'section'     => 'ashar_header_section',
		'type'        => 'text',
	)
);

// setting header buttion text.
$wp_customize->add_setting(
	'ashar_theme_options[header_button_text]',
	array(
		'default'           => $defaults['header_button_text'],
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ashar_theme_options[header_button_text]',
	array(
		'label'       => esc_html__( 'Header Button Text', 'ashar' ),
		'description' => esc_html__( 'This text will appear in front page in header section button text', 'ashar' ),
		'section'     => 'ashar_header_section',
		'type'        => 'text',
	)
);

// setting header buttion link.
$wp_customize->add_setting(
	'ashar_theme_options[header_button_link]',
	array(
		'default'           => $defaults['header_button_link'],
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	'ashar_theme_options[header_button_link]',
	array(
		'label'       => esc_html__( 'Header Button Link', 'ashar' ),
		'description' => esc_html__( 'This url is the link to the button in header', 'ashar' ),
		'section'     => 'ashar_header_section',
		'type'        => 'url',
	)
);




