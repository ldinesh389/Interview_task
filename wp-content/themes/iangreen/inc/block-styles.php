<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage IAN_Green
 * @since IAN-Green 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since IAN-Green 1.0
	 *
	 * @return void
	 */
	function IAN_Green_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'iangreen-columns-overlap',
				'label' => esc_html__( 'Overlap', 'iangreen' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'iangreen-border',
				'label' => esc_html__( 'Borders', 'iangreen' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'iangreen-border',
				'label' => esc_html__( 'Borders', 'iangreen' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'iangreen-border',
				'label' => esc_html__( 'Borders', 'iangreen' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'iangreen-image-frame',
				'label' => esc_html__( 'Frame', 'iangreen' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'iangreen-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'iangreen' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'iangreen-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'iangreen' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'iangreen-border',
				'label' => esc_html__( 'Borders', 'iangreen' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'iangreen-separator-thick',
				'label' => esc_html__( 'Thick', 'iangreen' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'iangreen-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'iangreen' ),
			)
		);
	}
	add_action( 'init', 'IAN_Green_register_block_styles' );
}
