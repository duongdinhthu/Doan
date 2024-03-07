<?php
require 'vendor/autoload.php';

// Sử dụng các namespace của PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Cấu hình server
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'duongthutb941@gmail.com';
    $mail->Password = 'Thu456258';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Người gửi và người nhận
    $mail->setFrom('duongthutb941@gmail.com', 'Your Name');
    $mail->addAddress('duongthutb94@gmail.com', 'Recipient Name');

    // Nội dung email
    $mail->isHTML(true);
    $mail->Subject = 'Subject';
    $mail->Body = 'This is the HTML message body <b>in bold!</b>';

    // Gửi email
    $mail->send();
    echo 'Email đã được gửi thành công';
} catch (Exception $e) {
    echo "Không thể gửi email. Lỗi: {$mail->ErrorInfo}";
}
?>
