<?php

namespace SC5050;

class CustomCPTsMetaBoxes{
	
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
			$dateArray = get_post_meta($crg_ID, 'raffle_date');
			if (is_array($dateArray)){
				if(isset($dateArray[0])){
					$dateString = $dateArray[0];
				 }else{
				 	$dateString = "";
				 }
			}else{
				$dateString = $dateArray;
			}
			//$timeString = get_post_meta($crg_ID, 'raffle_time');
		}

		
		$output = "
<script>
	jQuery(document).ready(function(){
   		jQuery( '#SC5050-raffle-date' ).datepicker({
       		dateFormat: 'yy/mm/dd',
        	changeMonth: true,
        	changeYear: true,
        	yearRange: '-100:+0'
        });
   	 	jQuery('#SC5050-raffle-time').timepicker();
    
	});
</script>
<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css'>
<script src='http://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js'></script>
<div class = 'crg-add-raffle-form-labels'>

   $raffleDate

</div>
<!-- end: .crg-add-raffle-form-labels -->
<div class = 'crg-add-raffle-form-inputs'>
   <input type = 'text' id = 'SC5050-raffle-date' name = 'SC5050-raffle-date' class = 'SC5050-custom-date' value = '$dateString' />
</div>
<input type = 'hidden' id = 'SC5050-hidden-post-id' name = 'SC5050-hidden-post-id' value = '$crg_ID' />
<!-- end: .crg-add-raffle-form-inputs -->
<div class = 'crg-clear-fix'>&nbsp;</div>
<div class = 'crg-add-raffle-form-labels'>

   $raffleTime

</div>
<!-- end: .crg-add-raffle-form-labels -->
<div class = 'crg-add-raffle-form-inputs'>
   <input type = 'text' id = 'SC5050-raffle-time' name = 'SC5050-raffle-time' class = 'SC5050-raffle-time' value = '$timeString' />
</div>
<!-- end: .crg-add-raffle-form-inputs -->
<div class = 'crg-clear-fix'>&nbsp;</div>
";
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
            <label for = 'ticket-range-min'>$min</label>
            <input type = 'text' name = 'ticket-range-min' id = 'ticket-range-min' size = '5' />
            <label for = 'ticket-range-max'>$max</label>
            <input type = 'text' name = 'ticket-range-max' id = 'ticket-range-min' size = '5' />
         </div>
         <div class = 'crg-clear-fix'>&nbsp;</div>
     
         <div class = 'crg-add-raffle-form-labels'>
            $addOneTicket
         </div>
         <div class = 'crg-add-raffle-form-inputs'>
            <label for = 'ticket-one'>#</label>
            <input type = 'text' name = 'ticket-one' id = 'ticket-one' size = '5' />
         </div>
		 <div class = 'crg-clear-fix'>&nbsp;</div>
         <input type = 'submit' value = '$addTickets' name = 'crg-raffle-crud-form-submit-button' />
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
	
		//Checks to see if it's an unsaved post:
		$fileName =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
		if ($fileName == "post-new.php"){$output = $clickPublishOrSaveToActivate;}
		echo $output;
		
	}
}