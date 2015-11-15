<?php

$I = new AcceptanceTester($scenario);
//$output = shell_exec("wp");
$output = shell_exec("ls");
throw new Exception($output);
