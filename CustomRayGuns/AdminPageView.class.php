<?php

namespace SC5050;

//this class displays the content of the admin area
class AdminPageView{
	
	public function __construct() {
		add_menu_page( 'custom menu title', '50/50 Raffles', 'manage_options', 'raffle_page', array ($this, 'echoSC5050adminPage'), 'dashicons-tickets-alt', 6 );
	}
	
	//this functions returns the 'base' view for the admin page:
	public function returnFirstView(){
		$output = "<h1>50/50 Charitable Raffles</h1>";
		require('getAddNewCPTFormHTML.php');
		$CPT_wCRUD = new CPT_wCRUD;
		$output = $output . $CPT_wCRUD->returnCRUDformHTML();
		$output = $output . $this->getMothershipAdminAreaHTML();
		return $output;
	}
	
	//this functions returns the manage tickets view for the admin page:
	public function returnManageTicketsView(){
		return "managge tickets view";
	}
	
	
	public function echoSC5050adminPage(){
		$output = $this->returnFirstView();
		echo $output;
	}

	public function getMothershipAdminAreaHTML(){
		$Raffle = new Raffle();
		$ID = $Raffle->get_ID();
		return ($ID . 'MOTHERSHIP AREA AdminPageView.php');
	}
	
}
