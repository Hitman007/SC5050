<?php

namespace SC5050;


class CustomCPTsMetaBoxes{
	
	public function __construct() {
		add_meta_box('raffle-items', 'Add Tickets', array( $this,'echoAddRaffleMetaBoxes'),'Raffle', 'side', 'high');
	}
	
	public function echoAddRaffleMetaBoxes(){
		$CustomCPTsMetaBoxHTML = new CustomCPTsMetaBoxesHTML;
		$NewCPTFormHTML = $CustomCPTsMetaBoxHTML->getAddNewPTRNFormHTML();
		echo $NewCPTFormHTML;
	}
}
