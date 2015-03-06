<?php

	$name 			= $_POST['bward-name'];
	$email 			= $_POST['bward-email'];
	$phone 			= $_POST['bward-phone'];
	$enquiry		= $_POST['bward-enquiry'];
	$description 	= $_POST['bward-description'];

  if( $_POST['studio51-secure'] != '' ) {

    echo "Oops, we don't like spammers, you little fuck!";

  } else {

    if ( !empty( $name ) && !empty( $email ) && !empty( $enquiry ) && !empty( $description ) ) {

    	$to      	= 'Ben Ward <info@bwardelectrical.co.uk>';
    	$subject	= 'Howdy Ben! ' . $name . ' wants to know more about ' . $enquiry;

  		$message =  '
  			Hey Ben,

  			You have received a new message from ' . $name . '.
  			He wants to know more about ' . $enquiry . ' and left you this message.

  			' . $description . '

  			You can contact him at : ' . $phone . ' or reply to this email.

  			Best Regards,
  			Ben Ward Electrical Services Boot
  		';

     	$headers =  'From: BWard Electrical Services Boot <boot@bwardelectrical.co.uk>' . "\r\n" .
                	'Reply-To: ' . $name . '<' . $email . '>' ."\r\n" .
                	'X-Mailer: PHP/' . phpversion();

     	mail( $to, $subject, $message, $headers );

        echo "Thank you for using our mail form !";

    } else {

      echo "You missed something !";

    }
  }
