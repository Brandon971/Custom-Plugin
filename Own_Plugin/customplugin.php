<?php 

/*
 * Plugin Name:       Brandons Plugin
 * Description:       This Plugin displays the current date and year.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Brandon Swinton
 */

 // Remove the admin bar from the front end
// add_filter( 'show_admin_bar', '__return_false' );

add_shortcode( 'date-today', function ($atts) {
	return date(get_option('date_format'));
} );


    add_action( 'admin_menu', 'wporg_options_page' );
    function wporg_options_page() {
        add_menu_page(
            'Brandons Plugin',
            'Brandons Plugin Options',
            'manage_options',
            'wporg',
            'wporg_options_page_html',
            'dashicons-admin-plugins',
            20
        );
    }
    