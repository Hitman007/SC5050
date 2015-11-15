<?php

$I = new AcceptanceTester($scenario);
$output = shell_exec("sudo wp plugin status Testable --allow-root");
//throw new Exception($output);
