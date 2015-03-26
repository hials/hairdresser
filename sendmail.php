
<?php
session_start();

if (isset($_REQUEST['message'])) {

	$to = "post@tonyand.re";
	$from = $_REQUEST['email'];
	$subject = "TONYAND.RE: " . $_REQUEST['subject'];
	$message = "Message from: " . $_REQUEST['name'] . " (" . $from . ")\n\n" . $_REQUEST['email'] . $_REQUEST['time'] . $_REQUEST['message'] . $_REQUEST['telefon']  ;

	mail($to, "$subject", $message, "From:" . $from);

	$_SESSION['info'] = "Thank you! Message is successfully sent.";

} else {

	$_SESSION['error'] = "Error: Message not sent.";
}

header('Location: http://tonyand.re/portfolio/#contact');
?>
