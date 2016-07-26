<?php

/**
 * Summary (no period for file headers)
 *
 * Description. (use period)
 *
 * 
 *
 * @package     Scratch
 * @author      Matt Rijk
 * @link        http://www.natickweb.com
 * @copyright   Copyright (c) 2015, Matt Rijk
 * @license     GPL-2.0+
 */

/** 
 *
 * 
 * 
 */
 
 
// Load child theme textdomain.
load_child_theme_textdomain('scratch');
/** 
 * Theme setup
 * 
 * Attach all of the site-wide functions to the correct hooks and filters. All 
 * the functions themselves are defined below this setup function.
 * 
 * @since 1.0.0 [<description>]
 * 
*/
add_action('genesis_setup', 'scratch_setup', 15);

function scratch_setup() {
    // Define theme constants
    define('CHILD_THEME_NAME', 'Scratch');
    define('CHILD_THEME_URL', 'http://github.com/mattrijk/scratch');
    define('CHILD_THEME_VERSION', '1.0.0');
    
    // Add HTML5 markup structure.
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );


    // Add viewport meta tag for mobile browsers.
    add_theme_support('genesis-responsive-viewport');
    
    // Add theme support for accessibilty.
    add_theme_support('genesis-accessibilty', array(
        '404-page', 
        'drop-down-menu',
        'headings',
        'rems',
        'scratch-form',
        'skip-links',
        
    ) );
    
    // Add theme support for footer widgets.
    add_theme_support('genesis-footer-widgets', 3);
    
    genesis_unregister_layout('content-sidebar-sidebar');
    genesis_unregister_layout('content-content-sidebar');
    genesis_unregister_layout('content-sidebar-content');
    
    
    // Unregister secondary sidebar.
    unregister_sidebar('sidebar-alt');
    
    // Add theme widget area.
    include_once(get_stylesheet_directory() . '/includes/widget-areas.php' );
    
}
// Add Google Font stylesheet.
add_action('wp_enqueue_scripts','scratch_enqueue_styles');
function scratch_enqueue_styles() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,400italic,700italic,700|Lobster' );
}
    