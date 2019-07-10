<?php
/**
 * Plugin Name:       Gutenberg Character Map
 * Description:       Insert special characters within the Gutenberg editor.
 * Version:           1.0.0
 * Requires at least: 5.0.0
 * Tested up to:      5.2.0
 * Requires PHP:      5.6
 * Stable tag:        1.0.0
 * Author:            10up
 * Author URI:        http://10up.com
 * License:           MIT
 * GitHub Plugin URI: https://github.com/10up/gutenberg-special-characters
 *
 * @package character-map
 */
namespace GutenbergCharacterMap;

 /**
  * Enqueue the admin JavaScript assets.
  */
function gcm_block_enqueue_scripts() {

	wp_enqueue_script(
		'character-map',
		plugin_dir_url( __FILE__ ) . 'dist/gutenberg-character-map.js',
		array( 'wp-blocks', 'wp-i18n', 'wp-editor' ),
		'',
		true
	);
}
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\gcm_block_enqueue_scripts' );
