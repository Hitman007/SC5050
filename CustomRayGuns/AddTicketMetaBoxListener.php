<?php

namespace SC5050;

class AddTicketsMetaBoxListener{
	
	//This class should only be called once when the listen condition is met.
	
	public function __construct(){
		$this->validateIncoming();
	}
	
	public function validateIncoming(){
		$ticketOne = $_POST['SC5050-ticket-one'];
		$tmr = $_POST[''];
		$to = $_POST[''];
		$tmr = (int)$x;
		if (is_int($x)){
			die('validoo');
		}else{
			die('invalid');
		}
		*/
	}
	
	public function registerError(){}
	
	public function createPRTNTicket($postID, $PRTN){
		
		//check if the PRTN already exist
		//throw error
	}

	public function createPRTNTicketRange($minPRTN, $maxPRTN){
		
	}

}