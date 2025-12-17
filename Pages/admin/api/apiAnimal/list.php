<?php
require_once "../../../../config.php";

header("Content-Type: application/json");

$sql = "SELECT 
            a.Ani_id,
            a.animalName,
            a.espèce,
            a.alimentation,
            a.paysOrigine,
            a.Image,
            h.habitatsName
        FROM Animal a
        LEFT JOIN Habitats h ON a.Habitat_ID = h.Hab_id";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$animals = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($animals);