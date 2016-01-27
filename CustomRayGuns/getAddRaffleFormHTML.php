<?php

namespace SC5050;

function getAddRaffleFormHTML(){
	
	//die('line 7: getAddRaffleFormHTML.php is loaded.');
	
	$output = <<<formOutputHTML

<script>
	jQuery(document).ready(function() {
		//alert('jQuery Working!');
	});
</script>

<style>
	#crg-add-raffle-form-div{border-style: solid; max-width: 35%; padding: 5px;}
	.crg-add-raffle-form-inputs{float:right;}
	.crg-add-raffle-form-labels{float:left;}
	.crg-clear-fix{clear:both;width:100%;min-width:100%;}
</style>
			
<div id = "crg-add-raffle-form-div">
	<form name = 'crg-add-raffle-form' id = 'crg-add-raffle-form' method = 'post' />

		<div class = 'crg-add-raffle-form-labels'>
			<label for = 'raffle-name' >
				Raffle Name
			</label>
		</div><!- end: .crg-add-raffle-form-labels -->
		<div class = 'crg-add-raffle-form-inputs'>
			<input type = 'text' id = 'raffle-name' name = 'raffle-name' />
		</div><!-- end: .crg-add-raffle-form-inputs -->
		<div class = 'crg-clear-fix'>&nbsp;</div>
	

		<div class = 'crg-add-raffle-form-labels'>
			<label for = 'raffle-date' >
				Raffle Date
			</label>
		</div><!- end: .crg-add-raffle-form-labels -->
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

	Add Tickets Range:
			
	<label for = 'ticket-range-min'>min</label>
	<input type = 'text' name = 'ticket-range-min' id = 'ticket-range-min' />
			
	<label for = 'ticket-range-max'>max</label>
	<input type = 'text' name = 'ticket-range-max' id = 'ticket-range-min' />

	<input type = 'submit' value = 'Submit' name = 'raffle-add-submit' />

	</form>
			
</div><!-- #crg-add-raffle-form-div -->
formOutputHTML;

	return $output;
}
