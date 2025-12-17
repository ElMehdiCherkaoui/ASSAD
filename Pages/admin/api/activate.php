<?php
require_once "../../../config.php";

header("Content-Type: application/json");

if (!isset($_GET['id'])) {
    echo json_encode(["success" => false, "message" => "Missing ID"]);
    exit;
}


$id = $_GET['id'];

$sql = "UPDATE users SET userStatus = 'Active' WHERE Users_id = ?";
$stmt = $pdo->prepare($sql);
$success = $stmt->execute([$id]);

echo json_encode(["success" => $success]);