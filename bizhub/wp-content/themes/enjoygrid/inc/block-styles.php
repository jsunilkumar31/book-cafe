<?php
/**
 * Block Styles
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 */
	function enjoygrid_register_block_styles() {
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'enjoygrid-border',
				'label' => esc_html__( 'Borders', 'enjoygrid' ),
			)
		);
	}
	add_action( 'init', 'enjoygrid_register_block_styles' );
}
