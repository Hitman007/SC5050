<?php

namespace SC5050;

//this class displays the content of the admin area
class AdminPageView{
	
	public function __construct() {
		add_menu_page( 'custom menu title', '50/50 Raffles', 'manage_options', 'raffle_page', array ($this, 'echoSC5050adminPage'), 'dashicons-tickets-alt', 6 );
	}
	
	public function echoSC5050adminPage(){
		$output = "<h1>50/50 Charitable Raffles</h1>";
		require('getAddRaffleFormHTML.php');
		$output = $output . getAddRaffleFormHTML();
        $output = $output . $this->getMothershipAdminAreaHTML();
		echo $output;
	}

	public function getMothershipAdminAreaHTML(){
		$Raffle = new Raffle();
		$ID = $Raffle->get_ID();
		return ($ID . 'MOTHERSHIP AREA AdminPageView.php');
	}
	
}
