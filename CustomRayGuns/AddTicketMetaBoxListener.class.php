<?php

namespace SC5050;

class AddTicketsMetaBoxListener{
	
	public function __construct(){
		
		if (isset($_POST['SC5050-ticket-one'])){
			if(isset($_POST['SC5050-hidden-post-id'])){
				$PRTN = $_POST['SC5050-ticket-one'];
				$postID  = $_POST['SC5050-hidden-post-id'];
				$this->createPRTNTicket($postID, $PRTN);
			}
		}
	}
	
	public function createPRTNTicket($postID, $PRTN){
		$title = "Ticket $PRTN for raffle $postID";
		$content = "This ticket is probably gonna win!";
		$my_post = array(
			'post_type'		=> 'PRTNTicket',
 			'post_title'    => $title,
   			'post_content'  => $content,
    		'post_status'   => 'publish',
    		'post_author'   => 1,
		);
		wp_insert_post( $my_post );
	}

	public function createPRTNTicketRange($minPRTN, $maxPRTN){
		$postID  = $_POST['SC5050-hidden-post-id'];
		while($minPRTN < $maxPRTN){
			$this->createPRTNTicket($postID, $minPRTN);
			$minPRTN++;
		}
	}
}