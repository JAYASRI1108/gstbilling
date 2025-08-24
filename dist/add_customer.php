<?php
header('Content-Type: application/json');

// Include database connection
$host = "localhost";      // or your DB host (e.g., 127.0.0.1 or remote IP)
$dbname = "billing" ; // change to your DB name
$username = "root";     // change to your DB username
$password = "";     // change to your DB password

$response = ["success" => false, "message" => "Unknown error."];

try {
    $con = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    session_start();
    $admin_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

    $c_id = isset($_POST['c_id']) ? trim($_POST['c_id']) : '';
    $c_name = isset($_POST['c_name']) ? trim($_POST['c_name']) : '';
    $c_address = isset($_POST['c_address']) ? trim($_POST['c_address']) : '';
    $c_gstno = isset($_POST['c_gstno']) ? trim($_POST['c_gstno']) : '';
    $c_state = isset($_POST['c_state']) ? trim($_POST['c_state']) : '';
    $c_code = isset($_POST['c_code']) ? trim($_POST['c_code']) : '';

    // Basic validation
    if ($c_name == '' || $c_address == '' || $c_gstno == '' || $c_state == '' || $c_code == '') {
        $response['message'] = 'All fields are required.';
        echo json_encode($response);
        exit;
    }
    if (!$admin_id) {
        $response['message'] = 'Admin not logged in.';
        echo json_encode($response);
        exit;
    }

    if ($c_id != '') {
        // Update existing customer (do not change a_id)
        $stmt = $con->prepare("UPDATE customers SET c_name=?, c_address=?, c_gstno=?, c_state=?, c_code=? WHERE c_id=? AND a_id=?");
        $result = $stmt->execute([$c_name, $c_address, $c_gstno, $c_state, $c_code, $c_id, $admin_id]);
        if ($result) {
            $response['success'] = true;
            $response['message'] = 'Customer updated successfully.';
        } else {
            $response['message'] = 'Failed to update customer.';
        }
    } else {
        // Get next a_c_id for this admin
        $stmt = $con->prepare("SELECT MAX(a_c_id) FROM customers WHERE a_id = ?");
        $stmt->execute([$admin_id]);
        $max_acid = $stmt->fetchColumn();
        $next_acid = ($max_acid === null || $max_acid === false) ? 1 : ($max_acid + 1);

        // Add new customer with a_id and a_c_id
        $stmt = $con->prepare("INSERT INTO customers (c_name, c_address, c_gstno, c_state, c_code, status, created_at, a_id, a_c_id) VALUES (?, ?, ?, ?, ?, 'active', NOW(), ?, ?)");
        $result = $stmt->execute([$c_name, $c_address, $c_gstno, $c_state, $c_code, $admin_id, $next_acid]);
        if ($result) {
            $response['success'] = true;
            $response['message'] = 'Customer added successfully.';
        } else {
            $response['message'] = 'Failed to add customer.';
        }
    }
} catch (PDOException $e) {
    $response['message'] = 'Database error: ' . $e->getMessage();
}

echo json_encode($response);

