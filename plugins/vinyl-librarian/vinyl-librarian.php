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
require_once( __DIR__ . '/inc/vinyl-cpt.php' );

add_action( 'plugins_loaded', __NAMESPACE__ . '\\CPT\\bootstrap' );
