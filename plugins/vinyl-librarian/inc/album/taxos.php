<?php
namespace Vinyl_Librarian\Album\Taxos;

function bootstrap() {
	add_action( 'init', __NAMESPACE__ . '\\register_taxos' );
}

function register_taxos() {
	register_extended_taxonomy(
		'genre',
		'album',
		[
			'meta_box' => 'radio',
			'show_in_rest' => true,
		]
	);
}
