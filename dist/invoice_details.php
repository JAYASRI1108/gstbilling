<?php
// Start session at the very top to avoid headers already sent warning
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GST Billing</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/vertical-light-layout/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
        
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/stellar-admin-template/"><i class="icon-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="icon-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="assets/images/jaisri.png" alt="logo" class="logo-dark" />
            <img src="assets/images/logo-light.svg" alt="logo-light" class="logo-light">
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Billing dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
           
            <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex">
                  <i class="flag-icon flag-icon-us"></i>
                </div>
                <span class="profile-text font-weight-normal">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-us"></i> English </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-fr"></i> French </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ae"></i> Arabic </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ru"></i> Russian </a>
              </div>
            </li>

          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
          
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                
                <div class="text-wrapper">
                  <p class="profile-name">Jayasri</p>
                  <p class="designation">Administrator</p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">UI Elements</span></li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Customers</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Add Customers</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <span class="menu-title">Icons</span>
                <i class="icon-globe menu-icon"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
                <span class="menu-title">Forms</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
              <div class="collapse" id="forms">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/forms/basic_elements.html">Form Elements</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <span class="menu-title">Charts</span>
                <i class="icon-chart menu-icon"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <span class="menu-title">Tables</span>
                <i class="icon-grid menu-icon"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic Table</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Extra Pages</span></li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">User Pages</span>
                <i class="icon-disc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Help</span></li>
            <li class="nav-item">
              <a class="nav-link" href="../../docs/documentation.html" target="_blank">
                <span class="menu-title">Documentation</span>
                <i class="icon-folder-alt menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row mb-4">
              <div class="col-md-12 d-flex gap-2">
                <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#addInvoiceModal">
                  Add Invoice
                </button>
                <button type="button" class="btn btn-warning" id="editInvoiceBtn" data-bs-toggle="modal" data-bs-target="#editInvoiceModal">
                  Edit Invoice
                </button>
              </div>
            </div>
            <!-- Edit Invoice Modal -->
            <div class="modal fade" id="editInvoiceModal" tabindex="-1" aria-labelledby="editInvoiceModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editInvoiceModalLabel">Edit Invoice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
<form id="editInvoiceForm">
  <?php
    // Pre-fill with latest invoice for this customer
    $edit_invoice = isset($invoice) ? $invoice : null;
    $edit_invoice_id = $edit_invoice ? $edit_invoice['invoice_id'] : '';
    $edit_invoice_no = $edit_invoice && !empty($edit_invoice['invoice_no']) ? htmlspecialchars($edit_invoice['invoice_no']) : '';
    // Format date for input type="date" (YYYY-MM-DD or empty)
    $edit_invoice_date = $edit_invoice && !empty($edit_invoice['invoice_date']) && $edit_invoice['invoice_date'] !== '0000-00-00' ? htmlspecialchars($edit_invoice['invoice_date']) : '';
    $edit_delivery_note = $edit_invoice ? htmlspecialchars($edit_invoice['delivery_note']) : '';
    $edit_mode_or_terms_of_payment = $edit_invoice ? htmlspecialchars($edit_invoice['mode_or_terms_of_payment']) : '';
    $edit_reference_no_date = $edit_invoice ? htmlspecialchars($edit_invoice['reference_no_date']) : '';
    $edit_other_references = $edit_invoice ? htmlspecialchars($edit_invoice['other_references']) : '';
    $edit_buyers_order_no = $edit_invoice ? htmlspecialchars($edit_invoice['buyers_order_no']) : '';
    $edit_buyers_order_date = $edit_invoice ? htmlspecialchars($edit_invoice['buyers_order_date']) : '';
    $edit_dispatch_doc_no = $edit_invoice ? htmlspecialchars($edit_invoice['dispatch_doc_no']) : '';
    $edit_delivery_note_date = $edit_invoice ? htmlspecialchars($edit_invoice['delivery_note_date']) : '';
    $edit_dispatched_through = $edit_invoice ? htmlspecialchars($edit_invoice['dispatched_through']) : '';
    $edit_destination = $edit_invoice ? htmlspecialchars($edit_invoice['destination']) : '';
    $edit_terms_of_delivery = $edit_invoice ? htmlspecialchars($edit_invoice['terms_of_delivery']) : '';
  ?>
  <input type="hidden" name="invoice_id" value="<?php echo $edit_invoice_id; ?>">
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="edit_invoice_date" class="form-label">Dated</label>
      <input type="date" class="form-control" id="edit_invoice_date" name="invoice_date" value="<?php echo $edit_invoice_date; ?>" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="edit_invoice_no" class="form-label">Invoice No</label>
      <input type="text" class="form-control" id="edit_invoice_no" name="invoice_no" value="<?php echo $edit_invoice_no; ?>" readonly>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="edit_delivery_note" class="form-label">Delivery Note</label>
      <input type="text" class="form-control" id="edit_delivery_note" name="delivery_note" value="<?php echo $edit_delivery_note; ?>">
    </div>
    <div class="col-md-6 mb-3">
      <label for="edit_mode_or_terms_of_payment" class="form-label">Mode/Terms of Payment</label>
      <input type="text" class="form-control" id="edit_mode_or_terms_of_payment" name="mode_or_terms_of_payment" value="<?php echo $edit_mode_or_terms_of_payment; ?>">
    </div>
    <div class="col-md-6 mb-3">
      <label for="edit_reference_no_date" class="form-label">Reference No. & Date</label>
      <input type="text" class="form-control" id="edit_reference_no_date" name="reference_no_date" value="<?php echo $edit_reference_no_date; ?>">
    </div>
    <div class="col-md-6 mb-3">
      <label for="edit_other_references" class="form-label">Other References</label>
      <input type="text" class="form-control" id="edit_other_references" name="other_references" value="<?php echo $edit_other_references; ?>">
    </div>
    <div class="col-md-6 mb-3">
      <label for="edit_buyers_order_no" class="form-label">Buyer's Order No.</label>
      <input type="text" class="form-control" id="edit_buyers_order_no" name="buyers_order_no" value="<?php echo $edit_buyers_order_no; ?>">
    </div>
    <div class="col-md-6 mb-3">
      <label for="edit_buyers_order_date" class="form-label">Dated</label>
      <input type="date" class="form-control" id="edit_buyers_order_date" name="buyers_order_date" value="<?php echo $edit_buyers_order_date; ?>">
    </div>
    <div class="col-md-6 mb-3">
      <label for="edit_dispatch_doc_no" class="form-label">Dispatch Doc No.</label>
      <input type="text" class="form-control" id="edit_dispatch_doc_no" name="dispatch_doc_no" value="<?php echo $edit_dispatch_doc_no; ?>">
    </div>
    <div class="col-md-6 mb-3">
      <label for="edit_delivery_note_date" class="form-label">Delivery Note Date</label>
      <input type="date" class="form-control" id="edit_delivery_note_date" name="delivery_note_date" value="<?php echo $edit_delivery_note_date; ?>">
    </div>
    <div class="col-md-6 mb-3">
      <label for="edit_dispatched_through" class="form-label">Dispatched Through</label>
      <input type="text" class="form-control" id="edit_dispatched_through" name="dispatched_through" value="<?php echo $edit_dispatched_through; ?>">
    </div>
    <div class="col-md-6 mb-3">
      <label for="edit_destination" class="form-label">Destination</label>
      <input type="text" class="form-control" id="edit_destination" name="destination" value="<?php echo $edit_destination; ?>">
    </div>
    <div class="col-12 mb-3">
      <label for="edit_terms_of_delivery" class="form-label">Terms of Delivery</label>
      <textarea class="form-control" id="edit_terms_of_delivery" name="terms_of_delivery" rows="2"><?php echo $edit_terms_of_delivery; ?></textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Update</button>
</form>
<script>
// Invoice number update on date change (Edit)
function generateEditInvoiceNo(a_c_id, invoiceDate) {
  let year = new Date(invoiceDate).getFullYear().toString().slice(-2);
  return `${a_c_id}/${year}`;
}
document.getElementById('edit_invoice_date').addEventListener('change', setEditInvoiceNo);
function setEditInvoiceNo() {
  var a_c_id = '<?php echo isset($_GET["a_c_id"]) ? $_GET["a_c_id"] : (isset($_GET["c_id"]) ? $_GET["c_id"] : (isset($_SESSION["customer_id"]) ? $_SESSION["customer_id"] : "")); ?>';
  var invoiceDate = document.getElementById('edit_invoice_date').value;
  if (!a_c_id || !invoiceDate) {
    document.getElementById('edit_invoice_no').value = '';
    return;
  }
  document.getElementById('edit_invoice_no').value = generateEditInvoiceNo(a_c_id, invoiceDate);
}

// Helper: Fill Edit Invoice form fields with data
function fillEditInvoiceForm(data) {
  document.getElementById('edit_invoice_date').value = data.invoice_date || '';
  document.getElementById('edit_invoice_no').value = data.invoice_no || '';
  document.getElementById('edit_delivery_note').value = data.delivery_note || '';
  document.getElementById('edit_mode_or_terms_of_payment').value = data.mode_or_terms_of_payment || '';
  document.getElementById('edit_reference_no_date').value = data.reference_no_date || '';
  document.getElementById('edit_other_references').value = data.other_references || '';
  document.getElementById('edit_buyers_order_no').value = data.buyers_order_no || '';
  document.getElementById('edit_buyers_order_date').value = data.buyers_order_date || '';
  document.getElementById('edit_dispatch_doc_no').value = data.dispatch_doc_no || '';
  document.getElementById('edit_delivery_note_date').value = data.delivery_note_date || '';
  document.getElementById('edit_dispatched_through').value = data.dispatched_through || '';
  document.getElementById('edit_destination').value = data.destination || '';
  document.getElementById('edit_terms_of_delivery').value = data.terms_of_delivery || '';
  // Remove all existing hidden invoice_id inputs to avoid duplicates
  var invoiceIdInputs = document.querySelectorAll('#editInvoiceForm input[name="invoice_id"]');
  invoiceIdInputs.forEach(function(input, idx) {
    if (idx > 0) input.remove();
  });
  var invoiceIdInput = document.querySelector('#editInvoiceForm input[name="invoice_id"]');
  if (!invoiceIdInput) {
    invoiceIdInput = document.createElement('input');
    invoiceIdInput.type = 'hidden';
    invoiceIdInput.name = 'invoice_id';
    document.getElementById('editInvoiceForm').appendChild(invoiceIdInput);
  }
  invoiceIdInput.value = data.invoice_id || '';
}

// When Edit Invoice modal opens, fetch and fill data
document.getElementById('editInvoiceBtn').addEventListener('click', function() {
  // Clear all fields and invoice_id before fetching new data
  document.getElementById('edit_invoice_date').value = '';
  document.getElementById('edit_invoice_no').value = '';
  document.getElementById('edit_delivery_note').value = '';
  document.getElementById('edit_mode_or_terms_of_payment').value = '';
  document.getElementById('edit_reference_no_date').value = '';
  document.getElementById('edit_other_references').value = '';
  document.getElementById('edit_buyers_order_no').value = '';
  document.getElementById('edit_buyers_order_date').value = '';
  document.getElementById('edit_dispatch_doc_no').value = '';
  document.getElementById('edit_delivery_note_date').value = '';
  document.getElementById('edit_dispatched_through').value = '';
  document.getElementById('edit_destination').value = '';
  document.getElementById('edit_terms_of_delivery').value = '';
  var invoiceIdInput = document.querySelector('input[name="invoice_id"]');
  if (invoiceIdInput) invoiceIdInput.value = '';

  // Get a_c_id or c_id from PHP
  var a_c_id = '<?php echo isset($_GET["a_c_id"]) ? $_GET["a_c_id"] : ""; ?>';
  var c_id = '<?php echo isset($_GET["c_id"]) ? $_GET["c_id"] : ""; ?>';
  var url = 'get_invoice.php?';
  if (a_c_id) {
    url += 'a_c_id=' + encodeURIComponent(a_c_id);
  } else if (c_id) {
    url += 'c_id=' + encodeURIComponent(c_id);
  } else {
    alert('No customer selected');
    return;
  }

  fetch(url)
    .then(response => response.json())
    .then(data => {
      if (data && !data.error) {
        fillEditInvoiceForm(data);
      } else {
        alert(data.error || 'Failed to fetch invoice data');
      }
    })
    .catch(() => alert('Error fetching invoice data'));
});

// Handle Edit Invoice form submit via AJAX
document.getElementById('editInvoiceForm').addEventListener('submit', function(e) {
  e.preventDefault();
  var form = e.target;
  var formData = new FormData(form);
  var invoiceId = formData.get('invoice_id');
  console.log('Submitting invoice_id:', invoiceId);
  if (!invoiceId) {
    alert('Invoice ID is missing before submit!');
    return;
  }
  fetch('edit_invoice.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    if (data.includes('Invoice updated successfully')) {
      alert('Invoice updated successfully!');
      location.reload();
    } else {
      alert(data);
    }
  })
  .catch(error => {
    alert('Error: ' + error);
  });
});
</script>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container to display fetched invoice/customer details -->
          <div class="row mt-2">
            <div class="col-md-12">
              <div class="card shadow border-0 rounded-3">
                <div class="card-header p-3" style="background: #007bff; color: #fff; font-weight: 600; font-size: 1.1rem;">
                  <i class="fa fa-file-invoice me-2"></i>Invoice Details
                </div>
                <div class="card-body">
                  <style>
                    .details-table th, .details-table td { text-align: center; vertical-align: middle; }
                    .details-table th { background: #f5f5f5; font-weight: 600; }
                    .details-table { width: 100%; border-collapse: collapse; margin-bottom: 0; }
                    .details-table td, .details-table th { border: 1px solid #ddd; padding: 8px; }
                  </style>
                  <?php
                  // Start session at the very top to avoid headers already sent warning
                  if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                  }
                  // Fetch latest invoice for the current customer
                  $host = "localhost";
                  $dbname = "billing";
                  $username = "root";
                  $password = "";
                  try {
                    $con = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $admin_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
                    // Accept a_c_id in URL and look up c_id for this admin
                    $a_c_id = isset($_GET["a_c_id"]) ? $_GET["a_c_id"] : null;
                    $customerId = null;
                    if ($a_c_id && $admin_id) {
                      $stmt_lookup = $con->prepare("SELECT c_id FROM customers WHERE a_c_id = ? AND a_id = ?");
                      $stmt_lookup->execute([$a_c_id, $admin_id]);
                      $customerId = $stmt_lookup->fetchColumn();
                    } else if (isset($_GET["c_id"])) {
                      $customerId = $_GET["c_id"];
                    } else if (isset($_SESSION["customer_id"])) {
                      $customerId = $_SESSION["customer_id"];
                    }
                    if ($customerId) {
                      // Get customer info
                      $stmt = $con->prepare("SELECT c_name, c_gstno, c_code FROM customers WHERE c_id = ?");
                      $stmt->execute([$customerId]);
                      $customer = $stmt->fetch(PDO::FETCH_ASSOC);
                      // Get latest invoice for this customer
                      $stmt2 = $con->prepare("SELECT * FROM invoice_details WHERE c_id = ? ORDER BY invoice_id DESC LIMIT 1");
                      $stmt2->execute([$customerId]);
                      $invoice = $stmt2->fetch(PDO::FETCH_ASSOC);
                      echo '<table class="details-table">';
                      echo '<tr>';
                      echo '<th>Particulars</th>';
                      echo '<th>Details</th>';
                      echo '</tr>';
                      // Mandatory fields
                      echo '<tr><td>Company Name</td><td>' . htmlspecialchars($customer['c_name']) . '</td></tr>';
                      echo '<tr><td>GSTIN/UIN</td><td>' . htmlspecialchars($customer['c_gstno']) . '</td></tr>';
                      echo '<tr><td>Code</td><td>' . htmlspecialchars($customer['c_code']) . '</td></tr>';
                      echo '<tr><td>Invoice Date</td><td>' . (isset($invoice['invoice_date']) ? htmlspecialchars($invoice['invoice_date']) : '-') . '</td></tr>';
                      echo '<tr><td>Invoice No</td><td>' . (isset($invoice['invoice_no']) ? htmlspecialchars($invoice['invoice_no']) : '-') . '</td></tr>';
                      // Optional fields: display only if filled
                      if ($invoice) {
                        $optionalFields = [
                          'delivery_note' => 'Delivery Note',
                          'mode_or_terms_of_payment' => 'Mode/Terms of Payment',
                          'reference_no_date' => 'Reference No. & Date',
                          'other_references' => 'Other References',
                          'buyers_order_no' => "Buyer's Order No.",
                          'buyers_order_date' => "Buyer's Order Date",
                          'dispatch_doc_no' => 'Dispatch Doc No.',
                          'delivery_note_date' => 'Delivery Note Date',
                          'dispatched_through' => 'Dispatched Through',
                          'destination' => 'Destination',
                          'terms_of_delivery' => 'Terms of Delivery'
                        ];
                        foreach ($optionalFields as $field => $label) {
                          $value = isset($invoice[$field]) ? $invoice[$field] : '';
                          // Hide if empty or default date value
                          if (!empty($value) && $value !== '0000-00-00' && $value !== '0000-00-00 00:00:00') {
                            echo '<tr><td>' . $label . '</td><td>' . htmlspecialchars($value) . '</td></tr>';
                          }
                        }
                      }
                      echo '</table>';
                    } else {
                      echo '<div class="alert alert-warning">No customer selected or found.</div>';
                    }
                  } catch (PDOException $e) {
                    echo '<div class="alert alert-danger">Error fetching details: ' . $e->getMessage() . '</div>';
                  }
                  ?>
                </div>
              </div>
            </div>
            </div>
            <div class="modal fade" id="addInvoiceModal" tabindex="-1" aria-labelledby="addInvoiceModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addInvoiceModalLabel">Add Invoice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
<form id="addInvoiceForm">
  <?php if (isset($_GET['a_c_id'])): ?>
    <input type="hidden" name="a_c_id" id="a_c_id" value="<?php echo htmlspecialchars($_GET['a_c_id']); ?>">
  <?php else: ?>
    <input type="hidden" name="c_id" id="c_id" value="<?php echo isset($_GET['c_id']) ? $_GET['c_id'] : (isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : ''); ?>">
  <?php endif; ?>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="invoice_date" class="form-label">Dated</label>
      <input type="date" class="form-control" id="invoice_date" name="invoice_date" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="invoice_no" class="form-label">Invoice No</label>
      <input type="text" class="form-control" id="invoice_no" name="invoice_no" readonly>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="delivery_note" class="form-label">Delivery Note</label>
      <input type="text" class="form-control" id="delivery_note" name="delivery_note">
    </div>
    <div class="col-md-6 mb-3">
      <label for="mode_or_terms_of_payment" class="form-label">Mode/Terms of Payment</label>
      <input type="text" class="form-control" id="mode_or_terms_of_payment" name="mode_or_terms_of_payment">
    </div>
    <div class="col-md-6 mb-3">
      <label for="reference_no_date" class="form-label">Reference No. & Date</label>
      <input type="text" class="form-control" id="reference_no_date" name="reference_no_date">
    </div>
    <div class="col-md-6 mb-3">
      <label for="other_references" class="form-label">Other References</label>
      <input type="text" class="form-control" id="other_references" name="other_references">
    </div>
    <div class="col-md-6 mb-3">
      <label for="buyers_order_no" class="form-label">Buyer's Order No.</label>
      <input type="text" class="form-control" id="buyers_order_no" name="buyers_order_no">
    </div>
    <div class="col-md-6 mb-3">
      <label for="buyers_order_date" class="form-label">Dated</label>
      <input type="date" class="form-control" id="buyers_order_date" name="buyers_order_date">
    </div>
    <div class="col-md-6 mb-3">
      <label for="dispatch_doc_no" class="form-label">Dispatch Doc No.</label>
      <input type="text" class="form-control" id="dispatch_doc_no" name="dispatch_doc_no">
    </div>
    <div class="col-md-6 mb-3">
      <label for="delivery_note_date" class="form-label">Delivery Note Date</label>
      <input type="date" class="form-control" id="delivery_note_date" name="delivery_note_date">
    </div>
    <div class="col-md-6 mb-3">
      <label for="dispatched_through" class="form-label">Dispatched Through</label>
      <input type="text" class="form-control" id="dispatched_through" name="dispatched_through">
    </div>
    <div class="col-md-6 mb-3">
      <label for="destination" class="form-label">Destination</label>
      <input type="text" class="form-control" id="destination" name="destination">
    </div>
    <div class="col-12 mb-3">
      <label for="terms_of_delivery" class="form-label">Terms of Delivery</label>
      <textarea class="form-control" id="terms_of_delivery" name="terms_of_delivery" rows="2"></textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Save</button>
</form>
<script>
function generateInvoiceNo(a_c_id, invoiceDate) {
  let year = new Date(invoiceDate).getFullYear().toString().slice(-2);
  return `${a_c_id}/${year}`;
}
document.getElementById('invoice_date').addEventListener('change', setInvoiceNo);
window.addEventListener('DOMContentLoaded', setInvoiceNo); // Fill invoice no on page load if date is pre-filled
function setInvoiceNo() {
  var a_c_id = '<?php echo isset($_GET["a_c_id"]) ? $_GET["a_c_id"] : (isset($_GET["c_id"]) ? $_GET["c_id"] : (isset($_SESSION["customer_id"]) ? $_SESSION["customer_id"] : "")); ?>';
  var invoiceDate = document.getElementById('invoice_date').value;
  if (!a_c_id || !invoiceDate) {
    document.getElementById('invoice_no').value = '';
    return;
  }
  document.getElementById('invoice_no').value = generateInvoiceNo(a_c_id, invoiceDate);
}
document.getElementById('addInvoiceForm').addEventListener('submit', function(e) {
  e.preventDefault();
  var form = e.target;
  var formData = new FormData(form);
  fetch('add_invoice.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    if (data.includes('Invoice added successfully')) {
      alert('Invoice added successfully!');
      location.reload();
    } else {
      alert(data);
    }
  })
  .catch(error => {
    alert('Error: ' + error);
  });
});
</script>
                  </div>
                </div>
              </div>
            </div>
          <!-- Customer Table Removed as per request -->
          <div class="row mb-4 mt-4">
            <div class="col-md-12 d-flex justify-content-end">
              <?php
              // Check if goods rate details exist for this invoice in store_goods
              $rateDetailsAdded = false;
              if (isset($invoice['invoice_id'])) {
                try {
                  $stmtRate = $con->prepare("SHOW TABLES LIKE 'store_goods'");
                  $stmtRate->execute();
                  if ($stmtRate->fetch()) {
                    $stmtRate = $con->prepare("SELECT COUNT(*) FROM store_goods WHERE invoice_id = ?");
                    $stmtRate->execute([$invoice['invoice_id']]);
                    $rateDetailsAdded = $stmtRate->fetchColumn() > 0;
                  }
                } catch (PDOException $e) {
                  $rateDetailsAdded = false;
                }
              }
              if ($rateDetailsAdded) {
                // Build items.php URL with parameters
                $params = [];
                if (isset($_GET['a_c_id'])) $params[] = 'a_c_id=' . urlencode($_GET['a_c_id']);
                if (isset($_GET['c_id'])) $params[] = 'c_id=' . urlencode($_GET['c_id']);
                if (isset($invoice['invoice_id'])) $params[] = 'invoice_id=' . urlencode($invoice['invoice_id']);
                $itemsUrl = 'items.php' . ($params ? '?' . implode('&', $params) : '');
                echo '<a href="' . $itemsUrl . '" class="btn btn-success" id="rateDetailsAddedBtn">Rate Details Added</a>';
              } else {
                echo '<button type="button" class="btn btn-info" id="addRateDetailsBtn">Add Rate Details</button>';
              }
              ?>
            </div>
          </div>
<script>
// Add Rate Details button click handler
document.getElementById('addRateDetailsBtn').addEventListener('click', function() {
  var a_c_id = '';
  var c_id = '';
  var invoice_id = '';
  var input_acid = document.getElementById('a_c_id');
  var input_cid = document.getElementById('c_id');
  var input_invoiceid = document.getElementById('invoice_id');
  if (input_acid && input_acid.value) {
    a_c_id = input_acid.value;
  } else {
    a_c_id = '<?php echo isset($_GET["a_c_id"]) ? $_GET["a_c_id"] : ""; ?>';
  }
  if (input_cid && input_cid.value) {
    c_id = input_cid.value;
  } else {
    c_id = '<?php echo isset($_GET["c_id"]) ? $_GET["c_id"] : ""; ?>';
  }
  if (input_invoiceid && input_invoiceid.value) {
    invoice_id = input_invoiceid.value;
  } else {
    invoice_id = '<?php echo isset($invoice["invoice_id"]) ? $invoice["invoice_id"] : ""; ?>';
  }
  var url = 'items.php';
  var params = [];
  if (a_c_id) params.push('a_c_id=' + encodeURIComponent(a_c_id));
  if (c_id) params.push('c_id=' + encodeURIComponent(c_id));
  if (invoice_id) params.push('invoice_id=' + encodeURIComponent(invoice_id));
  if (params.length > 0) url += '?' + params.join('&');
  window.location.href = url;
});
</script>
          </div>
          <!-- Container to display fetched invoice/customer details -->
        
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 Stellar. All rights reserved. <a href="#"> Terms of use</a><a href="#">Privacy Policy</a></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/moment/moment.min.js"></script>
    <script src="assets/vendors/daterangepicker/daterangepicker.js"></script>
    <script src="assets/vendors/chartist/chartist.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>