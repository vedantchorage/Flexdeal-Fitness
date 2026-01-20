<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

// Accept JSON input
$data = json_decode(file_get_contents('php://input'), true);

if ($data) {
    // Extract data safely
    $product = htmlspecialchars($data['productName'] ?? '');
    $price = htmlspecialchars($data['productPrice'] ?? '');
    $image = htmlspecialchars($data['productImage'] ?? '');
    $name = htmlspecialchars($data['name'] ?? '');
    $phone = htmlspecialchars($data['phone'] ?? '');
    $city = htmlspecialchars($data['city'] ?? '');
    $message = nl2br(htmlspecialchars($data['message'] ?? ''));

    // Build base URL for fallback (update to your live URL if deployed)
    $baseURL = 'http://localhost/FlexDeal/';

    // Default image HTML (in case nothing works)
    $embeddedImageHtml = "<p><em>Image not found</em></p>";

    // Try base64 if it's a relative path
    if (!preg_match('/^https?:\/\//', $image)) {
        // Local path like admin/uploads/image.jpg
        $localPath = $_SERVER['DOCUMENT_ROOT'] . '/' . ltrim($image, '/');
        if (file_exists($localPath)) {
            $ext = pathinfo($localPath, PATHINFO_EXTENSION);
            $base64 = base64_encode(file_get_contents($localPath));
            $embeddedImageHtml = "<img src='data:image/$ext;base64,$base64' style='max-width:300px;'>";
        } else {
            // Fallback to URL
            $imageURL = $baseURL . ltrim($image, '/');
            $embeddedImageHtml = "<img src='$imageURL' style='max-width:300px;'>";
        }
    } else {
        // It's a full URL (e.g. http://localhost/FlexDeal/admin/uploads/image.jpg)
        $parsed = parse_url($image);
        if (strpos($parsed['host'], 'localhost') !== false) {
            // Try loading as local file for base64
            $localPath = $_SERVER['DOCUMENT_ROOT'] . $parsed['path'];
            if (file_exists($localPath)) {
                $ext = pathinfo($localPath, PATHINFO_EXTENSION);
                $base64 = base64_encode(file_get_contents($localPath));
                $embeddedImageHtml = "<img src='data:image/$ext;base64,$base64' style='max-width:300px;'>";
            } else {
                $embeddedImageHtml = "<img src='$image' style='max-width:300px;'>";
            }
        } else {
            $embeddedImageHtml = "<img src='$image' style='max-width:300px;'>";
        }
    }

    // Email HTML
    $body = "
        <h2>New Quote Request</h2>
        <p><strong>Product:</strong> $product</p>
        <p><strong>Price:</strong> $price</p>
        <p><strong>City:</strong> $city</p>
        <p><strong>Image:</strong><br>$embeddedImageHtml</p>
        <hr>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Message:</strong><br>$message</p>
    ";

    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'absoftwaresolution@gmail.com';  // Your Gmail
        $mail->Password = 'xohv pldp xfkw hgqf';           // Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Email headers
        $mail->setFrom('absoftwaresolution@gmail.com', 'Website Quote');
        $mail->addAddress('flexdealfitness@gmail.com');  // Your receiver

        $mail->isHTML(true);
        $mail->Subject = "Quote Request: $product";
        $mail->Body    = $body;

        $mail->send();
        echo "Quote request sent successfully.";
    } catch (Exception $e) {
        http_response_code(500);
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    http_response_code(400);
    echo "Invalid request. No data received.";
}
