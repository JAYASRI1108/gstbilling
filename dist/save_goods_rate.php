
<?php
session_start();
header('Content-Type: application/json');
require_once 'db.php'; // $con must be a PDO connection

function respond($status, $message = '') {
    echo json_encode(['status' => $status, 'message' => $message]);
    exit;
}

if (!isset($_SESSION['user_id'])) {
    respond('error', 'Not logged in.');
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond('error', 'Invalid request method.');
}

$cgst_percent = isset($_POST['cgst_percent']) ? intval($_POST['cgst_percent']) : null;
$sgst_percent = isset($_POST['sgst_percent']) ? intval($_POST['sgst_percent']) : null;

$a_id = isset($_POST['a_id']) ? intval($_POST['a_id']) : 0;
$a_c_id = isset($_POST['a_c_id']) ? intval($_POST['a_c_id']) : 0;
$c_id = isset($_POST['c_id']) ? intval($_POST['c_id']) : 0;
$invoice_id = isset($_POST['invoice_id']) ? intval($_POST['invoice_id']) : 0;

$g_id_arr = isset($_POST['g_id']) ? $_POST['g_id'] : [];
$hsn_sac_arr = isset($_POST['hsn_sac']) ? $_POST['hsn_sac'] : [];
$quantity_arr = isset($_POST['quantity']) ? $_POST['quantity'] : [];
$rate_arr = isset($_POST['rate']) ? $_POST['rate'] : [];
$discount_percent_arr = isset($_POST['discount_percent']) ? $_POST['discount_percent'] : [];
$amount_arr = isset($_POST['amount']) ? $_POST['amount'] : [];

if (!$a_id || !$c_id || !$invoice_id || count($g_id_arr) === 0) {
    respond('error', 'Missing required fields.');
}

// Remove previous items for this invoice (optional, for update)
$stmt_del = $con->prepare("UPDATE store_goods SET status='inactive' WHERE invoice_id=? AND status='active'");
$stmt_del->execute([$invoice_id]);

// Save CGST/SGST percent to invoice_details table (common for invoice)
if ($invoice_id && ($cgst_percent !== null || $sgst_percent !== null)) {
    $update_sql = "UPDATE invoice_details SET cgst_percent=?, sgst_percent=? WHERE invoice_id=?";
    $stmt_upd = $con->prepare($update_sql);
    $stmt_upd->execute([$cgst_percent, $sgst_percent, $invoice_id]);
}

for ($i = 0; $i < count($g_id_arr); $i++) {
    $g_id = intval($g_id_arr[$i]);
    $hsn_sac = $hsn_sac_arr[$i];
    $quantity = floatval($quantity_arr[$i]);
    $rate = floatval($rate_arr[$i]);
    $discount_percent = isset($discount_percent_arr[$i]) ? floatval($discount_percent_arr[$i]) : 0;
    $amount = floatval($amount_arr[$i]);

    // Fetch goods_name from goods table
    $goods_name = '';
    $stmt_g = $con->prepare("SELECT goods_name FROM goods WHERE g_id=? LIMIT 1");
    $stmt_g->execute([$g_id]);
    $row_g = $stmt_g->fetch(PDO::FETCH_ASSOC);
    if ($row_g && isset($row_g['goods_name'])) {
        $goods_name = $row_g['goods_name'];
    }

    $stmt = $con->prepare("INSERT INTO store_goods (a_id, a_c_id, c_id, invoice_id, g_id, goods_name, hsn_sac, quantity, rate, discount_percent, amount, status, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'active', NOW())");
    $ok = $stmt->execute([$a_id, $a_c_id, $c_id, $invoice_id, $g_id, $goods_name, $hsn_sac, $quantity, $rate, $discount_percent, $amount]);
    if (!$ok) {
        respond('error', 'Failed to save: ' . implode(' | ', $stmt->errorInfo()));
    }
}

respond('success');