<?php
/*
Plugin Name: Vinyl Librarian
Plugin URI: https://bronsonquick.com.au/
Description: A plugin to manage vinyl collections.
Author: Bronson Quick
Version: 0.1
Author URI: https://bronsonquick.com.au/
 */
namespace Vinyl_Librarian;
require_once( __DIR__ . '/inc/album/cpt.php' );
require_once( __DIR__ . '/inc/album/taxos.php' );
require_once( __DIR__ . '/inc/artist/cpt.php' );
require_once( __DIR__ . '/inc/posts-to-posts.php' );

add_action( 'plugins_loaded', __NAMESPACE__ . '\\Album\\CPT\\bootstrap' );
add_action( 'plugins_loaded', __NAMESPACE__ . '\\Album\\Taxos\\bootstrap' );
add_action( 'plugins_loaded', __NAMESPACE__ . '\\Artist\\CPT\\bootstrap' );
add_action( 'plugins_loaded', __NAMESPACE__ . '\\Posts_To_Posts\\bootstrap' );
