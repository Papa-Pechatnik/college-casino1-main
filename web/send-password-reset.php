<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("db.class.php");


$email = $_POST['email'];
var_dump($email);
$token = bin2hex(random_bytes(16));
$token_hash = hash("sha256", $token);
$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

$db = db::getInstance();

$stmt = $db->prepare("UPDATE users SET reset_token_hash=?, reset_token_expires_at=? WHERE email=?");
$stmt->bind_param("sss", $token_hash, $expiry, $email);
$stmt->execute();

if ($db->affected_rows) {
    echo "Im here";
    $mail = require __DIR__ . "/mailer.php";
    $mail->setFrom("noreply@example.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END

    Click <a href="https://comp-server.uhi.ac.uk/~22015602/casino/casino/web/reset-password.php?token=$token">here</a>to reset your password.

    END;
    try {
        $mail->send();
        echo "Message sent, please check your inbox.";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
    }
}
