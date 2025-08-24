<?php
session_start();
// Debug: Log session and POST data
file_put_contents('add_items_debug.log', "Session: " . print_r($_SESSION, true) . "\nPOST: " . print_r($_POST, true) . "\n", FILE_APPEND);
// Redirect to login if not logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Not logged in.']);
    exit;
}
require_once 'db.php'; // include PDO connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $goods_name = isset($_POST['goods_name']) ? trim($_POST['goods_name']) : '';
    if ($goods_name !== '') {
        try {
            $stmt = $con->prepare('INSERT INTO goods (goods_name) VALUES (:goods_name)');
            $stmt->bindParam(':goods_name', $goods_name);
            $stmt->execute();
            echo json_encode(['status' => 'success', 'message' => 'Goods added successfully.']);
        } catch (PDOException $e) {
            echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Goods name is required.']);
    }
    exit;
}
?>