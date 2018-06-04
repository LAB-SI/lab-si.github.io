<?php
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "valentinbreiz@gmail.com";
 
    function died($error) {
        // your error code can go here
        echo $error."<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['body'])) {
        died('Vous navez pas renseigne toutes les informations! Verifiez que vous avez bien complete le mail, sujet et corps du message.');       
    }
 
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject']; // not required
    $body = $_POST['body']; // required

 
	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
	$status = mail($email_to, $subject, $body, $headers);
	
	if($status)
	{ 
    echo '<p>Mail envoye!</p>';
	} 
	else 
	{ 
    echo '<p>Une erreur sest produite merci de reessayer!</p>'; 
	}
	
?>