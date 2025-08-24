<?php
session_start();
require_once 'db.php';
header('Content-Type: application/json');
try {
    $stmt = $con->query('SELECT g_id, goods_name FROM goods ORDER BY goods_name ASC');
    $goods = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($goods);
} catch (PDOException $e) {
    echo json_encode([]);
}
