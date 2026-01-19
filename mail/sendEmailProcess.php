<?php

require "../mail/SMTP.php";
require "../mail/PHPMailer.php";
require "../mail/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitizeInput($_POST['name'] ?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $subject = sanitizeInput($_POST['subject'] ?? '');
    $message = sanitizeInput($_POST['message'] ?? '');
    $errors = [];

    if (empty($name)) $errors[] = "Name is required";
    if (empty($email)) $errors[] = "Email is required";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format";
    if (empty($subject)) $errors[] = "Subject is required";
    if (empty($message)) $errors[] = "Message is required";

    if (!empty($errors)) {
        echo $errors[0];
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'maheeshanethmika5@gmail.com'; 
        $mail->Password = 'uwmp ybuo kjpb tzjv'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // -----------------------------------------
        // 1. ADMIN NOTIFICATION (Company Email)
        // -----------------------------------------
        $mail->setFrom('maheeshanethmika5@gmail.com', 'Travel Mate Notifier');
        $mail->addReplyTo($email, $name);
        $mail->addAddress('uriboyka450@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Inquiry: ' . $subject;

        $mail->Body = "
        <div style='font-family: Arial, sans-serif; max-width: 600px; margin: auto; border: 1px solid #eee; border-radius: 8px; overflow: hidden;'>
            <div style='background: #333; color: #fff; padding: 20px; text-align: center;'>
                <h2 style='margin: 0;'>Web Inquiry Received</h2>
            </div>
            <div style='padding: 20px; background: #fafafa;'>
                <table style='width: 100%;'>
                    <tr><td style='padding: 10px; border-bottom: 1px solid #eee;'><strong>Sender Name:</strong></td><td style='padding: 10px; border-bottom: 1px solid #eee;'>{$name}</td></tr>
                    <tr><td style='padding: 10px; border-bottom: 1px solid #eee;'><strong>Sender Email:</strong></td><td style='padding: 10px; border-bottom: 1px solid #eee;'>{$email}</td></tr>
                    <tr><td style='padding: 10px; border-bottom: 1px solid #eee;'><strong>Subject:</strong></td><td style='padding: 10px; border-bottom: 1px solid #eee;'>{$subject}</td></tr>
                </table>
                <div style='margin-top: 20px; padding: 15px; background: #fff; border-left: 4px solid #d9534f;'>
                    <p style='margin: 0; font-weight: bold;'>Customer Message:</p>
                    <p style='color: #444; font-style: italic;'>\"{$message}\"</p>
                </div>
            </div>
        </div>";

        if (!$mail->send()) {
            echo 'Service Unavailable. Please try again later';
            exit;
        }

        // -----------------------------------------
        // 2. CUSTOMER AUTO-REPLY (Thank You Email)
        // -----------------------------------------
        $mail->clearAddresses(); 
        $mail->addAddress($email, $name); 
        $mail->Subject = 'Got your message! - Travel Mate';

        // Custom Links
        $fb_link = "#"; 
        $insta_link = "#";
        $web_url = "https://royalxtravel.com";

        $mail->Body = "
        <div style='font-family: Arial, sans-serif; max-width: 600px; margin: auto; border: 1px solid #ddd; border-radius: 12px; overflow: hidden;'>
            <div style='background: linear-gradient(135deg, #d9534f 0%, #a94442 100%); padding: 40px; text-align: center; color: white;'>
                <h1 style='margin: 0; font-size: 28px;'>Hi {$name}!</h1>
                <p style='font-size: 16px; opacity: 0.9;'>Thanks for reaching out to us.</p>
            </div>
            <div style='padding: 30px; line-height: 1.6; color: #333; text-align: center;'>
                <p style='font-size: 16px;'>We've received your request about <strong>\"{$subject}\"</strong>. Our travel experts will get in touch with you shortly to assist you further.</p>
                
                <div style='margin: 30px 0;'>
                    <a href='{$web_url}' style='background: #333; color: white; padding: 14px 28px; text-decoration: none; border-radius: 30px; font-weight: bold; display: inline-block;'>Browse Our Packages</a>
                </div>

                <hr style='border: 0; border-top: 1px solid #eee; margin: 30px 0;'>
                
                <p style='margin-bottom: 15px; font-size: 14px; color: #777;'>Let's stay connected:</p>
                <div>
                    <a href='{$fb_link}' style='margin: 0 10px;'><img src='https://cdn-icons-png.flaticon.com/32/733/733547.png' width='24' height='24'></a>
                    <a href='{$insta_link}' style='margin: 0 10px;'><img src='https://cdn-icons-png.flaticon.com/32/2111/2111463.png' width='24' height='24'></a>
                </div>
            </div>
            <div style='background: #f9f9f9; padding: 20px; text-align: center; font-size: 12px; color: #999;'>
                <p>&copy; 2026 Travel Mate. Your journey, our passion.</p>
            </div>
        </div>";

        if ($mail->send()) {
            echo 'Message Sent Successfully';
        } else {
            echo 'Auto-reply failed, but your message was received.';
        }

    } catch (Exception $e) {
        echo 'Service Unavailable. Please try again later';
        exit;
    }
}