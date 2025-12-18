<?php
require_once "../../../../config.php";
header("Content-Type: application/json");

if (empty($_POST['id_Hab'])) {
    echo json_encode([
        "success" => false,
        "message" => "Habitat ID is required"
    ]);
    exit;
}

$HabitatId = $_POST['id_Hab'];

$sql = "DELETE FROM Habitats WHERE Hab_id = ?";

$stmt = $pdo->prepare($sql);
$success = $stmt->execute([$HabitatId]);

echo json_encode([
    "success" => $success
]);
