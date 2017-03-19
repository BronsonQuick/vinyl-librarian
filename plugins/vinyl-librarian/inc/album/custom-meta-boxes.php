<?php
namespace Vinyl_Librarian\Album\Custom_Meta_Boxes;

function bootstrap() {
	add_filter( 'cmb_meta_boxes', __NAMESPACE__ . '\\album_cmbs' );
	add_action( 'rest_api_init',  __NAMESPACE__ . '\\album_rest_data' );
}

function album_cmbs( $meta_boxes ) {
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

function album_rest_data() {
	register_rest_field( 'album',
		'year',
		array(
			'get_callback'    => __NAMESPACE__ . '\\get_year',
			'update_callback' => null,
			'schema'          => null,
		)
	);
	register_rest_field( 'album',
		'label',
		array(
			'get_callback'    => __NAMESPACE__ . '\\get_label',
			'update_callback' => null,
			'schema'          => null,
		)
	);
}

function get_year( $post, $field_name, $request ) {
	return get_post_meta( $post['id'], 'year', true );
}

function get_label( $post, $field_name, $request ) {
	return get_post_meta( $post['id'], 'label', true );
}
