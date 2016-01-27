<?php

namespace SC5050;

class OrderComingIn{}

class NextAvailableTicketNumber{}

class Raffle extends AbstractRaffle{
	
	public $ID = 7;
	
}

abstract class AbstractRaffle{
	public $ID;
	
	public $name;
	
	public $date;
	
	public $time;
	
	public $timezone;
	
	public $raffleTicketNumbers;
	
	public function get_ID(){
	
		return $this->ID;
	
	}
}