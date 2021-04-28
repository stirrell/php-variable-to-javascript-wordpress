<?php
/**
 * Plugin Name: PHP Variable to JavaScript Example
 * Description: An example of passing PHP variables to JavaScript in WordPress
 * Author:      Scott Tirrell
 * Author URI:  https://second-cup-of-coffee.com
 * Text Domain: scc
 * License:     GPL-3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 * Version:     1.0.0
 */

/**
 * Enqueue needed JavaScript.
 */
function php_to_js_enqueue() {
	$data_to_pass = array();
	$data_to_pass['example_variable'] = 'Hello, world!';

	wp_enqueue_script( 'php-to-js', plugins_url( 'js/php-variable-example.js', __FILE__ ), array( 'jquery' ), null, true );
	wp_localize_script( 'php-to-js', 'php_vars', $data_to_pass );
}
add_action( 'wp_enqueue_scripts', 'php_to_js_enqueue' );