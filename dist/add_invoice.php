





<?php
include 'db.php'; // $con should be a PDO connection

header('Content-Type: text/plain');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate required fields
    // Accept a_c_id as alternative to c_id
    $required = ['invoice_no', 'invoice_date'];
    $c_id = isset($_POST['c_id']) ? $_POST['c_id'] : null;
    $a_c_id = isset($_POST['a_c_id']) ? $_POST['a_c_id'] : null;
// Always start session and set $admin_id before any use
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$admin_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
if (!$c_id && $a_c_id) {
    // Look up c_id from a_c_id and admin_id
    $stmt_lookup = $con->prepare("SELECT c_id FROM customers WHERE a_c_id = ? AND a_id = ?");
    $stmt_lookup->execute([$a_c_id, $admin_id]);
    $c_id = $stmt_lookup->fetchColumn();
    if (!$c_id) {
        http_response_code(400);
        echo "Invalid a_c_id for this admin.";
        exit;
    }
}
    if (!$c_id) {
        $stmt_lookup->execute([$a_c_id, $admin_id]);
        echo "Customer ID (c_id) or Admin Customer ID (a_c_id) is required.";
        exit;
    }
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            http_response_code(400);
            echo ucfirst(str_replace('_', ' ', $field)) . " is required.";
            exit;
        }
    }

    if (!$admin_id) {
        http_response_code(403);
        echo "Admin not logged in.";
        exit;
    }
    try {
        // Fetch a_c_id from customers table for this c_id and admin
        $stmt_acid = $con->prepare("SELECT a_c_id FROM customers WHERE c_id = ? AND a_id = ?");
        $stmt_acid->execute([$c_id, $admin_id]);
        $a_c_id_db = $stmt_acid->fetchColumn();
        if ($a_c_id_db === false) $a_c_id_db = 0;

        $stmt = $con->prepare("INSERT INTO invoice_details 
            (c_id, a_c_id, invoice_no, invoice_date, delivery_note, mode_or_terms_of_payment,
             reference_no_date, other_references, buyers_order_no, buyers_order_date,
             dispatch_doc_no, delivery_note_date, dispatched_through, destination, terms_of_delivery, a_id)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->execute([
            $c_id,
            $a_c_id_db,
            $_POST['invoice_no'],
            $_POST['invoice_date'],
            $_POST['delivery_note'] ?? '',
            $_POST['mode_or_terms_of_payment'] ?? '',
            $_POST['reference_no_date'] ?? '',
            $_POST['other_references'] ?? '',
            $_POST['buyers_order_no'] ?? '',
            (isset($_POST['buyers_order_date']) && $_POST['buyers_order_date'] !== '' ? $_POST['buyers_order_date'] : null),
            $_POST['dispatch_doc_no'] ?? '',
            (isset($_POST['delivery_note_date']) && $_POST['delivery_note_date'] !== '' ? $_POST['delivery_note_date'] : null),
            $_POST['dispatched_through'] ?? '',
            $_POST['destination'] ?? '',
            $_POST['terms_of_delivery'] ?? '',
            $admin_id
        ]);
        echo "Invoice added successfully";
    } catch (PDOException $e) {
        http_response_code(500);
        if ($e->getCode() == 23000) {
            echo "Invalid customer (c_id) or duplicate invoice.";
        } else {
            echo "Error adding invoice: " . $e->getMessage();
        }
    }
    exit;
}

// No output for GET requests (AJAX expects only POST for add)
?>