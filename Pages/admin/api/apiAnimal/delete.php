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
$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "i", $animalId);

$success = mysqli_stmt_execute($stmt);

echo json_encode([
    "success" => $success
]);