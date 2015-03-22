<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package seniorshow
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function seniorshow_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'seniorshow_jetpack_setup' );
