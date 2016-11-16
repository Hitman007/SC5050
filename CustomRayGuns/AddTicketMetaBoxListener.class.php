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
		//die('createPRTNTicket');
		// Gather post data.

		$my_post = array(
 			'post_title'    => 'WTF',
   			'post_content'  => 'This is my post.',
    		'post_status'   => 'publish',
    		'post_author'   => 1,
			'post_type'		=> 'PRTNTickets',
		);
 
		// Insert the post into the database.
		wp_insert_post( $my_post );
	}

	public function createPRTNTicketRange($minPRTN, $maxPRTN){
		
	}

}