<?php

namespace SC5050;

class AddTicketsMetaBoxListener{
	
	//This class should only be called once when the listen condition is met.
	
	public function __construct(){
		$this->validateIncoming();
		die ("AddTicketsMetaBoxListener line 11");
	}
	
	public function validateIncoming(){
		$ticketOne = $_POST['SC5050-ticket-one'];
		//$tmr = $_POST[''];
		//$to = $_POST[''];
		//$tmr = (int)$ticketOne;
		//if (is_int($ticketOne)){
			die("$ticketOne validoo");
		}else{
			die("$ticketOne INVALID!");
		}
	}
	
	public function registerError(){}
	
	public function createPRTNTicket($postID, $PRTN){
		
		//check if the PRTN already exist
		//throw error
	}

	public function createPRTNTicketRange($minPRTN, $maxPRTN){
		
	}

}