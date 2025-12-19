<?php
require_once "../../../config.php";

$sql = "SELECT * FROM visitesGuidees";

$result = mysqli_query($conn, $sql);

$Guides = [];

while ($row = mysqli_fetch_assoc($result)) {
    $Guides[] = $row;
}

echo json_encode($Guides);