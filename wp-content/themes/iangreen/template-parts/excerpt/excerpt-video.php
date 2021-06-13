<?php
/**
 * Show the appropriate content for the Video post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage IAN_Green
 * @since IAN-Green 1.0
 */

$content = get_the_content();

if ( has_block( 'core/video', $content ) ) {
	IAN_Green_print_first_instance_of_block( 'core/video', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	IAN_Green_print_first_instance_of_block( 'core/embed', $content );
} else {
	IAN_Green_print_first_instance_of_block( 'core-embed/*', $content );
}

// Add the excerpt.
the_excerpt();
