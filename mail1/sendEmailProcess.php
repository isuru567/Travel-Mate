<?php

require "../mail1/SMTP.php";
require "../mail1/PHPMailer.php";
require "../mail1/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitizeInput($_POST['name'] ?? '');
    $phone = sanitizeInput($_POST['phone'] ?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $message = sanitizeInput($_POST['message'] ?? '');
    $errors = [];

    // Validation
    if (empty($name)) $errors[] = "Name is required";
    if (empty($phone)) {
        $errors[] = "Mobile is required";
    } elseif (!preg_match('/^\d{10}$/', $phone)) {
        $errors[] = "Mobile should be a 10-digit number";
    }
    if (empty($email)) $errors[] = "Email is required";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format";
    if (empty($message)) $errors[] = "Message is required";

    if (!empty($errors)) {
        echo $errors[0];
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Server Settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'maheeshanethmika5@gmail.com'; 
        $mail->Password = 'uwmp ybuo kjpb tzjv'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // -----------------------------------------
        // 1. ADMIN NOTIFICATION (Travel Mate Admin)
        // -----------------------------------------
        $mail->setFrom('maheeshanethmika5@gmail.com', 'Travel Mate Web');
        $mail->addReplyTo($email, $name);
        $mail->addAddress('uriboyka450@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Inquiry - Travel Mate';

        $mail->Body = "
        <div style='font-family: Arial, sans-serif; max-width: 600px; margin: auto; border: 1px solid #eee; border-radius: 10px; overflow: hidden;'>
            <div style='background: #007bff; color: #fff; padding: 20px; text-align: center;'>
                <h2 style='margin: 0;'>Travel Mate: New Lead</h2>
            </div>
            <div style='padding: 20px; background: #fcfcfc;'>
                <p>You have received a new inquiry from your website.</p>
                <table style='width: 100%; border-collapse: collapse;'>
                    <tr><td style='padding: 10px; border-bottom: 1px solid #eee;'><strong>Name:</strong></td><td style='padding: 10px; border-bottom: 1px solid #eee;'>{$name}</td></tr>
                    <tr><td style='padding: 10px; border-bottom: 1px solid #eee;'><strong>Phone:</strong></td><td style='padding: 10px; border-bottom: 1px solid #eee;'>{$phone}</td></tr>
                    <tr><td style='padding: 10px; border-bottom: 1px solid #eee;'><strong>Email:</strong></td><td style='padding: 10px; border-bottom: 1px solid #eee;'>{$email}</td></tr>
                </table>
                <div style='margin-top: 20px; padding: 15px; background: #fff; border-left: 4px solid #007bff;'>
                    <p style='margin: 0; font-weight: bold;'>Client Message:</p>
                    <p style='color: #444;'>{$message}</p>
                </div>
            </div>
        </div>";

        if (!$mail->send()) {
            echo 'Service Unavailable. Please try again later';
            exit;
        }

        // -----------------------------------------
        // 2. CUSTOMER AUTO-REPLY (Travel Mate Client)
        // -----------------------------------------
        $mail->clearAddresses(); 
        $mail->addAddress($email, $name); 
        $mail->Subject = 'Thank you for contacting Travel Mate!';

        // Social Links for Travel Mate
        $fb_link = "#"; 
        $insta_link = "#";

        $mail->Body = "
        <div style='font-family: Segoe UI, sans-serif; max-width: 600px; margin: auto; border: 1px solid #e0e0e0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05);'>
            <div style='background: #007bff; padding: 30px; text-align: center; color: white;'>
                <h1 style='margin: 0; font-size: 26px;'>Hi {$name},</h1>
                <p style='margin-top: 10px; font-size: 16px;'>Your travel partner is here!</p>
            </div>
            <div style='padding: 30px; line-height: 1.7; color: #333;'>
                <p>Thank you for reaching out to <strong>Travel Mate</strong>. We've received your message regarding your travel needs.</p>
                <p>One of our team members will contact you shortly to provide the best possible assistance.</p>
                
                <div style='text-align: center; margin: 35px 0;'>
                    <a href='#' style='background: #007bff; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 16px;'>Explore Tours</a>
                </div>

                <hr style='border: 0; border-top: 1px solid #eee; margin-top: 30px;'>
                
                <p style='text-align: center; font-size: 14px; color: #888;'>Connect with us:</p>
                <div style='text-align: center;'>
                    <a href='{$fb_link}' style='display: inline-block; margin: 0 10px;'><img src='https://cdn-icons-png.flaticon.com/32/733/733547.png' width='22'></a>
                    <a href='{$insta_link}' style='display: inline-block; margin: 0 10px;'><img src='https://cdn-icons-png.flaticon.com/32/2111/2111463.png' width='22'></a>
                </div>
            </div>
            <div style='background: #f8f9fa; padding: 20px; text-align: center; font-size: 12px; color: #aaa; border-top: 1px solid #eee;'>
                <p style='margin: 0;'>&copy; 2026 Travel Mate. Making your travel simple and exciting.</p>
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