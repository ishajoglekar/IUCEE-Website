<?php
/**
 * Cover Template Settings
 * Register Cover Template Settings section, settings and controls for Theme Customizer
 * @package Prologe
 */

/**
 * Adds post settings in the Customizer
 * @param object $wp_customize / Customizer Object.
 */
function prologe_lite_customize_register_cover_settings( $wp_customize ) {

	// Add Note forCover Template settings
 	$wp_customize->add_setting(	'prologe_lite_cover_note',	array(
			'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );	
	$wp_customize->add_control( new Prologe_Note_Control(
		$wp_customize, 'prologe_lite_cover_note', array(
			'label' => esc_html__( 'Cover Photo Settings', 'prologe-lite' ),
			'section' => 'prologe_lite_section_cover',
			'settings' => array(),
			)
	) );
	
// Add Settings and Controls for the Cover background attachment.
	$wp_customize->add_setting( 'prologe_lite_cover_fixed_background', array(
		'default'           => 'fixed',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'prologe_lite_sanitize_select',
	) );

	$wp_customize->add_control( 'prologe_lite_cover_fixed_background', array(
			'label'       => __( 'Background Image Style', 'prologe-lite' ),
			'description' => __( 'Fixed creates a parallax effect when the visitor scrolls, or you can have it scroll with the page.', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_cover',
		'settings' => 'prologe_lite_cover_fixed_background',
		'type'     => 'select',
		'choices'  => array(
			'fixed' => esc_html__( 'Fixed Parallax Effect', 'prologe-lite' ),
			'scroll' => esc_html__( 'Scroll with the Page', 'prologe-lite' ),
		),
	) );

	// Overlay Background Color 
	$wp_customize->add_setting( 'prologe_lite_cover_overlay_bg_color',	array(
			'default'           => '#000',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_cover_overlay_bg_color', array(
				'label'       => __( 'Overlay Background Color', 'prologe-lite' ),
				'description' => __( 'The color used for the overlay. Defaults to the accent color.', 'prologe-lite' ),
				'section'     => 'prologe_lite_section_cover',
		) ) );	
			
	// Overlay Color Opacity
	$wp_customize->add_setting( 'prologe_lite_cover_overlay_opacity', array(			
		'default' => 0.2,
		'sanitize_callback' => 'prologe_lite_opacity_sanitize',
		'transport' => 'postMessage'
		) );
		
	$wp_customize->add_control( new Prologe_Customize_Range_Control( $wp_customize, 'prologe_lite_cover_overlay_opacity', array(
			'label'       => __( 'Overlay Opacity', 'prologe-lite' ),
			'description' => __( 'Make sure that the contrast is high enough so that the text is readable.', 'prologe-lite' ),
            'section'     => 'prologe_lite_section_cover',
            'settings'    => 'prologe_lite_cover_overlay_opacity',
            'input_attrs' => array(
				'min'   => 0,
				'max'   => 1,
				'step'  => 0.05
            ),
        ) ) );

			
}
add_action( 'customize_register', 'prologe_lite_customize_register_cover_settings' );	