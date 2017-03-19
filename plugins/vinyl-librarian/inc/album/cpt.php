<?php
namespace Vinyl_Librarian\Album\CPT;

function bootstrap() {
	add_action( 'init', __NAMESPACE__ . '\\register_cpt' );
}

function register_cpt() {
	register_extended_post_type(
		'album',
		[
			'supports' => [ 'title', 'thumbnail' ],
			'labels'   => [
				'featured_image'        => __( 'Album Cover',        'vinyl-librarian' ),
				'set_featured_image'    => __( 'Add Album Cover',    'vinyl-librarian' ),
				'remove_featured_image' => __( 'Delete Album Cover', 'vinyl-librarian' ),
				'use_featured_image'    => __( 'Use Album Cover',    'vinyl-librarian' ),
			],
			'menu_icon'    => 'dashicons-format-audio',
			'show_in_rest' => true,
		]
	);
}
