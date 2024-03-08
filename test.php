<?php
// Require the Composer autoloader
require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();

// SMTP configuration for Gmail
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'thuddth2307004@fpt.edu.vn'; // Thay 'your_email@gmail.com' bằng địa chỉ email Gmail của bạn
$mail->Password = 'Thu456258'; // Thay 'your_password' bằng mật khẩu email Gmail của bạn
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

// Set up the email details
$mail->setFrom('thuddth2307004@fpt.edu.vn', 'Duong thu'); // Thay 'your_email@gmail.com' và 'Your Name' bằng thông tin của bạn
$mail->addAddress('duongthutb941@gmail.com', 'duongthutb941@gmail.com'); // Thay 'recipient@example.com' và 'Recipient Name' bằng địa chỉ email người nhận
$mail->Subject = 'Test Email from PHPMailer';
$mail->Body = 'This is a test email sent from PHPMailer.';

// Send the email
if ($mail->send()) {
    echo 'Email sent successfully!';
} else {
    echo 'Email could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>