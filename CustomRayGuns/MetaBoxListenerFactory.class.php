<?php

namespace SC5050;

class MetaBoxListenersFactory{

	public function __construct(){
		if ($this->dateTimeListenerConditionalBoolean()){
			add_action('save_post', array( $this, 'listenToDateTime' ));
		}
		if ($this->addTicketsListenerConditionalBoolean()){
			add_action('save_post', array( $this, 'listenToAddTickets' ));
		}
	}

	public function listenToDateTime(){
		$ListenerDateTime = new ListenerDateTime;
	}
	
	public function listenToAddTickets(){
		//die('listenToAddTickets - 23');
		$AddTicketsMetaBoxListener = new AddTicketsMetaBoxListener;
	}

	public function dateTimeListenerConditionalBoolean(){
		if(isset($_POST['SC5050-raffle-date'])){
			if(isset($_POST['SC5050-hidden-post-id'])){
				return TRUE;
			}
		}else{
			return FALSE;
		}
	}
	public function addTicketsListenerConditionalBoolean(){
		$PASS = FALSE;
		if (isset($_POST['SC5050-ticket-range-min'])){
			$min = $_POST['SC5050-ticket-range-min'];
			if(is_numeric($min)){
				if (isset($_POST['SC5050-ticket-range-max'])){
					$max = $_POST['SC5050-ticket-range-max'];
					if(is_numeric($max)){
						if($max>$min){
							$PASS = TRUE;
						}
					}
				}
			}
		}

		if (isset($_POST['SC5050-ticket-one'])){
			$one = $_POST['SC5050-ticket-one'];
			if(is_numeric($one)){
				$PASS = TRUE;
			}
		}
		if ($PASS == TRUE){return TRUE;}else{return FALSE;}
	}
}