<?php


function project_post_type_register()
{
    // Register Custom Post Type


	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'zbt' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'zbt' ),
		'archives'              => __( 'Project Archives', 'zbt' ),
		'attributes'            => __( 'Project Attributes', 'zbt' ),
		'parent_item_colon'     => __( 'Parent Item:', 'zbt' ),
		'all_items'             => __( 'All Projects', 'zbt' ),
		'add_new_item'          => __( 'Add New Project', 'zbt' ),
		'add_new'				=> __( 'Add New Project', 'zbt'),
		'edit_item'             => __( 'Edit Project', 'zbt' ),
		'update_item'           => __( 'Update Project', 'zbt' ),
		'view_item'             => __( 'View Project', 'zbt' ),
		'view_items'            => __( 'View Projects', 'zbt' ),
		'search_items'          => __( 'Search Projects', 'zbt' ),
		'not_found'             => __( 'No Project Found', 'zbt' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'zbt' ),
		'featured_image'        => __( 'Project Featured Image', 'zbt' ),
		'set_featured_image'    => __( 'Set featured image', 'zbt' ),
		'remove_featured_image' => __( 'Remove featured image', 'zbt' ),
		'use_featured_image'    => __( 'Use as featured image', 'zbt' ),
		

	);
	$args = array(
		'label'                 => __( 'Project', 'zbt' ),
		'description'           => __( 'Project Description', 'zbt' ),
		'labels'                => $labels,
		'supports'              => array('title','editor','thumbnail','custom-fields'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
    register_post_type('projects', $args);

	$taxonomy_labels = array(
		'name'                       => _x( 'Project Type', 'Project Type', 'zbt' ),
		'singular_name'              => _x( 'Type', 'Project Types', 'zbt' ),
		'menu_name'                  => __( 'Project Type', 'zbt' ),
		'all_items'                  => __( 'All Project Types', 'zbt' ),
		'parent_item'                => __( 'Parent Item', 'zbt' ),
		'parent_item_colon'          => __( 'Parent Item:', 'zbt' ),
		'new_item_name'              => __( 'New Project Type', 'zbt' ),
		'add_new_item'               => __( 'Add New Project Type', 'zbt' ),
		'edit_item'                  => __( 'Edit Project Type', 'zbt' ),
		'update_item'                => __( 'Update Project Type', 'zbt' ),
		'view_item'                  => __( 'View Project Type', 'zbt' ),
		'add_or_remove_items'        => __( 'Add or remove Project Types', 'zbt' ),
	);


	$taxonomy_args = array(
		'labels'                     => $taxonomy_labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest' => true,
	);

	register_taxonomy('project_type', ['projects'], $taxonomy_args);
}

add_action('init', 'project_post_type_register');
