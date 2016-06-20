FEATURE: Admin adds PRTNs to a raffle

PRTN = physical raffle ticket number
A PRTN is a number that comes from a physical piece of paper that the user has purchased seperately
in a physical brick and mortar raffle supply store. It is both that number written on a piece of paper
and a data object assigned to a PRTNTicket CPT.

AS an admin
I want to add PRTNs to a raffle
SO that there are Raffle Product Tickets to available for purchase

GIVEN there is a custom post type called "Raffle"
GIVEN there is a product called "Raffle Ticket Product"
GIVEN there is a CPT type called "PRTNTicket"
WHEN a user purchases a "Raffle Ticket Product"
THEN new PRTNs are assigned to a Raffle CPT
AND the system should PRTNTicketCreator->createPRTNTicket($postID, $PRTN);
AND each PRTN CPT TITLE is "Ticket: xxx for <a href = 'raffle permaklink'>Raffle</a>" where xxx is the PRTN
AND each PRTN CPT has post_meta_data("PRTN") which contains the actual PRTN data.
