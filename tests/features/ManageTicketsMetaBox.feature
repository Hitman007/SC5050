ATURE: Admin manages tickets from the post.php edit screen

PRTN = physical raffle ticket number
A PRTN is a number that comes from a physical piece of paper that the user has purchased seperately
in a physical brick and mortar raffle supply store. It is both that number written on a piece of paper
and a data object assigned to a PRTNTicket CPT.

AS an admin
I want to manage tickets from the post.php edit screen
SO that I can remove tickets from available tickets sold

GIVEN there is a custom post type called "Raffle"
GIVEN there is a product called "Raffle Ticket Product"
GIVEN there is a CPT type called "PRTNTicket"
THEN I should see a meta box called "tickets"
AND and the meta box should populate with a loop query the query should search for CPTs associated with that raffle CPT
AND the meta box should populate with icons for deleting and the ticket number
AND each ticket number should be ancor linked to the permalink
