<?php

namespace SC5050;

class IncommingCRUDsubmissionReceiver{
	
	public function __construct(){
		if($this->isSubmissionNewRecord()){
			$this->createNewRecord();
		}
	}

	public function isSubmissionNewRecord(){
		if (!(isset($_POST['crg-raffle-crud-form-record-id']))){
			return TRUE;
		}
	}
	
	public function createNewRecord(){
		$new_post = array('post_title'    => $_POST['raffle-name'],
			'post_type'   => 'Raffle',
		);
		// Insert the post into the database, then redirect to editRecord for the meta data
		$post_id = wp_insert_post( $new_post );
		$post_id = strval($post_id);
		$this->editRecord($post_id);
	}
	
	public function editRecord($post_id){
		
		if (isset($_POST['raffle-date'])){
			add_post_meta($post_id, 'raffle-date', $_POST['raffle-date']);
		}
		if (isset($_POST['raffle-time'])){
			add_post_meta($post_id, 'raffle-time', $_POST['raffle-time']);
		}
		
	}

}