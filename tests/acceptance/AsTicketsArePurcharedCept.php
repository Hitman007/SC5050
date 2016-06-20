<?php


$I = /*am a */ new SC5050\SC5050Tester($scenario);


$I->fail('This test has not been implemented yet.');

//$I->wantTo("Confirm Feature: As Raffle Ticket products are purchsed");

/*
 PISQ = product inventory stock quantity
 PRTN = physical raffle ticket number

 As Raffle Ticket products are purchsed
 PRTNs are assigned to each order, per quantity.
 the PISQ is reduced.
 PRTNs are emailed to the customer with their confirmation email.

 The system should control the PISQ available for purchase in Woo commerce.

 THe normal default Woocommerce PISQ controller is disabled.