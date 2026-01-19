<?php

require "../mail2/SMTP.php";
require "../mail2/PHPMailer.php";
require "../mail2/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = sanitizeInput($_POST['fullname'] ?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $phone = sanitizeInput($_POST['phone'] ?? '');
    $selector = sanitizeInput($_POST['selector'] ?? '');
    $guests = sanitizeInput($_POST['guests'] ?? '');
    $toDate = sanitizeInput($_POST['toDate'] ?? '');
    $fromDate = sanitizeInput($_POST['fromDate'] ?? '');
    $details = sanitizeInput($_POST['details'] ?? '');
    $terms = sanitizeInput($_POST['terms'] ?? '');
    $errors = [];

    // Validation
    if (empty($fullname)) $errors[] = "Full Name is required";
    if (empty($email)) $errors[] = "Email is required";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format";
    if (empty($phone)) {
        $errors[] = "Mobile is required";
    } elseif (!preg_match('/^\d{10}$/', $phone)) {
        $errors[] = "Mobile should be a 10-digit number";
    }
    if (empty($selector)) $errors[] = "Please choose a package.";
    if (empty($guests) || !is_numeric($guests) || $guests < 1) $errors[] = "Please enter a valid number of guests.";
    if (empty($toDate)) $errors[] = "Start (To) date is required.";
    if (empty($fromDate)) $errors[] = "End (From) date is required.";
    if ($terms !== "accepted") $errors[] = "You must accept the Terms & Conditions.";
    if (empty($details)) $errors[] = "Details are required";

    if (!empty($errors)) {
        echo $errors[0];
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'maheeshanethmika5@gmail.com'; 
        $mail->Password = 'uwmp ybuo kjpb tzjv'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // -------------------------
        // 1. ADMIN NOTIFICATION
        // -------------------------
        $mail->setFrom('maheeshanethmika5@gmail.com', 'Travel Mate Booking');
        $mail->addReplyTo($email, $fullname);
        $mail->addAddress('uriboyka450@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Booking Request - ' . $selector;

        $mail->Body = "
        <div style='font-family: Arial, sans-serif; max-width: 600px; margin: auto; border: 1px solid #eee; border-radius: 10px; overflow: hidden;'>
            <div style='background: #007bff; color: #fff; padding: 20px; text-align: center;'>
                <h2 style='margin: 0;'>New Booking Inquiry</h2>
            </div>
            <div style='padding: 20px; background: #f9f9f9;'>
                <table style='width: 100%; border-collapse: collapse;'>
                    <tr><td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Client Name:</strong></td><td style='padding: 10px; border-bottom: 1px solid #ddd;'>{$fullname}</td></tr>
                    <tr><td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Package:</strong></td><td style='padding: 10px; border-bottom: 1px solid #ddd;'>{$selector}</td></tr>
                    <tr><td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Guests:</strong></td><td style='padding: 10px; border-bottom: 1px solid #ddd;'>{$guests}</td></tr>
                    <tr><td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Duration:</strong></td><td style='padding: 10px; border-bottom: 1px solid #ddd;'>{$toDate} to {$fromDate}</td></tr>
                    <tr><td style='padding: 10px; border-bottom: 1px solid #ddd;'><strong>Phone:</strong></td><td style='padding: 10px; border-bottom: 1px solid #ddd;'>{$phone}</td></tr>
                </table>
                <div style='margin-top: 20px; padding: 15px; background: #fff; border-left: 4px solid #007bff;'>
                    <p style='margin: 0; font-weight: bold;'>Requirement Details:</p>
                    <p style='color: #555;'>{$details}</p>
                </div>
            </div>
        </div>";

        $mail->send();

        // -------------------------
        // 2. CUSTOMER AUTO-REPLY
        // -------------------------
        $mail->clearAddresses(); 
        $mail->addAddress($email, $fullname); 
        $mail->Subject = 'Booking Request Received - Travel Mate';

        $mail->Body = "
        <div style='font-family: Arial, sans-serif; max-width: 600px; margin: auto; border: 1px solid #ddd; border-radius: 12px; overflow: hidden;'>
            <div style='background: #007bff; padding: 30px; text-align: center; color: white;'>
                <h1 style='margin: 0;'>Hello {$fullname}!</h1>
                <p>We've received your booking inquiry for <strong>{$selector}</strong>.</p>
            </div>
            <div style='padding: 30px; line-height: 1.6; color: #333;'>
                <p>Thank you for choosing <strong>Travel Mate</strong>. Our team is checking the availability for your requested dates ({$toDate} - {$fromDate}).</p>
                <p>We will contact you within 24 hours to confirm your booking and discuss further details.</p>
                
                <div style='background: #f4f4f4; padding: 15px; border-radius: 8px; margin: 20px 0;'>
                    <p style='margin: 0;'><strong>Summary:</strong></p>
                    <ul style='margin: 10px 0; color: #555;'>
                        <li>Package: {$selector}</li>
                        <li>Guests: {$guests}</li>
                    </ul>
                </div>

                
                <p>If you have any urgent questions, feel free to reply to this email.</p>
                
                <p>Safe travels,<br><strong>Team Travel Mate</strong></p>
            </div>
            <div style='background: #333; padding: 20px; text-align: center; color: #fff; font-size: 12px;'>
                <p style='margin: 0;'>&copy; 2026 Travel Mate Sri Lanka. All rights reserved.</p>
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