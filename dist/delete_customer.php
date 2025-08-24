<?php
include 'db.php'; // your connection file

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $con->prepare("UPDATE customers SET status = 'inactive' WHERE c_id = ?");
    $stmt->execute([$id]);
    header("Location: customer.php"); // redirect back
    exit;
}
?>
