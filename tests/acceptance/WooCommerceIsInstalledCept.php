<?php

$I = new AcceptanceTester($scenario);
$output = shell_exec("sudo wp plugin status Testable");
//$output = shell_exec("ls");
throw new Exception($output);
