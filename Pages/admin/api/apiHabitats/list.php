<?php
require_once "../../../../config.php";

header("Content-Type: application/json");


$sql = "select * from Habitats";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$habitats = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($habitats);