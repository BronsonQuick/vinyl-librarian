<?php
namespace Vinyl_Librarian\Posts_To_Posts;

function bootstrap() {
	add_action( 'init', __NAMESPACE__ . '\\connect_cpts' );
}

function connect_cpts() {
	p2p_register_connection_type( array(
		'name' => 'artists_to_albums',
		'from' => 'artist',
		'to'   => 'album',
	) );
}
