<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('Make sure that a plugin is installed');
$output = shell_exec("sudo wp plugin status Testable --allow-root");

if (strpos($str, 'Active') !== FALSE){}
   else{
    throw new Exception('The plugin is not active');
   }
