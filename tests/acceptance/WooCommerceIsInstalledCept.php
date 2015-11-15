<?php

$I = new AcceptanceTester($scenario);
$output = shell_exec("sudo wp plugin is-installed Testable --allow-root");
//$output = shell_exec("ls");
throw new Exception($output);
