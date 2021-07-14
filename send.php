<?php
if (isset($_POST)) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $replyto = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
}

$mailTo  = 'daniele@fusari.co.uk';
$header = "From: " . $replyto;
mail($mailTo, $subject, $message, $header);
header('Location: /?sent');
exit;
