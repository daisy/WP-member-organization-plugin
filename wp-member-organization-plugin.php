<?php

/*
Plugin Name: Daisy Member Organization Content
Plugin URI: http://www.daisy.org/
Description: Used by millions to make WP better.
Author: Bradford Knowton
Version: 1.17.0
Author URI: http://bradknowlton.com/
License: GPLv2 or later
GitHub Plugin URI: https://github.com/daisy/WP-member-organization-plugin
GitHub Branch:     master
*/

class WPMemberOrganizationPlugin {

	/*--------------------------------------------*
	 * Constants
	 *--------------------------------------------*/
	const name = 'WP Member Organization Plugin';
	const slug = 'wp_member_organization_plugin';

	/**
	 * Constructor
	 */
	function __construct() {
		//Hook up to the init action
		add_action( 'init', array( &$this, 'init_wp_member_organization_plugin' ) );
	}

	/**
	 * Runs when the plugin is initialized
	 */
	function init_wp_member_organization_plugin() {
		// Load JavaScript and stylesheets
		$this->register_scripts_and_styles();


		if ( is_admin() ) {
			//this will run when in the WordPress admin
		} else {
			//this will run when on the frontend
		}

		$labels = array(
			'name' => _x( 'Member Organizations', 'member_organization' ),
			'singular_name' => _x( 'Member Organization', 'member_organization' ),
			'add_new' => _x( 'Add New', 'member_organization' ),
			'add_new_item' => _x( 'Add New Member Organization', 'member_organization' ),
			'edit_item' => _x( 'Edit Member Organization', 'member_organization' ),
			'new_item' => _x( 'New Member Organization', 'member_organization' ),
			'view_item' => _x( 'View Member Organization', 'member_organization' ),
			'search_items' => _x( 'Search Member Organizations', 'member_organization' ),
			'not_found' => _x( 'No Member Organization found', 'member_organization' ),
			'not_found_in_trash' => _x( 'No Member Organization found in Trash', 'member_organization' ),
			'parent_item_colon' => _x( 'Parent Member Organization:', 'member_organization' ),
			'menu_name' => _x( 'Members', 'member_organization' ),
		);
		$args = array(
			'labels' => $labels,
			'hierarchical' => false,
			'supports' => array( 'title', 'author', 'revisions' ), // 'editor',  'custom-fields',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'menu_icon' => 'dashicons-networking'
		);
		register_post_type( 'member_organization', $args );

	}


	/**
	 * Registers and enqueues stylesheets for the administration panel and the
	 * public facing site.
	 */
	private function register_scripts_and_styles() {
		if ( is_admin() ) {

		} else {

		} // end if/else
	} // end register_scripts_and_styles

} // end class

new WPMemberOrganizationPlugin();