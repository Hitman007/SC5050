<?php

namespace SC5050;

class MetaBoxListeners{

	public function __construct(){
		if(isset($_POST['SC5050-raffle-date'])){
			//die('line 9');
			if(isset($_POST['SC5050-hidden-post-id'])){
					add_action('save_post', array( $this, 'dateTimeListener' ));
			}
	
		}
	}

	public function dateTimeListener(){
			$post_id = $_POST['SC5050-hidden-post-id'];
			$date = $_POST['SC5050-raffle-date'];
			$time = $_POST['SC5050-raffle-time'];
			//$x = $post_id . ' raffle_date ' . $date . "line 17"; die($x);
			if (is_array($date)){
				$dateString = $date[0];
			}else{
				$dateString = $date;
			}
			if (is_array($time)){
				$timeString = $date[0];
			}else{
				$timeString = $date;
			}
			

			update_post_meta($post_id, 'raffle_date', $dateString);
			update_post_meta($post_id, 'raffle_time', $timeString);			
	}
}