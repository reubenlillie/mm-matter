<?php
/**
 * Defines MM Matter's custom post types
 *
 * This file contains functions to define the following custom post types:
 *
 * - 'front_matter' (hierarchical, like pages)
 *
 * @link https://github.com/reubenlillie/mm-matter/
 *
 * @package MM_Matter
 * @subpackage MM_Matter\admin
 * @since 0.1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Defines the 'front_matter' custom post type.
 *
 * Defines an array of arugments for a custom post type called 'front_matter'
 * that is hierarchical (like pages).
 *
 * @since 0.1.0
 *
 * @see register_post_type()
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 */
function action_mm_matter_register_front_matter_cpt() {

    $labels = array(
        'name'                  => _x( 'Front Matter', 'Post Type General Name', 'mm-matter' ),
        'singular_name'         => _x( 'Front Matter Item', 'Post Type Singular Name', 'mm-matter' ),
        'menu_name'             => __( 'Front Matter', 'mm-matter' ),
        'name_admin_bar'        => __( 'Front Matter', 'mm-matter' ),
        'archives'              => __( 'Front Matter Archives', 'mm-matter' ),
        'attributes'            => __( 'Front Matter Item Attributes', 'mm-matter' ),
        'parent_item_colon'     => __( '', 'mm-matter' ),
        'all_items'             => __( 'All Front Matter', 'mm-matter' ),
        'add_new_item'          => __( 'Add New Front Matter Item', 'mm-matter' ),
        'add_new'               => __( 'Add New', 'mm-matter' ),
        'new_item'              => __( 'New Front Matter Item', 'mm-matter' ),
        'edit_item'             => __( 'Edit Front Matter Item', 'mm-matter' ),
        'update_item'           => __( 'Update Front Matter Item', 'mm-matter' ),
        'view_item'             => __( 'View Front Matter Item', 'mm-matter' ),
        'view_items'            => __( 'View Front Matter', 'mm-matter' ),
        'search_items'          => __( 'Search Front Matter Item', 'mm-matter' ),
        'not_found'             => __( 'Not found', 'mm-matter' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'mm-matter' ),
        'featured_image'        => __( 'Featured Image', 'mm-matter' ),
        'set_featured_image'    => __( 'Set featured image', 'mm-matter' ),
        'remove_featured_image' => __( 'Remove featured image', 'mm-matter' ),
        'use_featured_image'    => __( 'Use as featured image', 'mm-matter' ),
        'insert_into_item'      => __( 'Insert into Front Matter Item', 'mm-matter' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Front Matter Item', 'mm-matter' ),
        'items_list'            => __( 'Front Matter Item list', 'mm-matter' ),
        'items_list_navigation' => __( 'Front Matter Item list navigation', 'mm-matter' ),
        'filter_items_list'     => __( 'Filter Front Matter Item list', 'mm-matter' ),
    ); // $labels

    $rewrites = array(
        'slug'                  => 'front_matter',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => false,
    ); // $rewrites

    $args = array(
        'label'                 => __( 'Front Matter Item', 'mm-matter' ),
        'labels'                => $labels,
        'supports'              => array(
                                        'title',
                                        'editor',
                                        'excerpt',
                                        'page-attributes',
                                        'post-formats',
                                        'revisions',
                                    ),
        'taxonomies'            => array(
                                        'section',
                                        'index_locator',
                                    ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 49, // above Paragraphs
        'menu_icon'             => 'dashicons-controls-skipback',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'show_in_rest'          => true,
        'can_export'            => true,
        'has_archive'           => 'front_matter',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'query_var'             => 'front_matter',
        'rewrite'               => $rewrites,
        'capability_type'       => 'page',
    ); // $args

    /**
     * Allow plugins and themes to override the default post type arguments.
     *
     * @since 0.1.0
     *
     * @see apply_filters()
     * @link https://developer.wordpress.org/reference/functions/apply_filters/
     * @link https://developer.wordpress.org/plugins/hooks/custom-hooks/
     * @link https://make.wordpress.org/docs/plugin-developer-handbook/hooks/creating-custom-hooks/
     */
    register_post_type(
        'front_matter',
        apply_filters( 'apply_to_action_mm_matter_register_front_matter_cpt_args', $args, $labels, $rewrites )
    );

} // action_mm_matter_register_front_matter_cpt()

/**
 * Defines the 'back_matter' custom post type.
 *
 * Defines an array of arugments for a custom post type called 'back_matter'
 * that is hierarchical (like pages).
 *
 * @since 0.1.0
 *
 * @see register_post_type()
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 */
function action_mm_matter_register_back_matter_cpt() {

    $labels = array(
        'name'                  => _x( 'Back Matter', 'Post Type General Name', 'mm-matter' ),
        'singular_name'         => _x( 'Back Matter Item', 'Post Type Singular Name', 'mm-matter' ),
        'menu_name'             => __( 'Back Matter', 'mm-matter' ),
        'name_admin_bar'        => __( 'Back Matter', 'mm-matter' ),
        'archives'              => __( 'Back Matter Archives', 'mm-matter' ),
        'attributes'            => __( 'Back Matter Item Attributes', 'mm-matter' ),
        'parent_item_colon'     => __( '', 'mm-matter' ),
        'all_items'             => __( 'All Back Matter', 'mm-matter' ),
        'add_new_item'          => __( 'Add New Back Matter Item', 'mm-matter' ),
        'add_new'               => __( 'Add New', 'mm-matter' ),
        'new_item'              => __( 'New Back Matter Item', 'mm-matter' ),
        'edit_item'             => __( 'Edit Back Matter Item', 'mm-matter' ),
        'update_item'           => __( 'Update Back Matter Item', 'mm-matter' ),
        'view_item'             => __( 'View Back Matter Item', 'mm-matter' ),
        'view_items'            => __( 'View Back Matter', 'mm-matter' ),
        'search_items'          => __( 'Search Back Matter Item', 'mm-matter' ),
        'not_found'             => __( 'Not found', 'mm-matter' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'mm-matter' ),
        'featured_image'        => __( 'Featured Image', 'mm-matter' ),
        'set_featured_image'    => __( 'Set featured image', 'mm-matter' ),
        'remove_featured_image' => __( 'Remove featured image', 'mm-matter' ),
        'use_featured_image'    => __( 'Use as featured image', 'mm-matter' ),
        'insert_into_item'      => __( 'Insert into Back Matter Item', 'mm-matter' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Back Matter Item', 'mm-matter' ),
        'items_list'            => __( 'Back Matter Item list', 'mm-matter' ),
        'items_list_navigation' => __( 'Back Matter Item list navigation', 'mm-matter' ),
        'filter_items_list'     => __( 'Filter Back Matter Item list', 'mm-matter' ),
    ); // $labels

    $rewrites = array(
        'slug'                  => 'back_matter',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => false,
    ); // $rewrites

    $args = array(
        'label'                 => __( 'Back Matter Item', 'mm-matter' ),
        'labels'                => $labels,
        'supports'              => array(
                                        'title',
                                        'editor',
                                        'excerpt',
                                        'page-attributes',
                                        'post-formats',
                                        'revisions',
                                    ),
        'taxonomies'            => array(
                                        'section',
                                        'index_locator',
                                    ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 51, // below Paragraphs
        'menu_icon'             => 'dashicons-controls-skipforward',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'show_in_rest'          => true,
        'can_export'            => true,
        'has_archive'           => 'back_matter',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'query_var'             => 'back_matter',
        'rewrite'               => $rewrites,
        'capability_type'       => 'page',
    ); // $args

    /**
     * Allow plugins and themes to override the default post type arguments.
     *
     * @since 0.1.0
     *
     * @see apply_filters()
     * @link https://developer.wordpress.org/reference/functions/apply_filters/
     * @link https://developer.wordpress.org/plugins/hooks/custom-hooks/
     * @link https://make.wordpress.org/docs/plugin-developer-handbook/hooks/creating-custom-hooks/
     */
    register_post_type(
        'back_matter',
        apply_filters( 'apply_to_action_mm_matter_register_back_matter_cpt_args', $args, $labels, $rewrites )
    );

} // action_mm_matter_register_back_matter_cpt()
