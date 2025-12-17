<?php
require_once "../../../config.php";

header("Content-Type: application/json");

$sql = "SELECT 
            Users_id,
            userName,
            userEmail,
            userRole,
            userStatus
        FROM users";


$stmt = $pdo->prepare($sql);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($users);