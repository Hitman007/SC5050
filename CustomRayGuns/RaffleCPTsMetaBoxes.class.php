<?php

namespace SC5050;

//"Meta boxes" appear in the add new and edit post admin pages.

class RaffleCPTsMetaBoxes{
	
	public function __construct() {
		add_meta_box('SC5050-raffle-date-meta-box', __( 'Raffle Date' ),array( $this,'echoRaffleDateMetaBox'),'Raffle', 'side', 'high');
		add_meta_box('SC5050-manage-tickets-meta-box', __( 'Manage Tickets' ),array( $this,'echoManageTicketsMetaBox'),'Raffle', 'normal', 'high');
		add_meta_box('SC5050-add-tickets-meta-box', __('Add Tickets'), array( $this,'echoAddTicketsMetaBox'),'Raffle', 'side', 'high');
	}
	
	public function checkIfNewPost($output){
		$clickPublishOrSaveToActivate = __("Click Publish or Save Draft to activate this feature.");
		//Checks to see if it's an unsaved post:
		$fileName =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
		if ($fileName == "post-new.php"){$output = $clickPublishOrSaveToActivate;}
		return $output;
	}
	
	public function echoRaffleDateMetaBox(){
		//li18 strings:
			$raffleDate = __('Raffle Date');
			$raffleTime = __('Raffle Time');
		

		$dateString = "";
		$timeString = "";
		$crg_ID = "";
		if (isset($_GET['post'])){
			$crg_ID = $_GET['post'];
			$dateString = $this->returnDateFromDatabase($crg_ID);
			$timeString = $this->returnTimeFromDatabase($crg_ID);
		}
		wp_enqueue_script( 'metaBoxTimePicker', plugins_url('/SC5050/CustomRayGuns/metaBoxTimePicker.js'));
		wp_enqueue_style('metaBoxDateTimePickerStyle', 'http://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css');
		wp_enqueue_script('remoteTimePickerScript', 'http://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js');
		$unlocalizedRaffleDateTimeMetaBoxHTML = new unlocalizedRaffleDateTimeMetaBoxHTML;
		$output = $unlocalizedRaffleDateTimeMetaBoxHTML->ReturnUnlocalizedRaffleDateTimeMetaBoxHTML($raffleDate, $dateString, $crg_ID, $raffleTime, $timeString);
		$output = $this->checkIfNewPost($output);
		echo $output;
	}
	
	public function echoAddTicketsMetaBox(){
	
		//lnI8 strings:
		$addOneTicket = __('Add one ticket:');
		$addTickets = __('Add Tickets');
		$addTicketsRange = __('Add Tickets Range:');
		$clickPublishOrSaveToActivate = __("Click Publish or Save Draft to activate this feature.");
		$max = __('max');
		$min = __('min');
	
		$output = <<<formOutputHTML
<style>
	#crg-add-raffle-form-div{border-style: solid; max-width: 35%; padding: 5px;}
	.crg-add-raffle-form-inputs{float:right;}
	.crg-add-raffle-form-labels{float:left;}
	.crg-clear-fix{clear:both;width:100%;min-width:100%;}
</style>

<div id = "add-tickets-to-raffle-form-div">
	<div>
     
         <div class = 'crg-add-raffle-form-labels'>
            $addTicketsRange
         </div>
         <div class = 'crg-add-raffle-form-inputs'>
            <label for = 'SC5050-ticket-range-min'>$min</label>
            <input type = 'text' name = 'SC5050-ticket-range-min' id = 'SC5050-ticket-range-min' size = '5' />
            <label for = 'SC5050-ticket-range-max'>$max</label>
            <input type = 'text' name = 'SC5050-ticket-range-max' id = 'SC5050-ticket-range-max' size = '5' />
         </div>
         <div class = 'crg-clear-fix'>&nbsp;</div>
     
         <div class = 'crg-add-raffle-form-labels'>
            $addOneTicket
         </div>
         <div class = 'crg-add-raffle-form-inputs'>
            <label for = 'SC5050-ticket-one'>#</label>
            <input type = 'text' name = 'SC5050-ticket-one' id = 'SC5050-ticket-one' size = '5' />
         </div>
		 <div class = 'crg-clear-fix'>&nbsp;</div>
      </div><!-- END:#crg-add-raffle-form-revealed-area -->
</div><!-- #crg-add-raffle-form-div -->
formOutputHTML;
		$clickPublishOrSaveToActivate = __("Click Publish or Save Draft to activate this feature.");
		//Checks to see if it's an unsaved post:
		$fileName =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
		if ($fileName == "post-new.php"){$output = $clickPublishOrSaveToActivate;}
		echo $output;
		
	}

	public function echoManageTicketsMetaBox(){
		$clickPublishOrSaveToActivate = __("Click Publish or Save Draft to activate this feature.");
		
		$output = <<<formOutputHTML
THIS IS A METABOX
formOutputHTML;
		
		$fileName = realpath(dirname(__FILE__)) . "/manageTicketsMetaBoxDiv.html";
		//die($fileName);
		$output = file_get_contents($fileName);

	
		//Checks to see if it's an unsaved post:
		$fileName =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
		if ($fileName == "post-new.php"){$output = $clickPublishOrSaveToActivate;}
		echo $output;
		
	}
	
	public function returnDateFromDatabase($crg_ID){
		$dateString = "";
		$dateArray = get_post_meta($crg_ID, 'raffle_date');
		if (is_array($dateArray)){
			if(isset($dateArray[0])){
				$dateString = $dateArray[0];
			 }else{
				$dateString = "";
			}
		 }else{
			$dateString = $dateArray;
			die('158');
		}
		return $dateString;
	}
	
	public function returnTimeFromDatabase($crg_ID){
		$timeString = NULL;
		$timeArray = get_post_meta($crg_ID, 'raffle_time');
		if (is_array($timeArray)){
			if(isset($timeArray[0])){
				$timeString = $timeArray[0];
			}else{
				$timeString = "";
			}
		}else{
			$timeString = $timeArray;
		}
		return $timeString;
	}
	
}