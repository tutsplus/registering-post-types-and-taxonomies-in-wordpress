<?php
/**
 * Plugin Name: Tutsplus Register Post Types & Taxonomies
 * Plugin URI: 	http://tutsplus.com
 * Description: Registers the 'project' post type and the 'project type' taxonomy for that post type
 * Version: 	1.0
 * Author: 		Rachel McCollin
 * Author URI: 	http://rachelmccollin.co.uk
 *
 *
 */
/********************************************************************
	Register the 'project' post type
*********************************************************************/
function tutsplus_register_posttype() {
	
	$labels = array(
		'name' => __( 'Projects', 'tutsplus'),
		'singular_name' => __( 'Project', 'tutsplus'),
		'add_new' => __( 'New Project', 'tutsplus'),
		'add_new_item' => __( 'Add New Project', 'tutsplus'),
		'edit_item' => __( 'Edit Project', 'tutsplus'),
		'new_item' => __( 'New Project', 'tutsplus'),
		'view_item' => __( 'View Project', 'tutsplus'),
		'search_items' => __( 'Search Projects', 'tutsplus'),
		'not_found' => __( 'No Projects Found', 'tutsplus'),
		'not_found_in_trash' => __( 'No Projects Found in Trash', 'tutsplus'),
	);
	
	$args = array (
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'hierarchical' => false,
		'supports' => array (
			'title',
			'text-editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
			'page-attributes'
		)
	);
	
	register_post_type( 'project', $args );
}
//add_action( 'init', 'tutsplus_register_posttype' );

/********************************************************************
	Register the 'project type' taxonomy
*********************************************************************/
function tutsplus_register_taxonomy() {
	
	$labels = array (
		'name' = __( 'Project Types', 'tutsplus' ),
		'singular_name' = __( 'Project Type', 'tutsplus' ),
		'search_items' = __( 'Search Project Types', 'tutsplus' ),
		'all_items' = __( 'All Project Types', 'tutsplus' ),
		'edit_item' = __( 'Edit Project Type', 'tutsplus' ),
		'update_item' = __( 'Update Project Type', 'tutsplus' ),
		'add_new_item' = __( 'Add New Project Type', 'tutsplus' ),
		'new_item_name' = __( 'New Project Type Name', 'tutsplus' ),
		'menu_name' = __( 'Project Types', 'tutsplus' ),
	);
	
	$args = array (
		'labels' => $labels,
		'hierarchical' => true,
		'sort' => true,
		'show_admin_column' => true,
		'args' => array (
			'order_by' => 'term_order'
		)
	);
	
	register_taxonomy( 'project-type', 'project', $args );
	
}
//add_action( 'init', 'tutsplus_register_taxonomy' );
