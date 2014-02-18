<?php
   /*
   Plugin Name: Unused Shortcodes
   Plugin URI: http://oizuled.com/wordpress-plugins/wordpress-unused-shortcodes
   Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=RSFSXVJG5E9HW
   Description: A plugin to display shortcodes that are not currently being used on a WordPress site.
   Version: 1.0
   Author: Scott DeLuzio
   Author URI: http://oizuled.com
   License: GPL2
   */
   
	/*  Copyright 2013  Scott DeLuzio  (email : scott (at) oizuled.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
	*/

/* Add language support */
function unused_sc_lang() {
	load_plugin_textdomain('php_info_translate', false, dirname(plugin_basename(__FILE__)) . '/lang/');
}
add_action('init', 'unused_sc_lang');

/* Settings Page */

// Hook for adding admin menus
add_action('admin_menu', 'unusedshortcodes');

// action function for above hook
function unusedshortcodes() {
    // Add a new submenu under Settings:
    add_options_page('Unused Shortcodes','Unused Shortcodes', 'manage_options', 'unusedshortcodes', 'unusedshortcodespage');
}

add_action('admin_init', 'register_unused_shortcodes_settings');

function activate_unused_shortcodes() {
	add_option('find_shortcode', 'Enter Shortcode Here');
}

function deactivate_unused_shortcodes() {
	delete_option('find_shortcode');
}

register_activation_hook(__FILE__, 'activate_unused_shortcodes');
register_deactivation_hook(__FILE__, 'deactivate_unused_shortcodes');

function register_unused_shortcodes_settings() {
	register_setting( 'unused_shortcodes_group', 'find_shortcode');
}

// Display the page content for the submenu
function unusedshortcodespage() {
	include(WP_PLUGIN_DIR.'/unused-shortcodes/options.php');  
}
	
/* Find each available shortcode in a page or post */
function find_shortcodes($atts) {
	ob_start();
	extract(shortcode_atts(array('find' => ''), $atts));

	$string = "[";
	$string .= $atts['find'];

		$args = array('s' => $string);
		$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) {
					echo '<strong>' . $string . ']</strong> ';
					echo _e('is currently in use in the following page(s)/post(s):', 'unused_sc_lang');
					echo '<ul>';
				while ( $the_query->have_posts() ) {
				$the_query->the_post(); ?>
				<li><a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a> | <?php edit_post_link(); ?></li>
				<?php
				}
					echo '</ul>';
			} else {
					echo _e('No posts found using the shortcode ', 'unused_sc_lang') . '<strong>' . $string . ']</strong>'; 
			}
	wp_reset_postdata();
	return ob_get_clean();
}
add_shortcode('unusedshortcodes', 'find_shortcodes');

?>