<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package FUKUSHI UNIVERSITY
 */


 /*
 * ----------------------------------------------------------------------------------------
 *  NEWS
 * ----------------------------------------------------------------------------------------
 */
function news_custom_posts() {
	$labels = array(
		'name'                => __( 'News' ),
		'singular_name'       => __( 'News'),
		'menu_name'           => __( 'News'),
		'parent_item_colon'   => __( 'Parent News'),
		'all_items'           => __( 'All News'),
		'view_item'           => __( 'View News'),
		'add_new_item'        => __( 'Add New News'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit News'),
		'update_item'         => __( 'Update News'),
		'search_items'        => __( 'Search News'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'news'),
		'description'         => __( 'Best News'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon' 		=> 'dashicons-networking',
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('news-tag', 'news-category'),
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'rewrite' => array(
			'slug' => 'news',
			'with_front' => false
		)
);
	register_post_type( 'news', $args );
}
add_action( 'init', 'news_custom_posts', 0 );