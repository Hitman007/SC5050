<?php

namespace SC5050;

function getAddRaffleFormHTML(){
	
	//die('line 6 getAddRaffleFormHTML');
	
	$output = <<<formOutput
<form name = 'crg-add-raffle-form' id = 'crg-add-raffle-form' method = 'post' />

<label for = 'raffle-name' >Raffle Name</label>
<input type = 'text' id = 'raffle-name' />

<label for = 'raffle-date' >Raffle Date</label>
<input type = 'text' id = 'raffle-date' />

<label for = 'raffle-time'>Raffle Time</label>
<input type = 'text' id = 'raffle-time' />

<input type = 'submit' value 'Submit' name = 'raffle-add-submit' />

</form>

formOutput;

	return $output;
}
