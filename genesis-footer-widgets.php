<?php 
/*
Plugin Name: Genesis Footer Widgets
Plugin URI: http://www.oik-plugins.com/oik-plugins/genesis-footer-widgets
Description: Responsive Footer Widgets for the Genesis theme framework 
Version: 0.0.0
Author: bobbingwide
Author URI: http://www.oik-plugins.com/author/bobbingwide
Text Domain: genesis-footer-widgets
Domain Path: /languages/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

    Copyright 2016 Bobbing Wide (email : herb@bobbingwide.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 2,
    as published by the Free Software Foundation.

    You may NOT assume that you can use any other version of the GPL.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    The license for this software can likely be found here:
    http://www.gnu.org/licenses/gpl-2.0.html

*/

gfw_loaded();

/**
 * Function to invoke when genesis-footer-widgets is loaded
 *
 * If we're using the Genesis theme framework then we ask the theme how many footer-widgets are being used
 * We deliver the appropriate CSS based on this information.
 *
 *  
 
 genesis_settings_field filter 1],1
[hook genesis_seo_settings_field filter 1],1
[hook genesis_cpt_archive_settings_field_prefix filter 1],1
[hook genesis_pre_framework action ],1
[hook genesis_admin_init action ],1
[hook genesis_load_deprecated filter 1],1
[hook genesis_formatting_allowedtags filter 1],1
[hook genesis_initial_layouts filter 2],1
[hook genesis_setup action ],1
[hook genesis_markup_ filter 2],36
[hook genesis_register_sidebar_defaults filter 2],18
[hook genesis_register_widget_area_defaults filter 2

All of the above come before "init", so we can wait until then.
... or even until we're displaying the footer?
 * 
 */
function gfw_loaded() {
	add_action( "init", "gfw_init" );
	add_action( "wp_footer", "gfw_wp_footer" );
}

/**
 * Implement "init" action hook for genesis-footer-widgets
 */
function gfw_init() {
	$supports = gfw_footer_widgets();
}

/**
 * Return count of footer widgets required
 */
function gfw_footer_widgets() { 
	$supports = get_theme_support( 'genesis-footer-widgets' );
	$supports = bw_array_get( $supports, "0", $supports );
	if ( is_array( $supports ) ) {
		$supports = $supports[0];
	}
	bw_trace2( $supports, "genesis-footer-widgets supported", false, BW_TRACE_DEBUG );
	return( $supports );
}


/**
 * Enqueue the required genesis-footer-widget CSS
 
[hook wp_footer action ],1
[hook wp_footer;genesis_pre_get_option_footer_scripts filter 2],1
[hook wp_footer;genesis_options filter 2],1
[hook wp_footer;genesis_footer_scripts f

    wp_enqueue_style( 'oikCSS', WP_PLUGIN_URL . '/oik/oik.css' );
 */
function gfw_wp_footer() {
	$supports = gfw_footer_widgets(); 
	wp_enqueue_style( "gfw_footer", WP_PLUGIN_URL . "/genesis-footer-widgets/gfw-$supports.css" );

}










