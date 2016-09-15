<?php

namespace SC5050;

//die('line 7: getAddRaffleFormHTML.php is loaded.');

function getAddNewCPTFormHTML(){
	
	$output = <<<formOutputHTML

<script>
	jQuery(document).ready(function() {
		jQuery('#crg-add-raffle-form-add-clicker-div').click(function(){
			jQuery('#crg-add-raffle-form-add-clicker-div').hide();
			jQuery('#crg-add-raffle-form-revealed-area').slideDown('slow');
		});
	});
</script>

<style>
	#crg-add-raffle-form-div{border-style: solid; max-width: 35%; padding: 5px;}
	.crg-add-raffle-form-inputs{float:right;}
	.crg-add-raffle-form-labels{float:left;}
	.crg-clear-fix{clear:both;width:100%;min-width:100%;}
	#crg-add-raffle-form-revealed-area{display: none;}
</style>
<div id = "crg-add-raffle-form-div">
   <form name = 'crg-add-raffle-form' id = 'crg-add-raffle-form' method = 'post' />
      <div id = "crg-add-raffle-form-add-clicker-div">
         <a>Add Raffle</a>
      </div>
      <div = id = "crg-add-raffle-form-revealed-area">
         <div class = 'crg-add-raffle-form-labels'>
            <label for = 'raffle-name' >
            Raffle Name
            </label>
         </div>
         <!- end: .crg-add-raffle-form-labels -->
         <div class = 'crg-add-raffle-form-inputs'>
            <input type = 'text' id = 'raffle-name' name = 'raffle-name' />
         </div><!-- end: .crg-add-raffle-form-inputs -->
         <div class = 'crg-clear-fix'>&nbsp;</div>
         <div class = 'crg-add-raffle-form-labels'>
            <label for = 'raffle-date' >
            Raffle Date
            </label>
         </div>
         <!- end: .crg-add-raffle-form-labels -->
         <div class = 'crg-add-raffle-form-inputs'>
            <input type = 'date' id = 'raffle-date' name = 'raffle-date' />
         </div><!-- end: .crg-add-raffle-form-inputs -->
         <div class = 'crg-clear-fix'>&nbsp;</div>
         <div class = 'crg-add-raffle-form-labels'>
            <label for = 'raffle-time'>
            Raffle Time
            </label>
         </div><!- end: .crg-add-raffle-form-labels -->
         <div class = 'crg-add-raffle-form-inputs'>
            <input type = 'time' id = 'raffle-time' name = 'raffle-time' />
         </div><!-- end: .crg-add-raffle-form-inputs -->
         <div class = 'crg-clear-fix'>&nbsp;</div>
         <div class = 'crg-add-raffle-form-labels'>
            Add Tickets Range:
         </div>
         <div class = 'crg-add-raffle-form-inputs'>			
            <label for = 'SC5050-ticket-range-min'>mindsfasdf</label>
            <input type = 'text' name = 'SC5050-ticket-range-min' id = 'SC5050-ticket-range-max' size = '5' />
            <label for = 'SC5050-ticket-range-max'>max</label>
            <input type = 'text' name = 'SC5050-ticket-range-max' id = 'SC5050-ticket-range-max' size = '5' />
         </div>
         <div class = 'crg-clear-fix'>&nbsp;</div>
         
         <div class = 'crg-add-raffle-form-labels'>
            Add one ticket:
         </div>
         <div class = 'crg-add-raffle-form-inputs'>			
            <label for = 'SC5050-ticket-one'>#</label>
            <input type = 'text' name = 'SC5050-ticket-one' id = 'SC5050-ticket-one' size = '5' />
         </div>
		 <div class = 'crg-clear-fix'>&nbsp;</div>
		 <a>Manage Tickets</a>
		<div class = 'crg-clear-fix'>&nbsp;</div>
         <input type = 'submit' value = 'Submit' name = 'crg-raffle-crud-form-submit-button' />
      </div><!-- END:#crg-add-raffle-form-revealed-area -->
   </form>
</div><!-- #crg-add-raffle-form-div -->
formOutputHTML;

	return $output;
}
