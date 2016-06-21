FEATURE: Admin can manage tickets from the post.php?action=edit screen

PRTN = physical raffle ticket number
A PRTN is a number that comes from a physical piece of paper that the customer has purchased seperately
in a physical brick and mortar raffle supply store. It is both that number written on a piece of paper
and a data object assigned to a PRTNTicket CPT.

AS an admin
I want to manage tickets from the post.php edit screen
SO that I can manage tickets from available tickets sold

GIVEN there is a custom post type called "Raffle"
AND there is a product called "Raffle Ticket Product"
AND there is a CPT type called "PRTNTicket"
WHEN I navigate to /wp-admin/post.php?action=edit
AND I see a meta box called "Tickets"
THEN the meta box should populate with a loop query the query should search for PRTNTicket CPTs associated with that raffle CPT
AND the meta box should populate with icons for deleting and the ticket number
AND each ticket number should be ancor linked to the permalink of the PRTNTicket
AND each ticket number snould have an icon to represent it's status
AND since there are many tickets, the output is set to 25%EM
