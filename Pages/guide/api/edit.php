<?php
require_once "../../../config.php";

header("Content-Type: application/json");

if (
    empty($_POST['ediguiId']) ||
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

$id       = $_POST['ediguiId'];
$title    = $_POST['title'];
$date     = $_POST['date'];
$duration = $_POST['duration'];
$language = $_POST['language'];
$capacity = $_POST['capacity'];
$price    = $_POST['price'];

$sql = "UPDATE visitesGuidees SET
            title = ?,
            date_time = ?,
            duree = ?,
            languages = ?,
            max_capacity = ?,
            price = ?
        WHERE guided_id = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "ssisiii",
    $title,
    $date,
    $duration,
    $language,
    $capacity,
    $price,
    $id
);

$success = mysqli_stmt_execute($stmt);

echo json_encode([
    "success" => $success
]);