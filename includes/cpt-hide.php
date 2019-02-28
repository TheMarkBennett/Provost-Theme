<?php
//remove public query for person
function ucf_cpt_remove_public_query( $args, $post_type ) {
	// If not Products CPT, bail.
$change_args = array("person", "ucf_section", "ucf_spotlight", "reporting");

    if ( !in_array($post_type, $change_args)) {
        return $args;
    }

	
	// remove public querable
	$new_args = array(
		'publicly_queryable'  => false,
        'exclude_from_search' => true,
		
	);
	// Merge args together.
	return array_merge( $args, $new_args );
}
add_filter( 'register_post_type_args', 'ucf_cpt_remove_public_query', 10, 2 );