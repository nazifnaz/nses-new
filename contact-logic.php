<?php

/*
* Write your logic to manage the data
* like storing data in database
*/

// POST Data
$data['name'] = $_POST['firstName'] . " " . $_POST['lastName'];
$data['email'] = $_POST['email'];
$data['message'] = $_POST['message'];

    $to      = 'nobody@example.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: webmaster@example.com'       . "\r\n" .
                 'Reply-To: webmaster@example.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);


echo json_encode({""});
exit;

?>