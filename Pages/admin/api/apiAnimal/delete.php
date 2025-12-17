<?php
require_once "../../../../config.php";
header("Content-Type: application/json");

if (empty($_POST['Ani_id'])) {
    echo json_encode([
        "success" => false,
        "message" => "Animal ID is required"
    ]);
    exit;
}

$animalId = $_POST['Ani_id'];

$sql = "DELETE FROM Animal WHERE Ani_id = ?";
$stmt = $pdo->prepare($sql);
$success = $stmt->execute([$animalId]);

echo json_encode([
    "success" => $success
]);