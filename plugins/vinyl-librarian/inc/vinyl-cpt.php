<?php
namespace Vinyl_Librarian\CPT;

function bootstrap() {
	add_action( 'init', __NAMESPACE__ . '\\register_vinyl_cpt' );
}

function register_vinyl_cpt() {
	register_extended_post_type( 'vinyl' );
}
