<?php
require_once "../../../../config.php";
header("Content-Type: application/json");

if (
    empty($_POST['animalName']) ||
    empty($_POST['espèce']) ||
    empty($_POST['alimentation']) ||
    empty($_POST['Habitat_ID']) ||
    empty($_POST['paysOrigine'])
) {
    echo json_encode([
        "success" => false,
        "message" => "Missing required fields"
    ]);
    exit;
}

$animalName  = $_POST['animalName'];
$espece      = $_POST['espèce'];
$alimentation = $_POST['alimentation'];
$habitatId   = $_POST['Habitat_ID'];
$paysOrigine = $_POST['paysOrigine'];
$image       = $_POST['Image'] ?? null;
$description = $_POST['descriptionCourte'] ?? null;

$sql = "INSERT INTO Animal 
(animalName, espèce, alimentation, Image, paysOrigine, descriptionCourte, Habitat_ID)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);

$success = $stmt->execute([
    $animalName,
    $espece,
    $alimentation,
    $image,
    $paysOrigine,
    $description,
    $habitatId
]);

echo json_encode([
    "success" => $success
]);