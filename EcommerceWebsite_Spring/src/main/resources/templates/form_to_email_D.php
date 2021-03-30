<?php
if(!isset($_POST['submit'])) {
    echo "ERROR: You need to submit the form!";
}
$useremail = $_POST['useremail'];
$message = $_POST['message'];

if(empty($useremail) || empty($message)) {
    echo "ERROR: Name and email are mandatory!";
    exit;
}

$email_from = "tudor_coroian17@yahpp.com";
$email_subject = "New Form submission";
$email_body = "You received a new message from " . $useremail . "\n"."Here is the message: \n " . $message;
$to = "denis.flueran02@gmail.com";

if(mail($to, $email_subject, $email_body);) {
    echo "SUCCESS";
} else {
    echo "FAILURE";
}
header('Location: home.html');