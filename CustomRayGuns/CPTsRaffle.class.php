<?php

namespace SC5050;

//This class creates the CPTs

class CPTsRaffle{
	
	public $pluginDirectory; 
	public function __construct() {
		$this->pluginDirectory = plugin_dir_url(dirname( __FILE__ ));
		add_action( 'init', array( $this, 'create_taxonomies' ) );
		add_action('init', array( $this, 'createRaffleCustomPostType' ) );
		add_action('add_meta_boxes', array( $this, 'addCustomCPTsMetaBoxes' ));
	}
	
	public function addCustomCPTsMetaBoxes(){
		$CustomCPTsMetaBoxes = new CustomCPTsMetaBoxes;
	}
	
	public function activate() {
		$this->create_taxonomies();
	}
	
	function create_taxonomies() {
		$Raffle_type_args = array( 
			'hierarchical' => true,  
			'labels' => array(
				'name'=> _x('Raffle Types', 'taxonomy general name' ),
				'singular_name' => _x('Raffle Type', 'taxonomy singular name'),
				'search_items' => __('Search Raffle Types'),
				'popular_items' => __('Popular Raffle Types'),
				'all_items' => __('All Raffle Types'),
				'edit_item' => __('Edit Raffle Type'),
				'edit_item' => __('Edit Raffle Type'),
				'update_item' => __('Update Raffle Type'),
				'add_new_item' => __('Add New Raffle Type'),
				'new_item_name' => __('New Raffle Type Name'),
				'separate_items_with_commas' => __('Seperate Raffle Types with Commas'),
				'add_or_remove_items' => __('Add or Remove Raffle Types'),
				'choose_from_most_used' => __('Choose from Most Used Raffle Types')
			),
			'query_var' => true,  
            		'rewrite' => array('slug' =>'Raffle-type')        
           	);
		register_taxonomy('Raffle-type', 'Raffle',$Raffle_type_args);
	}
	function createRaffleCustomPostType(){
		//$menu_icon = $this->pluginDirectory . "/assets/images/Raffle.gif";
		$labels = array(
			'name'                => _x( 'Raffles', 'Post Type General Name', 'crg_text_domain' ),
			'singular_name'       => _x( 'Raffle', 'Post Type Singular Name', 'crg_text_domain' ),
			'menu_name'           => __( 'Raffles', 'crg_text_domain' ),
			'parent_item_colon'   => __( 'Parent Raffle:', 'crg_text_domain' ),
			'all_items'           => __( 'All Raffles', 'crg_text_domain' ),
			'view_item'           => __( 'View Raffle', 'crg_text_domain' ),
			'add_new_item'        => __( 'Add New Raffle', 'crg_text_domain' ),
			'add_new'             => __( 'Add New', 'crg_text_domain' ),
			'edit_item'           => __( 'Edit Raffle', 'crg_text_domain' ),
			'update_item'         => __( 'Update Raffle', 'crg_text_domain' ),
			'search_items'        => __( 'Search Raffle', 'crg_text_domain' ),
			'not_found'           => __( 'Not found', 'crg_text_domain' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'crg_text_domain' ),
		);
		$args = array(
			'label'               => __( 'Raffle', 'crg_text_domain' ),
			'description'         => __( 'Raffles', 'crg_text_domain' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields'),
			'taxonomies'          => array( 'Raffle-type' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			//'menu_icon'           => $menu_icon,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		register_post_type('Raffle', $args);

		wp_insert_term( __('Wordpress'),'Raffle-type', array( 'description' => __('A link to a Wordpress ad'),'slug' => 'feature'));
	}
}
