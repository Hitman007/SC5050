<?php

namespace SC5050;

//this class displays the content of the admin area
class AdminPageView{
	
	public function __construct() {
		add_menu_page( 'custom menu title', '50/50 Raffles', 'manage_options', 'raffle_page', array ($this, 'echoSC5050adminPage'), 'dashicons-tickets-alt', 6 );
	}
	
	public function echoSC5050adminPage(){
        	$output = "admin area";
$AddRaffleForm = new AddRaffleForm;
$output = $output . $AddRaffleForm->returnFormHTML();
        	$output = $output . $this->mothershipAdminArea();
		echo $output;
	}

	public function mothershipAdmimAreaHTML(){
		return 'MOTHERSHIP AREA';
	}
	
}
