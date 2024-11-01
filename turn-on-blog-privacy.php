<?php
/*
Plugin Name: Turn on blog privacy
Plugin URI: 
Description: Globally alters the site visibility settings to "Ask search engines not to index this site" when enabled. Upon deactivation it selects "Allow search engines to index this site" Multisite compatible
Version: 1.1.2
Author: Ben Lobaugh
Author URI: http://ben.lobaugh.net
Text Domain: turn-on-blog-privacy
*/


register_activation_hook( __FILE__,  'tobp_activate' );

register_deactivation_hook( __FILE__, 'tobp_deactivate' );


function tobp_activate() {
    
    if( is_multisite() ) {
        foreach( tobp_blog_list() AS $blog ) {
            update_blog_option( $blog->ID, 'blog_public', '0' );
        }
    } else {
        update_option( 'blog_public', '0' );
    }
}

function tobp_deactivate() {
    if( is_multisite() ) {
        foreach( tobp_blog_list() AS $blog ) {
            update_blog_option( $blog->ID, 'blog_public', '1' );
        }
    } else {
        update_option( 'blog_public', '1' );
    }
}

function tobp_blog_list() {
    global $wpdb;

    $blogs = $wpdb->get_results("
        SELECT blog_id
        FROM {$wpdb->blogs}
        WHERE site_id = '{$wpdb->siteid}'
        AND spam = '0'
        AND deleted = '0'
        AND archived = '0'
        AND blog_id != 1
    ");
    return $blogs;
//        $sites = array();
//        foreach ($blogs as $blog) {
//            $sites[] = $blog->blog_id;
//        }
//        return $sites;
}
