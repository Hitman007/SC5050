<?php
/*
Feature: As tickets are purchased raffle numbers are assigned to orders
    In order have raffle tickets to sell
    As a user/customer
    I want purchase digital raffle tickets that corespond to physical tickets
*/

$I = /*am a */ new SC5050\SC5050Tester($scenario);


$I->fail('This test has not been implemented yet.');

//$I->wantTo("Confirm Feature: As tickets are purchased raffle numbers are assigned to orders");

/*
 PISQ = product inventory stock quantity
 PRTN = physical raffle ticket number

 As Raffle Ticket products are purchsed
 PRTNs are assigned to each order, per quantity.
 the PISQ is reduced.
 PRTNs are emailed to the customer with their confirmation email.

 The system should control the PISQ available for purchase in Woo commerce.

 THe normal default Woocommerce PISQ controller is disabled.