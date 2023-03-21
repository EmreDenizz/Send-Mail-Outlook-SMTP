<?php

// Please set an email address or addresses to $to
$to = "";
$subject = "Subject - Test";
$content = "Content - Test";

$email = new PHPMailer ();

$email->IsSMTP();
$email->SMTPDebug = 3;
$email->SMTPAuth = true;
$email->SMTPSecure = 'tls';
$email->Host = "smtp.office365.com";
$email->Port = 587;
$email->IsHTML(true);
$email->SetLanguage("en", "phpmailer/language");
$email->CharSet = "utf-8";

// SMTP email credentials
$email->Username = "XXXXXXXXXX@outlook.com";
$email->Password = "XXXXXXXXXX";
$email->SetFrom("XXXXXXXXXX@outlook.com", "XXXXX XXXXX");

// Set email to
$addresses = explode(',', $to);
foreach ($addresses as $address) {
    $email->AddAddress($address);
}

// Set email subject and content
$email->Subject = $subject;
$email->Body = $content;

// Send email and check response
if (!$email->Send()) {
    var_dump("Email is SENT.");
} else {
    var_dump("Email is NOT SENT.");
}

exit;

?>
