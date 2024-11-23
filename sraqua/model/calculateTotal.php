<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);
$total = 0;

if (isset($data['parts'])) {
    foreach ($data['parts'] as $part) {
        $quantity = floatval($part['quantity']);
        $price = floatval($part['price']);
        $total += $quantity * $price;
    }
}

echo json_encode(['total' => $total]);
?>
