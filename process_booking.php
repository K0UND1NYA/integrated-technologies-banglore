<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'includes/PHPMailer/Exception.php';
require 'includes/PHPMailer/PHPMailer.php';
require 'includes/PHPMailer/SMTP.php';

// Helper function to load .env
function loadEnv($path) {
    if (!file_exists($path)) {
        return false;
    }
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        $parts = explode('=', $line, 2);
        if (count($parts) !== 2) continue;
        
        $name = trim($parts[0]);
        $value = trim($parts[1]);
        
        if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
            putenv(sprintf('%s=%s', $name, $value));
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }
}

// Load .env - check current directory first, then parent for security/deployment flexibility
if (file_exists(__DIR__ . '/.env')) {
    loadEnv(__DIR__ . '/.env');
} else {
    loadEnv(__DIR__ . '/../.env');
}

// Get POST data
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

$incident_id = $input['incident_id'] ?? 'N/A';
$name = $input['name'] ?? '';
$email = $input['email'] ?? '';
$phone = $input['phone'] ?? '';
$problem_reported = $input['problem_reported'] ?? '';
$device = $input['device'] ?? '';
$company = $input['company'] ?? 'N/A';
$address = $input['address'] ?? '';
$elaborate = $input['elaborate'] ?? '';

// Validate inputs
if (empty($name) || empty($email) || empty($phone) || empty($problem_reported) || empty($device)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = getenv('EMAIL_USER');
    $mail->Password   = getenv('EMAIL_PASS');
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom(getenv('EMAIL_USER'), "Integrated Tech - Service");
    $mail->addAddress(getenv('RECEIVER_EMAIL'));
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = "New Service Request: [$incident_id] - $problem_reported";
    
    $body = "
        <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; border: 1px solid #e5e7eb; border-radius: 12px; overflow: hidden;'>
            <div style='background: #2563eb; color: white; padding: 20px; text-align: center;'>
                <h2 style='margin: 0;'>New Service Request</h2>
                <p style='margin: 5px 0 0;'>Incident ID: <strong>$incident_id</strong></p>
            </div>
            <div style='padding: 20px; background: #fff;'>
                <table style='width: 100%; border-collapse: collapse;'>
                    <tr>
                        <td style='padding: 10px 0; border-bottom: 1px solid #f3f4f6;'><strong>Name:</strong></td>
                        <td style='padding: 10px 0; border-bottom: 1px solid #f3f4f6;'>$name</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px 0; border-bottom: 1px solid #f3f4f6;'><strong>Email:</strong></td>
                        <td style='padding: 10px 0; border-bottom: 1px solid #f3f4f6;'>$email</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px 0; border-bottom: 1px solid #f3f4f6;'><strong>Contact No:</strong></td>
                        <td style='padding: 10px 0; border-bottom: 1px solid #f3f4f6;'>$phone</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px 0; border-bottom: 1px solid #f3f4f6;'><strong>Device:</strong></td>
                        <td style='padding: 10px 0; border-bottom: 1px solid #f3f4f6;'>$device</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px 0; border-bottom: 1px solid #f3f4f6;'><strong>Problem:</strong></td>
                        <td style='padding: 10px 0; border-bottom: 1px solid #f3f4f6;'>$problem_reported</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px 0; border-bottom: 1px solid #f3f4f6;'><strong>Company:</strong></td>
                        <td style='padding: 10px 0; border-bottom: 1px solid #f3f4f6;'>$company</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px 0; border-bottom: 1px solid #f3f4f6;'><strong>Address:</strong></td>
                        <td style='padding: 10px 0; border-bottom: 1px solid #f3f4f6;'>$address</td>
                    </tr>
                </table>
                <div style='margin-top: 20px;'>
                    <strong>Elaborated Problem:</strong>
                    <p style='background: #f9fafb; padding: 15px; border-radius: 8px; border: 1px solid #e5e7eb; white-space: pre-wrap;'>" . nl2br(htmlspecialchars($elaborate)) . "</p>
                </div>
            </div>
            <div style='background: #f3f4f6; padding: 15px; text-align: center; font-size: 12px; color: #6b7280;'>
                Sent from Integrated Technologies Website
            </div>
        </div>
    ";

    $mail->Body = $body;
    $mail->AltBody = "Incident ID: $incident_id\nName: $name\nEmail: $email\nPhone: $phone\nProblem: $problem_reported\nDevice: $device\nCompany: $company\nAddress: $address\n\nElaborated Problem: $elaborate";

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Service request sent successfully']);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
}
?>
