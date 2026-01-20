<?php
require 'db.php';
header("Content-Type: application/json");

$query = isset($_GET['q']) ? trim($_GET['q']) : '';

if ($query === '') {
    echo json_encode([]);
    exit;
}

try {
    $stmt = $pdo->prepare("SELECT id, product_name, image_url, image_paths FROM products WHERE product_name LIKE :query LIMIT 10");
    $stmt->execute(['query' => "%$query%"]);

    $products = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $image = $row['image_url'];

        if (empty($image)) {
            // remove leading 'admin/' if present
            $raw = preg_replace('/^admin\//', '', $row['image_paths']);
            $decoded = json_decode($raw, true);

            if (is_array($decoded) && count($decoded) > 0) {
                $image = 'admin/' . ltrim($decoded[0], '/');
            } else {
                $image = ''; // fallback
            }
        }

        $products[] = [
            'id' => $row['id'],
            'name' => $row['product_name'],
            'image' => $image,
        ];
    }

    echo json_encode($products);
} catch (PDOException $e) {
    error_log("Search error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(["error" => "Database query failed."]);
}
