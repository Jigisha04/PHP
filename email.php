<?php
$to='abc.123@gmail.com';
$subject='test Email';
$message='this is a test email using MailHog on Windows';
$headers='From: webmaster@example.com'. "\r\n";
'Reply-To: webmaster@example.com'. "\r\n". 
'X-Mailer:PHP/' .phpversion();
If(mail($to, $subject, $message, $headers))
{
    echo 'Email sent successfully!';
}
else{
    echo 'Failed to send email. ';
}
?>
