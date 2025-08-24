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
    <title>Invoice</title>
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
            <!-- Invoice Preview (Static Template) -->
             

           
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="assets/images/logo.svg" alt="logo" class="logo-dark" />
            <img src="assets/images/logo-light.svg" alt="logo-light" class="logo-light">
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome stellar dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-start me-2">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-end">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
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
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ms-2" src="assets/images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> Henry Klein </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3">Henry Klein</p>
                  <p class="font-weight-light text-muted mb-0">kleinhenry@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
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
            <li class="nav-item navbar-brand-mini-wrapper">
              <a class="nav-link navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            </li>
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Henry Klein</p>
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
                <button type="button" class="btn btn-primary" id="openAddGoodsModal">
                  Add Goods
                </button>
                <button type="button" class="btn btn-info ms-2" id="openGoodsRateModal">
                  Goods Rate Details
                </button>
                <button type="button" class="btn btn-danger ms-2" id="printInvoiceBtn">
                  Print
                </button>
            <script>
            document.addEventListener('DOMContentLoaded', function() {
              // Print Invoice Button
              var printBtn = document.getElementById('printInvoiceBtn');
              if (printBtn) {
                printBtn.addEventListener('click', function() {
                  window.print();
                });
              }

              // Save All handler for Goods Rate Details
              var goodsRateForm = document.getElementById('goodsRateForm');
              if (goodsRateForm) {
                goodsRateForm.addEventListener('submit', function(e) {
                  e.preventDefault();
                  const form = e.target;
                  const formData = new FormData(form);
                  // Collect all rows
                  const rows = Array.from(document.querySelectorAll('#goodsRateTable tbody tr'));
                  if (rows.length === 0) {
                    alert('Please add at least one goods row.');
                    return;
                  }
                  // Validate required fields
                  for (const tr of rows) {
                    if (!tr.querySelector('select').value || !tr.querySelector('input[name="hsn_sac[]"]').value || !tr.querySelector('input[name="quantity[]"]').value || !tr.querySelector('input[name="rate[]"]').value) {
                      alert('Please fill all required fields in each row.');
                      return;
                    }
                  }
                  fetch('save_goods_rate.php', {
                    method: 'POST',
                    body: formData
                  })
                  .then(response => response.json())
                  .then(data => {
                    if (data.status === 'success') {
                      alert('Goods rate details saved successfully!');
                      var modal = bootstrap.Modal.getInstance(document.getElementById('goodsRateModal'));
                      modal.hide();
                      // Optionally reload or update invoice preview here
                    } else {
                      alert(data.message || 'Failed to save goods rate details.');
                    }
                  })
                  .catch(() => {
                    alert('An error occurred while saving goods rate details.');
                  });
                });
              }
            });
            </script>
              </div>
            </div>
            <!-- Add Goods Modal -->
            <div class="modal fade" id="goodsModal" tabindex="-1" aria-labelledby="goodsModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="goodsModalLabel">Add Goods</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form id="goodsForm">
                      <div class="mb-3">
                        <label for="goodsName" class="form-label">Goods Name</label>
                        <input type="text" class="form-control" id="goodsName" name="goods_name" placeholder="Enter goods name" required>
                      </div>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <script>
            // Open modal for Add Goods
            document.getElementById('openAddGoodsModal').addEventListener('click', function() {
              document.getElementById('goodsForm').reset();
              var modal = new bootstrap.Modal(document.getElementById('goodsModal'));
              modal.show();
            });
            // Submit handler with backend integration
            document.getElementById('goodsForm').addEventListener('submit', function(e) {
              e.preventDefault();
              var goodsName = document.getElementById('goodsName').value;
              fetch('add_items.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'goods_name=' + encodeURIComponent(goodsName)
              })
              .then(response => response.json())
              .then(data => {
                if (data.status === 'success') {
                  alert(data.message);
                  var modal = bootstrap.Modal.getInstance(document.getElementById('goodsModal'));
                  modal.hide();
                  // Optionally, reload or update goods list here
                } else {
                  alert(data.message);
                }
              })
              .catch(() => {
                alert('An error occurred while adding goods.');
              });
            });
            </script>
            <!-- Goods Rate Details Modal -->
            <div class="modal fade" id="goodsRateModal" tabindex="-1" aria-labelledby="goodsRateModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="goodsRateModalLabel">Goods Rate Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form id="goodsRateForm" class="p-3" style="border:2px solid #ff6600; border-radius:12px; box-shadow:0 0 8px #ff660033;">
          <!-- Common CGST and SGST fields -->
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="cgst_percent" class="form-label">CGST (%)</label>
              <select class="form-select" id="cgst_percent" name="cgst_percent" required>
                <option value="">Select CGST</option>
                <option value="9">9%</option>
                <option value="6">6%</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="sgst_percent" class="form-label">SGST (%)</label>
              <select class="form-select" id="sgst_percent" name="sgst_percent" required>
                <option value="">Select SGST</option>
                <option value="9">9%</option>
                <option value="6">6%</option>
              </select>
            </div>
          </div>
                      <input type="hidden" name="a_id" id="a_id" value="<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>">
                      <input type="hidden" name="a_c_id" id="a_c_id" value="<?php echo isset($_GET['a_c_id']) ? $_GET['a_c_id'] : ''; ?>">
                      <input type="hidden" name="c_id" id="c_id" value="<?php echo isset($_GET['c_id']) ? $_GET['c_id'] : ''; ?>">
                      <input type="hidden" name="invoice_id" id="invoice_id" value="<?php echo isset($_GET['invoice_id']) ? $_GET['invoice_id'] : ''; ?>">
                      <table class="table table-bordered" id="goodsRateTable">
                        <thead>
                          <tr>
                            <th>Select Goods</th>
                            <th>HSN/SAC</th>
                            <th>Quantity</th>
                            <th>Rate (₹ per unit)</th>
                            <th>Discount (%)</th>
                            <th>Amount (₹)</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody></tbody>
                      </table>
                      <button type="button" class="btn btn-primary btn-sm" id="addGoodsRowBtn">Add Row</button>
                      <!-- Tax fields removed as requested -->
                      <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-success">Save All</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>


            <script>
            // --- Multi-row Goods Rate Details Modal ---
            let goodsList = [];
            function fetchGoodsList(callback) {
              fetch('fetch_goods.php')
                .then(response => response.json())
                .then(data => {
                  goodsList = data;
                  if (callback) callback();
                })
                .catch(() => { goodsList = []; if (callback) callback(); });
            }

            function createGoodsRow() {
              const tr = document.createElement('tr');
              tr.innerHTML = `
                <td>
                  <select class="form-select" name="g_id[]" required>
                    <option value="">Select Goods</option>
                    ${goodsList.map(g => `<option value="${g.g_id}">${g.goods_name}</option>`).join('')}
                  </select>
                </td>
                <td><input type="text" class="form-control" name="hsn_sac[]" required></td>
                <td><input type="number" class="form-control qty-input" name="quantity[]" min="1" step="0.01" required></td>
                <td><input type="number" class="form-control rate-input" name="rate[]" step="0.01" required></td>
                <td><input type="number" class="form-control discount-input" name="discount_percent[]" step="0.01" min="0" max="100"></td>
                <td><input type="number" class="form-control amount-input" name="amount[]" step="0.01" readonly></td>
                <td><button type="button" class="btn btn-danger btn-sm remove-row-btn">Remove</button></td>
              `;
              return tr;
            }



            // Update event handlers to use new tax fields
            // On modal open and add row
            const openGoodsRateModalBtn = document.getElementById('openGoodsRateModal');
            if (openGoodsRateModalBtn) {
              openGoodsRateModalBtn.addEventListener('click', function() {
                fetchGoodsList(function() {
                  const tbody = document.getElementById('goodsRateTable').querySelector('tbody');
                  tbody.innerHTML = '';
                  tbody.appendChild(createGoodsRow());
                  // No tax fields to update
                  var modal = new bootstrap.Modal(document.getElementById('goodsRateModal'));
                  modal.show();
                });
              });
            }
            const addGoodsRowBtn = document.getElementById('addGoodsRowBtn');
            if (addGoodsRowBtn) {
              addGoodsRowBtn.addEventListener('click', function() {
                const tbody = document.getElementById('goodsRateTable').querySelector('tbody');
                tbody.appendChild(createGoodsRow());
                // No tax fields to update
              });
            }
            document.getElementById('goodsRateTable').addEventListener('click', function(e) {
              if (e.target.classList.contains('remove-row-btn')) {
                e.target.closest('tr').remove();
                // No tax fields to update
              }
            });
            // Delegate events for dynamic rows (item table)
            document.getElementById('goodsRateTable').addEventListener('input', function(e) {
              if (
                e.target.classList.contains('qty-input') ||
                e.target.classList.contains('rate-input') ||
                e.target.classList.contains('discount-input')
              ) {
                const tr = e.target.closest('tr');
                tr.querySelector('.amount-input').value = (function() {
                  const qty = parseFloat(tr.querySelector('.qty-input').value) || 0;
                  const rate = parseFloat(tr.querySelector('.rate-input').value) || 0;
                  const discount = parseFloat(tr.querySelector('.discount-input').value) || 0;
                  let amount = qty * rate;
                  if (discount > 0) amount = amount - (amount * (discount / 100));
                  return amount.toFixed(2);
                })();
                // No tax fields to update
              }
            });
            // No tax fields to delegate events for
            </script>
            <!-- Centered Invoice Preview (Static Template) -->
            <div style="display: flex; justify-content: center; align-items: flex-start; min-height: 50vh;">
              <div class="invoice-container">
                <h2>Tax Invoice</h2>
                <!-- Removed IRN, Ack No., and Ack Date section as requested -->
                <!-- Removed e-Invoice QR code section as requested -->
                <div class="section-box" style="flex-direction: column;">
                  <div>
                    <?php
                    // Fetch admin details for the logged-in user
                    $admin_name = $admin_place = $admin_address = $admin_gstno = $admin_state = $admin_code = '';
                    if (isset($_SESSION['user_id'])) {
                        $conn = new mysqli('localhost', 'root', '', 'billing'); // Change DB name if needed
                        if (!$conn->connect_error) {
                            $uid = intval($_SESSION['user_id']);
                            $sql = "SELECT a_name, a_place, a_address, a_gstno, a_state, a_code FROM admin WHERE a_id = $uid LIMIT 1";
                            $result = $conn->query($sql);
                            if ($result && $result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $admin_name = htmlspecialchars($row['a_name']);
                                $admin_place = htmlspecialchars($row['a_place']);
                                $admin_address = htmlspecialchars($row['a_address']);
                                $admin_gstno = htmlspecialchars($row['a_gstno']);
                                $admin_state = htmlspecialchars($row['a_state']);
                                $admin_code = htmlspecialchars($row['a_code']);
                            }
                            $conn->close();
                        }
                    }
                    ?>
                    <strong><?php echo $admin_name; ?></strong><br>
                    <?php echo $admin_place; ?><br>
                    <?php echo $admin_address; ?><br>
                    GSTIN/UIN: <?php echo $admin_gstno; ?><br>
                    State Name : <?php echo $admin_state; ?>, Code : <?php echo $admin_code; ?>
                  </div>
                  <table style="width: 100%; margin-top: 10px; border-collapse: collapse; font-size: 12px;" border="1">
                    <?php
                    // Fetch invoice details from invoice_details table
                    $inv_no = $inv_date = $delivery_note = $mode_terms = $ref_no_date = $other_refs = $buyer_order_no = $buyer_order_date = $dispatch_doc_no = $delivery_note_date = $dispatched_through = $destination = $terms_of_delivery = '';
                    if (isset($_GET['invoice_id'])) {
                        $conn = new mysqli('localhost', 'root', '', 'billing');
                        if (!$conn->connect_error) {
                            $invoice_id = intval($_GET['invoice_id']);
                            $sql = "SELECT * FROM invoice_details WHERE invoice_id = $invoice_id LIMIT 1";
                            $result = $conn->query($sql);
                            if ($result && $result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $inv_no = htmlspecialchars($row['invoice_no'] ?? '');
                                $inv_date = '';
                                if (!empty($row['invoice_date'])) {
                                  $date = date_create($row['invoice_date']);
                                  $inv_date = $date ? date_format($date, 'd-m-Y') : htmlspecialchars($row['invoice_date']);
                                }
                                $delivery_note = htmlspecialchars($row['delivery_note'] ?? '');
                                $mode_terms = htmlspecialchars($row['mode_or_terms_of_payment'] ?? '');
                                $ref_no_date = htmlspecialchars($row['reference_no_date'] ?? '');
                                $other_refs = htmlspecialchars($row['other_references'] ?? '');
                                $buyer_order_no = htmlspecialchars($row['buyers_order_no'] ?? '');
                                $buyer_order_date = '';
                                if (!empty($row['buyers_order_date'])) {
                                  $date = date_create($row['buyers_order_date']);
                                  $buyer_order_date = $date ? date_format($date, 'd-m-Y') : htmlspecialchars($row['buyers_order_date']);
                                }
                                $dispatch_doc_no = htmlspecialchars($row['dispatch_doc_no'] ?? '');
                                $delivery_note_date = '';
                                if (!empty($row['delivery_note_date'])) {
                                  $date = date_create($row['delivery_note_date']);
                                  $delivery_note_date = $date ? date_format($date, 'd-m-Y') : htmlspecialchars($row['delivery_note_date']);
                                }
                                $dispatched_through = htmlspecialchars($row['dispatched_through'] ?? '');
                                $destination = htmlspecialchars($row['destination'] ?? '');
                                $terms_of_delivery = htmlspecialchars($row['terms_of_delivery'] ?? '');
                            }
                            $conn->close();
                        }
                    }
                    ?>
                    <tr>
                      <td><strong>Invoice No:</strong> <?php echo $inv_no; ?></td>
                      <td><strong>Dated:</strong> <?php echo $inv_date; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Delivery Note:</strong> <?php echo $delivery_note; ?></td>
                      <td><strong>Mode/Terms of Payment:</strong> <?php echo $mode_terms; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Reference No & Date : </strong> <?php echo $ref_no_date; ?></td>
                      <td><strong>Other References :    </strong> <?php echo $other_refs; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Buyer's Order No:</strong> <?php echo $buyer_order_no; ?></td>
                      <td><strong>Dated:</strong> <?php echo $buyer_order_date; ?></td>
                    </tr>
                    <tr>
                      <td><strong>Dispatch Doc No:</strong> <?php echo $dispatch_doc_no; ?></td>
                      <td><strong>Delivery Note Date:</strong> <?php echo $delivery_note_date; ?></td>
                    </tr>
                   
                      
                    </tr>
                  </table>
                </div>
                <div class="section-box">
                  <?php
                  $customer_name = $customer_address = $customer_gstno = $customer_state = $customer_code = '';
                  if (isset($_GET['c_id'])) {
                      $conn = new mysqli('localhost', 'root', '', 'billing');
                      if (!$conn->connect_error) {
                          $c_id = intval($_GET['c_id']);
                          $sql = "SELECT c_name, c_address, c_gstno, c_state, c_code FROM customers WHERE c_id = $c_id LIMIT 1";
                          $result = $conn->query($sql);
                          if ($result && $result->num_rows > 0) {
                              $row = $result->fetch_assoc();
                              $customer_name = htmlspecialchars($row['c_name']);
                              $customer_address = nl2br(htmlspecialchars($row['c_address']));
                              $customer_gstno = htmlspecialchars($row['c_gstno']);
                              $customer_state = htmlspecialchars($row['c_state']);
                              $customer_code = htmlspecialchars($row['c_code']);
                          }
                          $conn->close();
                      }
                  }
                  ?>
                  <div>
                    <strong>Consignee (Ship to)</strong><br>
                    <?php echo $customer_name; ?><br>
                    <?php echo $customer_address; ?><br>
                    GSTIN/UIN : <?php echo $customer_gstno; ?><br>
                    State Name : <?php echo $customer_state; ?>, Code : <?php echo $customer_code; ?>
                  </div>
                  <div>
                    <strong>Buyer (Bill to)</strong><br>
                    <?php echo $customer_name; ?><br>
                    <?php echo $customer_address; ?><br>
                    GSTIN/UIN : <?php echo $customer_gstno; ?><br>
                    State Name : <?php echo $customer_state; ?>, Code : <?php echo $customer_code; ?>
                  </div>
                </div>
                <div class="table-section">
                  <table>
                    <thead>
                      <tr>
                        <th>Sl No.</th>
                        <th>Description of Goods</th>
                        <th>HSN/SAC</th>
                        <th>Quantity</th>
                        <th>Rate</th>
                        <th>per</th>
                        <th>Disc. %</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
          <tbody>
          <?php
          $grand_total_amount = 0;
          $grand_total_qty = 0;
          $cgst_percent = isset($_GET['cgst_percent']) ? intval($_GET['cgst_percent']) : '';
          $sgst_percent = isset($_GET['sgst_percent']) ? intval($_GET['sgst_percent']) : '';
          // Fetch CGST/SGST from invoice_details if available
          if (isset($_GET['invoice_id'])) {
            $conn2 = new mysqli('localhost', 'root', '', 'billing');
            if (!$conn2->connect_error) {
              $invoice_id2 = intval($_GET['invoice_id']);
              $sql2 = "SELECT cgst_percent, sgst_percent FROM invoice_details WHERE invoice_id = $invoice_id2 LIMIT 1";
              $result2 = $conn2->query($sql2);
              if ($result2 && $result2->num_rows > 0) {
                $row2 = $result2->fetch_assoc();
                $cgst_percent = $row2['cgst_percent'];
                $sgst_percent = $row2['sgst_percent'];
              }
              $conn2->close();
            }
          }
          if (isset($_GET['invoice_id'])) {
            $conn = new mysqli('localhost', 'root', '', 'billing');
            if (!$conn->connect_error) {
              $invoice_id = intval($_GET['invoice_id']);
              $a_c_id = isset($_GET['a_c_id']) ? intval($_GET['a_c_id']) : 0;
              $c_id = isset($_GET['c_id']) ? intval($_GET['c_id']) : 0;
              $sql = "SELECT * FROM store_goods WHERE invoice_id = $invoice_id AND a_c_id = $a_c_id AND c_id = $c_id AND status = 'active'";
              $result = $conn->query($sql);
              $sl = 1;
              if ($result && $result->num_rows > 0) {
                $first = true;
                while ($row = $result->fetch_assoc()) {
                  $desc = htmlspecialchars($row['goods_name'] ?? '');
                  $hsn = htmlspecialchars($row['hsn_sac']);
                  $qty = (int)floatval($row['quantity']);
                  $rate = htmlspecialchars($row['rate']);
                  $per = 'No';
                  $disc = htmlspecialchars($row['discount_percent']);
                  $amt = htmlspecialchars($row['amount']);
                  $grand_total_amount += floatval($amt);
                  $grand_total_qty += floatval($qty);
                  echo '<tr>';
                  echo '<td>' . $sl . '</td>';
                  echo '<td>' . $desc . '</td>';
                  echo '<td>' . $hsn . '</td>';
                  echo '<td>' . $qty . ' No</td>';
                  echo '<td>&#8377; ' . $rate . '</td>';
                  echo '<td>' . $per . '</td>';
                  echo '<td>' . $disc . '</td>';
                  echo '<td>&#8377; ' . number_format($amt, 2) . '</td>';
                  echo '</tr>';
                  $sl++;
                  $first = false;
                }
              } else {
                echo '<tr><td colspan="8" class="center">No items found.</td></tr>';
              }
              if ($sl > 1) {
                // Total row (items only, before taxes)
                echo '<tr style="font-weight:bold; background:#f8f8f8;">';
                echo '<td></td>';
                echo '<td colspan="6" style="text-align:right;">Total</td>';
                echo '<td style="font-size:16px; font-weight:bold;">&#8377; ' . number_format($grand_total_amount, 2) . '</td>';
                echo '</tr>';
                // CGST row
                if ($cgst_percent) {
                  $cgst_amt = $grand_total_amount * $cgst_percent / 100;
                  echo '<tr>';
                  echo '<td></td>';
                  echo '<td colspan="6" style="text-align:right; font-weight:bold;">CGST (' . $cgst_percent . '%)</td>';
                  echo '<td style="text-align:right;">&#8377; ' . number_format($cgst_amt, 2) . '</td>';
                  echo '</tr>';
                }
                // SGST row
                if ($sgst_percent) {
                  $sgst_amt = $grand_total_amount * $sgst_percent / 100;
                  echo '<tr>';
                  echo '<td></td>';
                  echo '<td colspan="6" style="text-align:right; font-weight:bold;">SGST (' . $sgst_percent . '%)</td>';
                  echo '<td style="text-align:right;">&#8377; ' . number_format($sgst_amt, 2) . '</td>';
                  echo '</tr>';
                }
                // Total row (after taxes)
                $total_invoice_amount = $grand_total_amount + ($cgst_percent ? $grand_total_amount * $cgst_percent / 100 : 0) + ($sgst_percent ? $grand_total_amount * $sgst_percent / 100 : 0);
                echo '<tr style="font-weight:bold; background:#f8f8f8;">';
                echo '<td></td>';
                echo '<td style="text-align:left;">Total</td>';
                echo '<td></td>';
                echo '<td>' . (int)$grand_total_qty . ' No</td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td style="font-size:16px; font-weight:bold;">&#8377; ' . number_format($total_invoice_amount, 2) . '</td>';
                echo '</tr>';
              }
              $conn->close();
            }
          }
          ?>
          </tbody>
                  </table>
                </div>
                <?php
                if (!function_exists('numberToWords')) {
                  function numberToWords($num) {
                    $ones = array("", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen");
                    $tens = array("", "", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety");
                    if ($num < 20) return $ones[$num];
                    if ($num < 100) return $tens[intval($num / 10)] . (($num % 10) ? " " . $ones[$num % 10] : "");
                    if ($num < 1000) return $ones[intval($num / 100)] . " Hundred" . (($num % 100) ? " " . numberToWords($num % 100) : "");
                    if ($num < 100000) return numberToWords(intval($num / 1000)) . " Thousand" . (($num % 1000) ? " " . numberToWords($num % 1000) : "");
                    if ($num < 10000000) return numberToWords(intval($num / 100000)) . " Lakh" . (($num % 100000) ? " " . numberToWords($num % 100000) : "");
                    return $num;
                  }
                }
                $cgst_amt = $cgst_percent ? $grand_total_amount * $cgst_percent / 100 : 0;
                $sgst_amt = $sgst_percent ? $grand_total_amount * $sgst_percent / 100 : 0;
                $total_invoice_amount = $grand_total_amount + $cgst_amt + $sgst_amt;
                $amt_words = numberToWords(round($total_invoice_amount));
                ?>
                <br>
                <p><span style="font-weight: 400; color: #000;">Amount Chargeable (in words):</span> <b>Indian Rupee <?php echo $amt_words; ?> Only</b></p>

                <!-- Tax summary table -->
                <table style="width:100%; border-collapse:collapse; font-size:13px; margin-top:10px;" border="1">
                  <tr style="font-weight:bold; background:#f8f8f8;">
                    <td rowspan="2" style="text-align:center;">Taxable Value</td>
                    <td colspan="2" style="text-align:center;">Central Tax</td>
                    <td colspan="2" style="text-align:center;">State Tax</td>
                    <td rowspan="2" style="text-align:center;">Total Tax Amount</td>
                  </tr>
                  <tr style="font-weight:bold; background:#f8f8f8;">
                    <td style="text-align:center;">Rate</td>
                    <td style="text-align:center;">Amount</td>
                    <td style="text-align:center;">Rate</td>
                    <td style="text-align:center;">Amount</td>
                  </tr>
                  <tr>
                    <td style="text-align:right;">&#8377; <?php echo number_format($grand_total_amount, 2); ?></td>
                    <td style="text-align:center;"><?php echo $cgst_percent ? $cgst_percent . '%' : '-'; ?></td>
                    <td style="text-align:right;">
                      <?php $cgst_amt = $cgst_percent ? $grand_total_amount * $cgst_percent / 100 : 0; echo '&#8377; ' . number_format($cgst_amt, 2); ?>
                    </td>
                    <td style="text-align:center;"><?php echo $sgst_percent ? $sgst_percent . '%' : '-'; ?></td>
                    <td style="text-align:right;">
                      <?php $sgst_amt = $sgst_percent ? $grand_total_amount * $sgst_percent / 100 : 0; echo '&#8377; ' . number_format($sgst_amt, 2); ?>
                    </td>
                    <td style="text-align:right; font-weight:bold;">
                      <?php echo '&#8377; ' . number_format($cgst_amt + $sgst_amt, 2); ?>
                    </td>
                  </tr>
                  <tr style="font-weight:bold; background:#f8f8f8;">
                    <td style="text-align:center;">Total</td>
                    <td></td>
                    <td style="text-align:right;"><b>&#8377; <?php echo number_format($cgst_amt, 2); ?></b></td>
                    <td></td>
                    <td style="text-align:right;"><b>&#8377; <?php echo number_format($sgst_amt, 2); ?></b></td>
                    <td style="text-align:right;"><b>&#8377; <?php echo number_format($cgst_amt + $sgst_amt, 2); ?></b></td>
                  </tr>
                </table>
                <br>
                <?php
                $total_tax_amount = ($cgst_percent ? $grand_total_amount * $cgst_percent / 100 : 0) + ($sgst_percent ? $grand_total_amount * $sgst_percent / 100 : 0);
                $tax_words = numberToWords(round($total_tax_amount));
                ?>
                <p><span style="font-weight: 400; color: #000;">Total Tax Amount (in words):</span> <b>Indian Rupee <?php echo $tax_words; ?> Only</b></p>
                  <div class="footer" style="background: #fff !important; border: none !important; box-shadow: none !important;">
                    <div class="right" style="text-align: right; width: 100%; float: none !important; background: #fff !important;">
                      <?php
                        $footer_admin_name = $footer_admin_place = '';
                        if (isset($_SESSION['user_id'])) {
                          $conn = new mysqli('localhost', 'root', '', 'billing');
                          if (!$conn->connect_error) {
                            $uid = intval($_SESSION['user_id']);
                            $sql = "SELECT a_name, a_place FROM admin WHERE a_id = $uid LIMIT 1";
                            $result = $conn->query($sql);
                            if ($result && $result->num_rows > 0) {
                              $row = $result->fetch_assoc();
                              $footer_admin_name = htmlspecialchars($row['a_name']);
                              $footer_admin_place = htmlspecialchars($row['a_place']);
                            }
                            $conn->close();
                          }
                        }
                        if ($footer_admin_name && $footer_admin_place) {
                          echo 'for ' . $footer_admin_name . ', ' . $footer_admin_place . '<br><br><br>';
                        } else {
                          echo 'for Authorised Firm<br><br><br>';
                        }
                      ?>
                      Authorised Signatory
                    </div>
                  </div>
                  <p class="footer-note"><strong>  Computer Generated Invoice</strong></p>
              </div>
            </div>
            <style>
              .invoice-container { width: 800px; margin: auto; border: 1px solid #000; padding: 10px; position: relative; background: #fff; }
              h2 { text-align: center; margin-bottom: 5px; }
              .top-info { margin-bottom: 10px; }
              .top-info p { margin: 2px 0; }
              .qr-section { position: absolute; top: 30px; right: 30px; text-align: center; }
              .qr-section img { width: 100px; height: 100px; }
              .section-box { border: 1px solid black; padding: 8px; display: flex; justify-content: space-between; margin-top: 10px; }
              .section-box div { width: 48%; }
              .table-section { border: 1px solid #000; margin-top: 10px; }
              table { width: 100%; border-collapse: collapse; font-size: 12px; }
              th, td { border: 1px solid black; padding: 5px; text-align: left; vertical-align: top; }
              .right { text-align: right; }
              .center { text-align: center; }
              .no-border { border: none; }
              .bold { font-weight: bold; }
              .footer { margin-top: 15px; }
              .footer .left, .footer .right {
                width: 48%;
                display: inline-block;
                vertical-align: top;
                color: #222;
                opacity: 1;
                font-weight: 500;
              }
              .footer-note { font-size: 11px; margin-top: 10px; text-align: center; }
            </style>
            <style>
              @media print {
                body * {
                  visibility: hidden !important;
                }
                .invoice-container, .invoice-container * {
                  visibility: visible !important;
                }
                .invoice-container {
                  position: absolute !important;
                  left: 0;
                  top: 0;
                  width: 210mm !important;
                  min-height: 297mm !important;
                  max-width: 210mm !important;
                  height: 287mm !important;
                  margin: 0 !important;
                  padding: 10mm !important;
                  background: #fff !important;
                  box-shadow: none !important;
                  border: none !important;
                  overflow: hidden !important;
                  page-break-after: avoid !important;
                  page-break-before: avoid !important;
                  page-break-inside: avoid !important;
                }
                /* Hide print button and other UI controls */
                #openAddGoodsModal, #openGoodsRateModal, #printInvoiceBtn {
                  display: none !important;
                }
                /* Remove page margins for full A4 print */
                @page {
                  size: A4;
                  margin: 0;
                }
                html, body {
                  width: 210mm;
                  height: 297mm;
                  overflow: hidden !important;
                }
              }
            </style>
          </div>
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
    <style>
      #goodsRateForm .form-control, #goodsRateForm .form-select {
        background: #fff !important;
        color: #222 !important;
        border: 1.5px solid #ddd !important;
        box-shadow: none !important;
        padding: 10px 12px !important;
        border-radius: 6px !important;
        font-size: 1rem !important;
        transition: border-color 0.2s;
      }
      #goodsRateForm .form-control:focus, #goodsRateForm .form-select:focus {
        background: #fff !important;
        color: #222 !important;
        border-color: #ff6600 !important;
        outline: none !important;
      }
      #goodsRateForm label {
        color: #222;
        font-weight: 500;
        margin-bottom: 6px;
      }
    </style>
  </body>
</html>