<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("db.class.php");

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $db = db::getInstance();

        $set_clause = '';
        $set_types = '';
        $bind_params = [];

        $fields = ['firstName', 'lastName', 'DOB', 'country', 'postalCode', 'city', 'address', 'email'];

        foreach ($fields as $field) {
            if (isset($_POST[$field]) && $_POST[$field] !== '') {
                $set_clause .= $field . '=?, ';
                $set_types .= 's';
                $bind_params[] = $_POST[$field];
            }
        }

        $set_clause = rtrim($set_clause, ', ');

        $bind_params[] = $user_id;

        $stmt = $db->prepare("UPDATE users SET $set_clause WHERE id=?");

        $set_types .= 'i';

        $stmt->bind_param($set_types, ...$bind_params);
        $stmt->execute();
        header('Location: play_zone.php');
        $stmt->close();
    }
} else {
    http_response_code(401);
    exit("Unauthorized");
}
