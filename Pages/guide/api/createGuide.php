<?php
require_once "../../../config.php";
header("Content-Type: application/json");

if (
    empty($_POST['title']) ||
    empty($_POST['date']) ||
    empty($_POST['duration']) ||
    empty($_POST['language']) ||
    empty($_POST['capacity']) ||
    empty($_POST['price'])
) {
    echo json_encode([
        "success" => false,
        "message" => "Missing required fields"
    ]);
    exit;
}

$title = $_POST['title'];
$date = $_POST['date'];
$duration = $_POST['duration'];
$language = $_POST['language'];
$capacity = $_POST['capacity'];
$price = $_POST['price'];
$id = null;

$sql = "INSERT INTO visitesGuidees 
(title, date_time, languages, max_capacity, duree, price, user_guide_id)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);

$success = $stmt->execute([
    $title,
    $date,
    $language,
    $capacity,
    $duration,
    $price,
    $id
]);

echo json_encode(["success" => $success]);