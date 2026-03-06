<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
die("Invalid. Please use the correct form to submit your profile information.");
}

$fullname = trim($_POST['fullname'] ?? 'Not provided');
$age      = trim($_POST['age'] ?? 'Not provided');
$course   = trim($_POST['course'] ?? 'Not provided');
$emailAddress    = trim($_POST['emailAddress'] ?? 'Not provided');
$bio      = trim($_POST['bio'] ?? '');
$gender   = trim($_POST['gender'] ?? 'Not selected'); 


?>