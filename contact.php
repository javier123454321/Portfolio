<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="/img/favicon.png" type="image/png">
	<title>Thank You for Contacting Me.</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">

	<body>
		<section class="landingBanner fullscreen" id="home">
			<div class="container">
				<div class="row d-flex text-center align-items-center">
					<div class="col-lg-12 tagLine">
<?php
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $visitor_message = "";

    if(isset($_POST['name'])) {
        $visitor_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }

    if(isset($_POST['message'])) {
        $visitor_message = "From: $visitor_name.<br><br>" ."Body: <br><br>" .wordwrap(htmlspecialchars($_POST['message']), 70);
    }

    $mailTo = "javier.e.glz@gmail.com";

    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
	.'From: ' . $visitor_email . "\r\n";
	
    if(mail($mailTo, $email_title, $visitor_message, $headers)){
		echo "<h1>Thank you, I will get back to you very soon!</h1>";
   	 } else {
	  echo "<h1> This is awkward... something went wrong</h1> <br>
	   		<h3>please contact me at javier.e.glz@gmail.com</h3>";
    }
?>
						
						<div class="ctaHire">
							<a href="/" class="btn circle">Go back</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>