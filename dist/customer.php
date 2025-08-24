<?php
session_start();

// ✅ Redirect to login if not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
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
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row mb-4">
              <div class="col-md-12">
                <button type="button" class="btn btn-primary" id="openAddCustomerModal">
                  Add Customer
                </button>
              </div>
            </div>
            <!-- Add/Edit Customer Modal -->
            <div class="modal fade" id="customerModal" tabindex="-1" aria-labelledby="customerModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="customerModalLabel">Add Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
<form id="customerForm">
  <input type="hidden" id="customerId" name="c_id">
  <div class="mb-3">
    <label for="companyName" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="companyName" name="c_name" placeholder="Enter company name">
  </div>
  <div class="mb-3">
    <label for="companyAddress" class="form-label">Company Address</label>
    <input type="text" class="form-control" id="companyAddress" name="c_address" placeholder="Enter company address">
  </div>
  <div class="mb-3">
    <label for="gstinUin" class="form-label">GSTIN/UIN</label>
    <input type="text" class="form-control" id="gstinUin" name="c_gstno" placeholder="Enter GSTIN/UIN">
  </div>
  <div class="mb-3">
    <label for="stateName" class="form-label">State Name</label>
    <input type="text" class="form-control" id="stateName" name="c_state" placeholder="Enter state name">
  </div>
  <div class="mb-3">
    <label for="stateCode" class="form-label">State Code</label>
    <input type="text" class="form-control" id="stateCode" name="c_code" placeholder="Enter state code">
  </div>
  <button type="submit" class="btn btn-success" id="customerSaveBtn">Save</button>
</form>
<script>
// Open modal for Add Customer
document.getElementById('openAddCustomerModal').addEventListener('click', function() {
  document.getElementById('customerModalLabel').textContent = 'Add Customer';
  document.getElementById('customerForm').reset();
  document.getElementById('customerId').value = '';
  document.getElementById('customerSaveBtn').textContent = 'Save';
  var modal = new bootstrap.Modal(document.getElementById('customerModal'));
  modal.show();
});

// Open modal for Edit Customer
  document.addEventListener('click', function(e) {
    if (e.target.classList.contains('editCustomerBtn')) {
      document.getElementById('customerModalLabel').textContent = 'Edit Customer';
      document.getElementById('customerId').value = e.target.getAttribute('data-c_id');
      document.getElementById('companyName').value = e.target.getAttribute('data-c_name');
      document.getElementById('companyAddress').value = e.target.getAttribute('data-c_address');
      document.getElementById('gstinUin').value = e.target.getAttribute('data-c_gstno');
      document.getElementById('stateName').value = e.target.getAttribute('data-c_state');
      document.getElementById('stateCode').value = e.target.getAttribute('data-c_code');
      document.getElementById('customerSaveBtn').textContent = 'Update';
      var modal = new bootstrap.Modal(document.getElementById('customerModal'));
      modal.show();
    }
  });

document.getElementById('customerForm').addEventListener('submit', function(e) {
  e.preventDefault();
  var form = e.target;
  var formData = new FormData(form);
  var url = 'add_customer.php';
  fetch(url, {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      alert(data.message);
      location.reload();
    } else {
      alert(data.message);
    }
  })
  .catch(error => {
    alert("Failed to process request: " + error);
  });
});

</script>
                  </div>
                </div>
              </div>
            </div>
            <!-- Customer Table -->
            <div class="row mt-4">
              <div class="col-md-12">
                <div class="card shadow border-0 rounded-3">
                  <div class="card-header p-3" style="background: #ff6600; color: #fff; font-weight: 600; font-size: 1.1rem;">
                    <i class="fa fa-users me-2"></i>Customer List
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <style>
                        .custom-table th, .custom-table td { vertical-align: middle; }
                        .custom-table th { background: #f5f5f5; font-weight: 600; }
                        .custom-table tr { transition: background 0.2s; }
                        .custom-table tr:hover { background: #fff7e6; }
                        .custom-table input[type="text"] { width: 80px; border-radius: 4px; border: 1px solid #ccc; padding: 2px 6px; }
                        .custom-table thead th { border-bottom: 2px solid #ff6600; }
                        .custom-table tbody tr { border-bottom: 10px solid #fff !important; }
                        .custom-table tbody tr td { background: #fff; }
                      </style>
                      <?php
                      $host = "localhost";
                      $dbname = "billing";
                      $username = "root";
                      $password = "";
                      try {
                        $con = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
                        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $admin_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
                        $stmt = $con->prepare("SELECT * FROM customers WHERE status = 'active' AND a_id = ? ORDER BY c_id DESC");
                        $stmt->execute([$admin_id]);
                        echo '<table class="table custom-table table-bordered align-middle mb-0">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>Admin Customer ID</th>';
                        echo '<th>Company Name</th>';
                        echo '<th>Address</th>';
                        echo '<th>GSTIN/UIN</th>';
                        echo '<th>State</th>';
                        echo '<th>Code</th>';
                        echo '<th>Created At</th>';
                        echo '<th>Edit</th>';
                        echo '<th>Delete</th>';
                        echo '<th>Action</th>';
                        echo '<th>View Bill</th>';
                        echo '</tr>';
                        echo '</thead><tbody>';
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                          echo '<tr>';
                          echo '<td>' . htmlspecialchars($row['a_c_id']) . '</td>';
                          echo '<td>' . htmlspecialchars($row['c_name']) . '</td>';
                          echo '<td>' . htmlspecialchars($row['c_address']) . '</td>';
                          echo '<td>' . htmlspecialchars($row['c_gstno']) . '</td>';
                          echo '<td>' . htmlspecialchars($row['c_state']) . '</td>';
                          echo '<td>' . htmlspecialchars($row['c_code']) . '</td>';
                          echo '<td>' . date('d-m-Y H:i', strtotime($row['created_at'])) . '</td>';
                          // Edit Button
                          echo '<td><button class="btn btn-warning btn-sm editCustomerBtn" 
                            data-c_id="' . htmlspecialchars($row['c_id']) . '" 
                            data-c_name="' . htmlspecialchars($row['c_name']) . '" 
                            data-c_address="' . htmlspecialchars($row['c_address']) . '" 
                            data-c_gstno="' . htmlspecialchars($row['c_gstno']) . '" 
                            data-c_state="' . htmlspecialchars($row['c_state']) . '" 
                            data-c_code="' . htmlspecialchars($row['c_code']) . '" >Edit</button></td>';
                          // Delete Button
                          echo '<td><a href="delete_customer.php?id=' . $row['c_id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this customer?\')">Delete</a></td>';
                          // Add Invoice Button or Invoice Added
                          $invoiceCheck = $con->prepare("SELECT invoice_id FROM invoice_details WHERE c_id = ? LIMIT 1");
                          $invoiceCheck->execute([$row['c_id']]);
                          $invoiceRow = $invoiceCheck->fetch(PDO::FETCH_ASSOC);
                          if ($invoiceRow) {
                            $invoice_id = $invoiceRow['invoice_id'];
                            echo '<td><a href="invoice_details.php?a_c_id=' . $row['a_c_id'] . '&c_id=' . $row['c_id'] . '" class="btn btn-info btn-sm">Invoice Added</a></td>';
                            // Check for Rate Details in store_goods
                            $rateCheck = $con->prepare("SELECT COUNT(*) FROM store_goods WHERE invoice_id = ?");
                            $rateCheck->execute([$invoice_id]);
                            $rateDetailsAdded = $rateCheck->fetchColumn() > 0;
                            if ($rateDetailsAdded) {
                          $viewBillUrl = 'items.php?a_c_id=' . urlencode($row['a_c_id']) . '&c_id=' . urlencode($row['c_id']) . '&invoice_id=' . urlencode($invoice_id) . '&viewbill=1';
                          echo '<td><a href="' . $viewBillUrl . '" class="btn btn-success btn-sm">View Bill</a></td>';
                            } else {
                          $pendingUrl = 'invoice_details.php?a_c_id=' . urlencode($row['a_c_id']) . '&c_id=' . urlencode($row['c_id']);
                          echo '<td><a href="' . $pendingUrl . '" class="btn btn-warning btn-sm">Pending</a></td>';
                            }
                          } else {
                            echo '<td><a href="invoice_details.php?a_c_id=' . $row['a_c_id'] . '&c_id=' . $row['c_id'] . '" class="btn btn-success btn-sm">Add Invoice</a></td>';
                          $pendingUrl = 'invoice_details.php?a_c_id=' . urlencode($row['a_c_id']) . '&c_id=' . urlencode($row['c_id']);
                          echo '<td><a href="' . $pendingUrl . '" class="btn btn-warning btn-sm">Pending</a></td>';
                          }
                          echo '</tr>';
                        }
                        echo '</tbody></table>';
                      } catch (PDOException $e) {
                        echo '<div class="alert alert-danger">Error fetching customers: ' . $e->getMessage() . '</div>';
                      }

                      
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025 Jayasri. All rights reserved. <a href="#"> Terms of use</a><a href="#">Privacy Policy</a></span>
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