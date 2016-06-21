As a customer
I want to purchase tickets

PISQ = product inventory stock quantity
PRTN = physical raffle ticket number

WHEN I purchase a Raffle Ticket Product
THEN PRTNs are assigned to each order, per quantity.
AND PRTNs are emailed to the customer with their confirmation email.
AND the content of the PRTNTicket CPT is changed to 'This ticket has been sold'
AND the post meta data is changed to reflect the customer ID

GIVEN there is an inventory controller in Woocommerce
The system should control the PISQ available for purchase in Woo commerce.

The normal default Woocommerce PISQ controller is disabled.

