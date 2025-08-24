<?php
// Contact Form Handler for SV Infra Projects
// This file handles form submissions when you have PHP support

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// Get form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required';
}

if (empty($email)) {
    $errors[] = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address';
}

if (empty($phone)) {
    $errors[] = 'Phone number is required';
}

if (empty($message)) {
    $errors[] = 'Message is required';
}

// If there are validation errors, return them
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['error' => implode(', ', $errors)]);
    exit;
}

// Email configuration
$to = 'info@svinfra.com'; // Change this to your email
$subject = 'New Contact Form Submission - SV Infra Projects';

// Create email content
$email_content = "New contact form submission from SV Infra Projects website:\n\n";
$email_content .= "Name: " . htmlspecialchars($name) . "\n";
$email_content .= "Email: " . htmlspecialchars($email) . "\n";
$email_content .= "Phone: " . htmlspecialchars($phone) . "\n\n";
$email_content .= "Message:\n" . htmlspecialchars($message) . "\n\n";
$email_content .= "Submitted on: " . date('Y-m-d H:i:s') . "\n";
$email_content .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";

// Email headers
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

// Try to send email
$mail_sent = mail($to, $subject, $email_content, $headers);

if ($mail_sent) {
    // Log successful submission (optional)
    $log_entry = date('Y-m-d H:i:s') . " - Contact form submitted by: " . $email . "\n";
    file_put_contents('contact_log.txt', $log_entry, FILE_APPEND | LOCK_EX);
    
    echo json_encode(['success' => 'Thank you for your message! We will get back to you soon.']);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Sorry, there was an error sending your message. Please try again or contact us directly.']);
}
?>
