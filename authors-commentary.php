<?php
/**
 * The plugin bootstrap file
 *
 * This file is responsible for starting the plugin using the main plugin
 * class file.
 *
 * @link              http://.tutsplus.com/tutorials/creating-maintainable-wordpress-meta-boxes--cms-22189
 * @since             0.1.0
 * @package           Author_Commentary
 *
 * @wordpress-plugin
 * Plugin Name:       Author Commentary
 * Plugin URI:        http://.tutsplus.com/tutorials/creating-maintainable-wordpress-meta-boxes--cms-22189
 * Description:       Allows authors to keep notes and track information and resources when drafting posts.
 * Version:           0.1.0
 * Author:            Tom McFarlin
 * Author URI:        http://tommcfarlin.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       author-commentary
 */
 
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}