<?php
require_once "../../../../config.php";

header("Content-Type: application/json");

if (
    empty($_POST['Name']) ||
    empty($_POST['type'])
) {
    echo json_encode([
        "success" => false,
        "message" => "Missing required fields"
    ]);
    exit;
}

$Name = $_POST['Name'];
$type = $_POST['type'];
$description = $_POST['description'];
$zone = $_POST['zone'];

$sql = "INSERT INTO Habitats 
(habitatsName, typeClimat, descriptionHab, zoo_zone)
VALUES (?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);

$success = $stmt->execute([
    $Name,
    $type,
    $description,
    $zone
]);

echo json_encode(["success" => $success]);
