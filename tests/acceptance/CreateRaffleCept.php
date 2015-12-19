<?php
/*
Feature: The plugin can setup a 50/50 raffle
    In order to schedule a raffle
    An admin can setup a raffle
*/

$I = /*am a */ new SC5050\SC5050Tester($scenario);
$I->wantTo("Confirm Feature: The plugin can setup a 50/50 raffle");

/*
Scenario:
	When an admin visits the dashboard
	Then he should see a custom icon and page
*/

$I->loginWordpressAs('admin');
global $CRG_homePageURL;
$dashBoardURL = $CRG_homePageURL . "wp-admin/index.php";
$I->amOnUrl($dashBoardURL);
$I->see('50/50 Raffles');

/*
 Sceanrio:
    When an admin clicks the menu item
    Then he sees the admin page
*/
$I->click(".toplevel_page_raffle_page");
$I->see('Create New Charitable Raffle');
