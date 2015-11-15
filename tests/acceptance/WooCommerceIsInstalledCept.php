<?php

$I = new AcceptanceTester($scenario);
$output = shell_exec ("wp plugin status Testable");
$output = "oops";
throw new Exception($output);
