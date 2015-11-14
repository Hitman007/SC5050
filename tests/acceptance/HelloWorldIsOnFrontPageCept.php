<?php

$I = new AcceptanceTester($scenario);
$I->amOnPage('http://ec2-54-175-20-216.compute-1.amazonaws.com');
$I->see('Hello World');
