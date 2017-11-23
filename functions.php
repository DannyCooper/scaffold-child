<?php
/**
 * Scaffold child theme functions and definitions
 *
 * @package    scaffold-child
 * @copyright  Copyright (c) 2017, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Enqueue parent and child styles using the parent stylesheet as a dependency.
 * This ensures the parent stylesheet will be loaded before the child stylesheet.
 */
function scaffold_child_enqueue_styles() {

	$parent_style = 'scaffold-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( 'scaffold-child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );

}
add_action( 'wp_enqueue_scripts', 'scaffold_child_enqueue_styles' );
