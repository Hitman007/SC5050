<?php

namespace SC5050;

class AdminPageView{
	
	public function __construct() {
		add_menu_page( 'custom menu title', '50/50 Raffles', 'manage_options', 'custompage', array ($this, 'my_custom_menu_page'), 'dashicons-tickets-alt', 6 );
	}
	
	public function my_custom_menu_page(){
		echo "Admin Page YIPEEEEEE!!!!!!!!!!!!";
	}
	
}