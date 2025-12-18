<?php
require_once "../../../../config.php";

header("Content-Type: application/json");


if (
    empty($_POST['id']) ||
    empty($_POST['Name']) ||
    empty($_POST['type'])
) {
    echo json_encode([
        "success" => false,
        "message" => "Missing required fields"
    ]);
    exit;
}
$id = $_POST['id'];
$Name = $_POST['Name'];
$type = $_POST['type'];
$description = $_POST['description'];
$zone = $_POST['zone'];

$sql = "UPDATE Habitats SET
            habitatsName = ?,
            descriptionHab = ?,
            typeClimat = ?,
            zoo_zone = ?
        WHERE Hab_id = ?";

$stmt = $pdo->prepare($sql);

$success = $stmt->execute([
    $Name,
    $description,
    $type,
    $zone,
    $id
]);

echo json_encode([
    "success" => $success
]);