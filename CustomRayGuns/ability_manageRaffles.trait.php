<?php

namespace SC5050;

trait ability_manageRaffles{

	public function manageRaffles(){
		//die('manageRaffles);
		//$ManageTicketsMetabox = new ManageTicketsMetabox;
		
		//This should always be instantiated
		$MetaBoxListenersFactory = new MetaBoxListenersFactory;
		
		add_action('add_meta_boxes', 'SC5050\buildCustomCPTsMetaBoxes' );
		//Add custom meta boxes to CPTs:
		function buildCustomCPTsMetaBoxes(){
			$RaffleCPTsMetaBoxes = new RaffleCPTsMetaBoxes;
		}
		

		
		add_action('admin_enqueue_scripts', 'SC5050\addDatePicker');
		
		function addDatePicker(){
			wp_enqueue_script('jquery-ui-datepicker');
			//wp_enqueue_script('jquery-ui');
			wp_enqueue_style('jquery-ui-css', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
		}

	}
}