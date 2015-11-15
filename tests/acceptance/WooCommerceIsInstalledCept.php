<?php

$I = new AcceptanceTester($scenario);
$output = shell_exec ("wp plugin status Testable");
die $output;
