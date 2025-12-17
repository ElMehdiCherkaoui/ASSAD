<?php
require_once "../../../../config.php";

header("Content-Type: application/json");

$sql = "SELECT 
            Hab_id,
            habitatsName,
        FROM Habitats";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$Habitats = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($Habitats);