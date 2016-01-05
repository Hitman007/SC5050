<?php

namespace SC5050;

function getAddRaffleFormHTML(){

$output = <<<formOutput
<form name = 'crg-add-raffle-form' id = 'crg-add-raffle-form' method = 'post' />

<label for = '' ></label>
<input type = 'text' />

</form>
formOutput;

return $output;

}
