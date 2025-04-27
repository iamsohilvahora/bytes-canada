<?php
/**
 * The sidebar containing the subscribe to newsletter detail
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bytes_canada
 */

if ( ! is_active_sidebar( 'guide-sidebar' ) ) {
	return;
}

dynamic_sidebar( 'guide-sidebar' );
