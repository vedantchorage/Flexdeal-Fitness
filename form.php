<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $fullName = $_POST['full_name'];
    $mobileNumber = $_POST['mobile_number'];
    $email = $_POST['email_address'];
    $position = $_POST['position'];
    $coverLetter = $_POST['cover_letter'] ?? '';
    
    // Process file upload
    $resumePath = '';
    if (isset($_FILES['resume'])) {
        $allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        $maxSize = 8 * 1024 * 1024; // 8MB
        
        if (in_array($_FILES['resume']['type'], $allowedTypes) && $_FILES['resume']['size'] <= $maxSize) {
            $uploadDir = 'uploads/';
            $resumePath = $uploadDir . basename($_FILES['resume']['name']);
            move_uploaded_file($_FILES['resume']['tmp_name'], $resumePath);
        }
    }
    
    // Send confirmation email to applicant
    sendEmail($email, $fullName, $position);
    
    // Send SMS notification
    sendSMS($mobileNumber, $fullName);
    
    // Send notification to admin
    notifyAdmin($fullName, $email, $mobileNumber, $position);
    
    echo "Application submitted successfully!";
}

function sendEmail($to, $name, $position) {
    $subject = "Application Received - AB Software";
    $message = "Dear $name,\n\nThank you for applying for the $position position at AB Software. ";
    $message .= "We have received your application and will review it shortly.\n\nBest regards,\nAB Software Team";
    $headers = "From: careers@absoftware.com";
    
    mail($to, $subject, $message, $headers);
}

function sendSMS($number, $name) {
    // You'll need an SMS gateway API for this
    // This is a placeholder for your SMS API integration
    $apiKey = 'YOUR_SMS_API_KEY';
    $senderId = 'ABSOFT';
    $message = "Dear $name, we've received your application. Thank you! - AB Software";
    
    // Example using Twilio (you would need to install their PHP SDK)
    // $client = new Twilio\Rest\Client($accountSid, $authToken);
    // $client->messages->create(
    //     $number,
    //     [
    //         'from' => $senderId,
    //         'body' => $message
    //     ]
    // );
    
    // For demo purposes, we'll just log this
    file_put_contents('sms.log', "To: $number\nMessage: $message\n\n", FILE_APPEND);
}

function notifyAdmin($name, $email, $phone, $position) {
    $to = "careers@absoftware.com";
    $subject = "New Job Application: $position";
    $message = "A new application has been received:\n\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Position: $position\n";
    $headers = "From: noreply@absoftware.com";
    
    mail($to, $subject, $message, $headers);
}
?>