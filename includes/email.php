
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Set headers for JSON response
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Metóda nie je povolená']);
    exit;
}

// Get and validate POST data
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Meno je povinné';
}

if (empty($email)) {
    $errors[] = 'E-mail je povinný';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Neplatný e-mail';
}

if (empty($message)) {
    $errors[] = 'Správa je povinná';
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => implode(', ', $errors)]);
    exit;
}

// Create PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP Configuration (from environment)
    $mail->isSMTP();
    $mail->Host = getenv('SMTP_HOST') ?: 'mail.webglobe.sk';
    $mail->SMTPAuth = true;
    $mail->Username = getenv('SMTP_USERNAME') ?: '';
    $mail->Password = getenv('SMTP_PASSWORD') ?: '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = (int) (getenv('SMTP_PORT') ?: 587);
    $mail->CharSet = 'UTF-8';

    // Recipients
    $mail->setFrom('kima@kima.sk', 'Kima');
    $mail->addAddress('kima@kima.sk', 'Kima');
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Nová správa z kontaktného formulára - KIMA';
    $mail->Body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #150404; color: white; padding: 20px; text-align: center; }
                .content { background-color: #f9f9f9; padding: 20px; margin-top: 20px; }
                .field { margin-bottom: 15px; }
                .label { font-weight: bold; color: #150404; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Nová správa z kontaktného formulára</h2>
                </div>
                <div class='content'>
                    <div class='field'>
                        <span class='label'>Meno:</span><br>
                        " . htmlspecialchars($name) . "
                    </div>
                    <div class='field'>
                        <span class='label'>E-mail:</span><br>
                        " . htmlspecialchars($email) . "
                    </div>
                    <div class='field'>
                        <span class='label'>Správa:</span><br>
                        " . nl2br(htmlspecialchars($message)) . "
                    </div>
                </div>
            </div>
        </body>
        </html>
    ";
    $mail->AltBody = "Meno: $name\nE-mail: $email\n\nSpráva:\n$message";

    // Send email
    $mail->send();

    echo json_encode([
        'success' => true,
        'message' => 'Správa bola úspešne odoslaná. Čoskoro vás budeme kontaktovať.'
    ]);

} catch (Exception $e) {
    var_dump($e);

    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Správu sa nepodarilo odoslať. Skúste to prosím neskôr.'
    ]);

    // Log error for debugging (remove in production)
    error_log("Mail Error: {$mail->ErrorInfo}");
}