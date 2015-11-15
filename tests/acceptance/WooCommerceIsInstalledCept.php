<?php

$I = new AcceptanceTester($scenario);
$output = shell_exec("wp --allow-root");
//$output = shell_exec("ls");
throw new Exception($output);
