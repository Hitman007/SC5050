<?php

$I = new AcceptanceTester($scenario);
$output = shell_exec("wp plugin list");
//$output = shell_exec("ls");
//$output = "oops";
throw new Exception($output);
