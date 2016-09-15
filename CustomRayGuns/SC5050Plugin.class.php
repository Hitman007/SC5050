<?php

namespace SC5050;

class SC5050Plugin implements SC5050PluginInterface{
	
	public function __construct(){
		
		//This class controlls setting up the plugin for use:
		$SC5050PluginInitializer = new SC5050PluginInitializer;

	}
	
	use ability_sellTickets;
	use ability_manageRaffles;
	public function sellTicketsOnline(){}
	public function promoteTicketSales(){}
	
}

interface SC5050PluginInterface{
	
	public function sellTickets();
	public function manageRaffles();
	public function sellTicketsOnline();
	public function promoteTicketSales();

}