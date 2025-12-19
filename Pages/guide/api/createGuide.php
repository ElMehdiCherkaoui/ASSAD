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

$title    = $_POST['title'];
$date     = $_POST['date'];
$duration = $_POST['duration'];
$language = $_POST['language'];
$capacity = $_POST['capacity'];
$price    = $_POST['price'];
$id       = null;

$sql = "INSERT INTO visitesGuidees 
(title, date_time, languages, max_capacity, duree, price, user_guide_id)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sssiddi",
    $title,
    $date,
    $language,
    $capacity,
    $duration,
    $price,
    $id
);

$success = mysqli_stmt_execute($stmt);

echo json_encode(["success" => $success]);
