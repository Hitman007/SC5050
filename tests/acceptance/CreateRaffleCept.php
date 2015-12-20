<?php
/*
Feature: Admins can create, edit, and delete raffle CPTs
    In order have raffle tickets to sell
    As as admin
    I want to do CRUD activities in the dashbaord
*/

$I = /*am a */ new SC5050\SC5050Tester($scenario);
$I->wantTo("Confirm Feature: Admins can create, edit, and delete raffle CPTs");

/*
Scenario:
	When an admin visits the dashboard
	Then he should see a custom item called "Raffles"
*/

$I->loginWordpressAs('admin');

//Compile the dashboard's URL. Set in _bootstrap.php:
global $CRG_homePageURL; $dashBoardURL = $CRG_homePageURL . "wp-admin/index.php";

$I->amOnUrl($dashBoardURL);
$I->see('50/50 Raffles');

/*
 Sceanrio:
    When an admin clicks the menu item
    Then he sees the admin page
    
Scenario: The admin can create new raffles

Scenario: The admin can edit existing raffles

Scenario: The admin can delete a raffle

Scenario: The admin edits raffle details
    When the admin edits a raffle's details
    Then he can modify the following fields
*/
$I->click(".toplevel_page_raffle_page");
$I->see('Create New Charitable Raffle');
