<?php

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "ryan.barrera@onet.com.ph";
	$headers = "From: ".$email;

	$txt = "You have received an email from ".$name.".\n\n".$messsage;

	mail($mailTo, $txt, $headers);
	header("Location: contactform.php?mailsend");

}
else
{
	
}


?>