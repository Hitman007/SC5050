<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('Make sure that a plugin is installed');
$output = shell_exec("sudo wp plugin is-installed Testable --allow-root");
throw new Exception($output);
