<?php

namespace SC5050;


class CustomCPTsMetaBoxes{
	
	public function __construct() {
		add_meta_box('SC5050-raffle-date', __( 'Raffle Date' ),array( $this,'echoRaffleDate'),'Raffle', 'side', 'high');
		add_meta_box('SC5050-manage-tickets', __( 'Manage Tickets' ),array( $this,'echoManageTicketsMetaBox'),'Raffle', 'normal', 'high');
		add_meta_box('SC5050-add-tickets', __('Add Tickets'), array( $this,'echoAddTicketsMetaBox'),'Raffle', 'side', 'high');
	}
	
	public function echoRaffleDate(){
		//li18 strings:
		$raffleDate = __('Raffle Date');
		$raffleTime = __('Raffle Time');
		$dateString = "";

		
		if (isset($_GET['post'])){
			$post_id = $_GET['post'];
			$date = get_post_meta($post_id, 'raffle_date');
			$dateString = $date[0];
		}
		echo "

<link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css' >


<script>
	jQuery(document).ready(function(){
   		jQuery( '.datepicker' ).datepicker({
       dateFormat: 'yy/mm/dd',
        changeMonth: true,
        changeYear: true,
        yearRange: '-100:+0'
        });
	});
</script>
<form>
<div class = 'crg-add-raffle-form-labels'>
   <label for = 'raffle-date' >
   $raffleDate
   </label>
</div>
<!- end: .crg-add-raffle-form-labels -->
<div class = 'crg-add-raffle-form-inputs'>
   <input type = 'text' id = 'SC5050-raffle-date' name = 'SC5050-raffle-date' class = 'datepicker' />
</div>
<!-- end: .crg-add-raffle-form-inputs -->
<div class = 'crg-clear-fix'>&nbsp;</div>
<div class = 'crg-add-raffle-form-labels'>
   <label for = 'raffle-time'>
   raffleTime
   </label>
</div>
<!- end: .crg-add-raffle-form-labels -->
<div class = 'crg-add-raffle-form-inputs'>
   <input type = 'text' id = 'SC5050-raffle-time' name = 'SC5050-raffle-time' />
</div>
<!-- end: .crg-add-raffle-form-inputs -->
<div class = 'crg-clear-fix'>&nbsp;</div>
</form>
";
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
   <form name = 'add-tickets-to-raffle-form' id = 'cadd-tickets-to-raffle-form' method = 'post' />
      <div = id = "">
     
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
		<div class = 'crg-clear-fix'>&nbsp;</div>
         <input type = 'submit' value = '$addTickets' name = 'crg-raffle-crud-form-submit-button' />
      </div><!-- END:#crg-add-raffle-form-revealed-area -->
   </form>
</div><!-- #crg-add-raffle-form-div -->
formOutputHTML;
	
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