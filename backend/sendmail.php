<?php

// Require the Composer autoloader
require '../vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();

// SMTP configuration for Gmail
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'thuddth2307004@fpt.edu.vn'; // Thay 'your_email@gmail.com' bằng địa chỉ email Gmail của bạn
$mail->Password = 'azxn xlif gxof abkh'; // Thay 'your_password' bằng mật khẩu email Gmail của bạn
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set up the email details
$mail->setFrom('thuddth2307004@fpt.edu.vn', 'Dương Thứ - FPT aptech');
$mail->addAddress('duongthutb94@gmail.com', 'duongthutb941@gmail.com');
$mail->Subject = 'Xác nhn thanh toán';
$mail->Body = '<h1 style="color: red">hello </h1>';


// Send the email
if ($mail->send()) {
    echo 'Email sent successfully!';
} else {
    echo 'Email could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>