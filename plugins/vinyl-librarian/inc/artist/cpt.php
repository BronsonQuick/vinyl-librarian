<?php
namespace Vinyl_Librarian\Artist\CPT;

function bootstrap() {
	add_action( 'init', __NAMESPACE__ . '\\register_cpt' );
}

function register_cpt() {
	register_extended_post_type(
		'artist',
		[
			'supports'  => [ 'title' ],
			'menu_icon' => 'dashicons-groups',
		]
	);
}
