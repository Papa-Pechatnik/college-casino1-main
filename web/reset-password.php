<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("db.class.php");

$token = $_GET["token"];
$token_hash = hash("sha256", $token);

$db = db::getInstance();

$stmt = $db->prepare("SELECT * FROM users WHERE reset_token_hash = ?");
$stmt->bind_param("s", $token_hash);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assos();

if ($user == null) {
    die("token not found");
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {
    die("token has expired");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Reset Password</title>
</head>

<body>
    <h1>Reset Password</h1>

    <form action="process-reset-password.php" method="post">
        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">

        <label for="password">New Password</label>
        <input type="password" id="password" name="password">

        <label for="password_confirmaton">Repeat Password</label>
        <input type="password" id="password_confirmaton" name="password_confirmaton">

        <button>Send</button>
    </form>

</body>

</html>