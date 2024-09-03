<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

// ... your existing code ...

if (isset($_POST['place_order'])) {
    // ... your existing code ...

    // Get user's email
    $user_email = isset($_SESSION['user_email_key']) ? $_SESSION['user_email_key'] : '';

    // Send the email using PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->setFrom('your_email@example.com', 'Your Name');
        $mail->addAddress($user_email);
        $mail->Subject = 'Order Confirmation';
        $mail->Body = 'Thank you for placing your order. Your total is Rs. ' . number_format($total, 2);

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    // ... your existing code ...
}
?>
