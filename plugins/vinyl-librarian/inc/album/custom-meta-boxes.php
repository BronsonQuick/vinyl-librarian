<?php
namespace Vinyl_Librarian\Album\Custom_Meta_Boxes;

function bootstrap() {
	add_filter( 'cmb_meta_boxes', __NAMESPACE__ . '\\year_cmb' );
}

function year_cmb( $meta_boxes ) {
	$fields = [
		[
			'id'   => 'year',
			'type' => 'text_small',
			'name' => __( 'Year', 'vinyl-librarian' ),
			'desc' => __( 'The year the album was released.', 'vinyl-librarian' ),
		],
		[
			'id'   => 'label',
			'type' => 'text',
			'name' => __( 'Label', 'vinyl-librarian' ),
			'desc' => __( 'The label the album was released through.', 'vinyl-librarian' ),
		],
	];

	$meta_boxes[] = array(
		'title'    => __( 'Album Information', 'vinyl-librarian' ),
		'pages'    => 'album',
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => $fields,
	);

	return $meta_boxes;
}
