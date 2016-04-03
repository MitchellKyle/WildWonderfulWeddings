<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	ob_start();
	$name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
	$email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
	$phone = trim(filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING));
	$message = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS));

	if ($name == "" || $email == "" || $phone == "") {
		$error_message = "Please fill in the required fields: Name, Email and Phone.";
	}

	if (!isset($error_message) && $_POST["location"] != "") {
		$error_message = "Bad form input";
	}

	require("includes/phpmailer/class.phpmailer.php");

	$mail = new PHPMailer;

	if (!isset($error_message) && !$mail->ValidateAddress($email)) {
		$error_message = "Invalid Email Address";
	}

	if (!isset($error_message)) {
		$email_body = "";
		$email_body .= "Name: " . $name . "\n";
		$email_body .= "Email: " . $email . "\n";
		$email_body .= "Phone: " . $phone . "\n";
		$email_body .= "Message: " . $message . "\n";

		$mail->setFrom($email, $name);
		$mail->addAddress('mitchkylell@gmail.com', 'Kyle');
		$mail->isHTML(false);
		$mail->Subject = 'Wild and Wonderful form from ' . $name;
		$mail->Body = $email_body;

		if ($mail->send()) {
			header("location:contact.php?status=thanks");
			exit;
		}
		$error_message = "Message could not be sent.";
		$error_message .= "Mailer Error: " . $mail->ErrorInfo;
	}
}


$active = "contact";
$pageTitle = "Contact Us";

include("includes/header.php");

?>

<div class="container-fluid" id="contact-page">
		<div class="row contact">
			<div class="col-md-4 contact-info">
				<h1 class="pacifico contact-header">Contact Info</h1>
				<p><b>Kyle J Sweeney</b></p>
				<p><b>Telephone: </b><a href="tel:443-454-9939">(443) 454-9939</a></p>
				<p><b>E-Mail: </b><a href="mailto:kylej@wildandwonderfulweddings.com">KyleJ@WildandWonderfulWeddings.com</a></p>
			</div>
			<div class="col-md-8 contact-form">
				<h1 class="pacifico contact-header">Contact Form</h1>
				<?php
					if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
						echo "<p>Thank you for contacting us! We will be in touch with you soon!</p>";
					} else {
				?>
				<?php
				if (isset($error_message)) {
					echo "<p class='error-message'>" . $error_message . "</p>";
				}
				?>
				<div class="row form">
					<form method="post" action="contact.php">
						<div class="form-input col-sm-4">
							<label class="sr-only" for="name">Name</label>
							<input type="text" id="name" name="name" placeholder="Name:" value="<?php if (isset($name)) { echo htmlspecialchars($name); }?>"></input>
						</div>
						<div class="form-input col-sm-4">
							<label class="sr-only" for="email">Email</label>
							<input type="email" id="mail" name="email" placeholder="E-mail:" value="<?php if (isset($email)) { echo htmlspecialchars($email); }?>"></input>
						</div>
						<div class="form-input col-sm-4">
							<label class="sr-only" for="phone">Phone Number</label>
							<input type="tel" id="phone" name="phone" placeholder="Phone:" value="<?php if (isset($phone)) { echo htmlspecialchars($phone); }?>"></input>
						</div>
						<div style="display: none;">
							<label for="location">Address</label>
							<input type="text" id="location" name="location"></input>
						</div>
						<div class="form-input">
							<label class="sr-only" for="message">Optional Message</label>
							<textarea id="message" name="message" placeholder="Message:"><?php if (isset($message)) { echo htmlspecialchars($message); } ?></textarea>
						</div>
						<div class="for-button">
							<input type="submit" class="button" value="Submit"></input>
							<input type="reset" class="button"></input>
						</div>
					</form>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

<?php include("includes/footer.php"); ?>