<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("db.class.php");
require_once("userhash.class.php");

$token = $_POST["token"];
$token_hash = hash("sha256", $token);

$userhash = new UserHash();
$userhash->newHash($pass);
$hash = $userhash->getHash();

$db = db::getInstance();

$stmt = $db->prepare("UPDATE users SET pass_word = ?, reset_token_hash = NULL, reset_token_expires_at = NULL WHERE id = ?");
$stmt->bind_param("ss", $hash, $user["id"]);
$stmt->execute();

echo "Password updated. You can now login.";


// if ($user == null) {
//     die("token not found");
// }

// if (strtotime($user["reset_token_expires_at"]) <= time()) {
//     die("token has expired");
// }
