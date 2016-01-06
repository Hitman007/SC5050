<?php

namespace SC5050;

function getAddRaffleFormHTML(){
die('line 6 getAddRaffleFormHTML');
$output = <<<formOutput
<form name = 'crg-add-raffle-form' id = 'crg-add-raffle-form' method = 'post' />

<label for = 'raffle-name' >Raffle Name</label>
<input type = 'text' id = 'raffle-name' />

<input type = 'submit' />

</form>
formOutput;

return $output;

}
