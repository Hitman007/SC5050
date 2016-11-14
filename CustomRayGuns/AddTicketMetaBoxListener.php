<?php

namespace SC5050;

class AddTicketsMetaBoxListener{
	
	//This class should only be called once when the listen condition is met.
	
	public function __construct(){
		
		if (isset($_POST['SC5050-ticket-one'])){
			if(isset($_POST['SC5050-hidden-post-id'])){
				$PRTN = $_POST['SC5050-ticket-one'];
				$postID  = $_POST['SC5050-hidden-post-id'];
				$this->createPRTNTicket($postID, $PRTN);
			}
		}
	}
		
	public function registerError(){}
	
	public function createPRTNTicket($postID, $PRTN){
		die('createPRTNTicket');
		//check if the PRTN already exist
		//throw error
	}

	public function createPRTNTicketRange($minPRTN, $maxPRTN){
		
	}

}