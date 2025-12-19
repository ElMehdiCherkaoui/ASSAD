<?php
require_once "../../../config.php";

header("Content-Type: application/json");
if (
    empty($_POST['status']) ||
    empty($_POST['ediguiId']) 
) {
    echo json_encode([
        "success" => false,
        "message" => "Missing required fields"
    ]);
    exit;
}
$status    = $_POST['status'];
$id       = $_POST['ediguiId'];
$sql = "UPDATE visitesGuidees SET
            statut = ?
        WHERE guided_id = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "si",
    $status,
    $id
);

$success = mysqli_stmt_execute($stmt);

echo json_encode([
    "success" => $success
]);