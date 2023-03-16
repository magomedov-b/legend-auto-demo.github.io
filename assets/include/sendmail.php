<?php
	// My modifications to mailer script from:
	// Only process POST reqeusts.
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$phone = $_POST['phone']; 
	$subject = $_POST['sub']; 
	$messagebody = $_POST['message']; 	
	
	// Set the from email address.
	$from = "<example@example.com>";
	
	// Set the recipient email address.
    // FIXME: Update this to your desired email address.
	$to = "example@domainname.com"; 

	// Build the email content.
	$message = "
				Hi,

				A visitor has been sent a query from AutoServicing.

				Name: $name

				Visitor Email: $email

				Subject: $subject

				Phone: $phone

				Message: $messagebody


				Thanks,

				AutoServicing 

				
				This message was sent to $to.  

				AutoServicing Ltd. 1828 Johns Drive Glenview, IL 60025.
				"; 


	// send the email 
	if(mail ($to,$subject,$message))
	{
		echo "Success";
	}else{
		echo "No";
	}
?>

