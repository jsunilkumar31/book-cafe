<?php
/**
 * EnjoyGrid Theme Customizer.
 *
 * @package enjoygrid
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function enjoygrid_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'enjoygrid_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function enjoygrid_customize_preview_js() {
	wp_enqueue_script( 'enjoygrid_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'enjoygrid_customize_preview_js' );

function enjoygrid_reset_mytheme_options() { 
    remove_theme_mods();
}
add_action( 'after_switch_theme', 'enjoygrid_reset_mytheme_options' );