<?php

namespace SC5050;

interface CPT_wCRUDtemplate{
	
	public function createCPTs();
	
	public function returnCRUDformHTML();
	
	public function listenForIncomingCPT_CRUD();
	
}

class CPT_wCRUD implements CPT_wCRUDtemplate{
	
	public function createCPTs(){
		//Setup Raffle Custom Post Types:
		$RaffleCPTs = new CPTsRaffle;
	}
	
	public function returnCRUDformHTML(){
		//this function retturns the specific Raffle CPT form
		require_once 'getAddNewPTRNFormHTML.php';
		return getAddNewCPTFormHTML();
	}
	
	public function listenForIncomingCPT_CRUD(){
		//This function checks that a CRUD is incomming
		if(isset($_POST['crg-raffle-crud-form-submit-button'])){
            add_action('init', array($this, 'doReceiveIncommingCPT_CRUDsubmission'));
		}
	}
	
	public function doReceiveIncommingCPT_CRUDsubmission(){
		//this function is called on init
		$IncommingCRUDsubmissionReceiver = new IncommingCRUDsubmissionReceiver;
	}
		
}