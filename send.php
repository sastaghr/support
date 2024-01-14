<?php
// Set the recipient email address
$to = "abiibeviral@facebook.com";

// Set the subject of the email
$subject = "Account Suspended";

// Set the message body
$message = "This is a test email sent from PHP.";

// Set the sender's email address and name
$senderEmail = "infosupport@facebook.com";
$senderName = "Meta";

// Set additional headers
$headers = "From: $senderName <$senderEmail>\r\n";
$headers .= "Reply-To: $senderName <$senderEmail>\r\n";
$headers .= "CC: cc@example.com\r\n";
$headers .= "BCC: bcc@example.com\r\n";

// Send the email
$mailSuccess = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
if ($mailSuccess) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>
