<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact Form</title>
	<link rel="stylesheet" href="css2/style.css">
</head>
<body>
	<div class="contact-title">
		<h1>Message</h1>
		<h2>Please contact us for your inquiries.</h2>
	</div>

	<div class="contact-form">
		<form id="contact-form" method="POST" action="contactform2.php">
			<input name="name" type="text" class="form-control" placeholder="Your Name" required/>
			<br>
			<input name="email" type="email" class="form-control" placeholder="Your E-mail" required/>
			<br>
			<textarea name="message" class="form-control" placeholder="Your message here" row="4" required/></textarea>
			<br>
			<input type="submit" name="submit" class="form-control submit" value="Submit">
		</form>
	</div>

</body>
</html>