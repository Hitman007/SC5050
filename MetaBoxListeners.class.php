<?php

namespace SC5050;

class MetaBoxListeners{

	public function __construct(){
		add_action('init', array( $this, 'dateTimeListener' ));	
	}

	public function dateTimeListener(){
		if(isset($_POST['SC5050-raffle-date'])){
			//die('13');
			if(isset($_POST['post_ID'])){
				//die('15');
				$date = $_POST['SC5050-raffle-date'];
				//die($date);
				$post_id = $_POST['post_ID'];
				update_post_meta($post_id, 'raffle_date', $date);
			}
		}
	}
}