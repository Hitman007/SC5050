<?php

namespace SC5050;

class SC5050PluginInitializer{
	
	public function __construct() {
		require 'RequiredConstants.php';
		$this->setepTheCustomPostTypes();
		add_action('init',array($this, 'sanityCheckIsWooCommerceActivated'));

		
		//This script handles the plugin activation:
		require 'SC5050ActivationScript.php';
	}
	
	public function sanityCheckIsWooCommerceActivated(){
		//die('sanityCheckIsWooCommerceActivated');
		//To be done!
	}
	
	public function setepTheCustomPostTypes(){
		//Sets up the Custom Post Type with CRUD
		//$CPT_wCRUD = new CPT_wCRUD;
		//$CPT_wCRUD->createCPTs();
		//$CPT_wCRUD->listenForIncomingCPT_CRUD();
		
		$CPTsRaffle = new CPTsRaffle;
		$CPTsPRTNTicket = new CPTsPRTNTicket;
	}
}
	

