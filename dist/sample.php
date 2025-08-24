<?php
session_start();
echo "<!-- a_type = " . (
    isset($_SESSION['a_type']) ? $_SESSION['a_type'] : 'NOT SET'
) . " -->";
$a_type = $_SESSION['a_type'] ?? '';

if ($a_type == 'user') {
?>

<?php
} elseif ($a_type == 'admin' || $a_type == 'master admin') {
?>
<!-- ADMIN SIDEBAR START -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo " style="margin:0px;">
        <a href="" class="app-brand-link">
            <span class="app-brand-logo demo" style="height:100px;width:70px;">
                <center><img src="logo.png" style="width:70px;height:70px;"></center>
            </span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item active open">
            <a href="main_dashboard.php" class="menu-link">
                <i class="menu-icon-1 ti ti-dashboard"></i>
                <div>Dashboard</div>
            </a>
        </li>
       
       
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon-1 ti ti-wallet"></i>
                <div>Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="" class="menu-link">
                        <i class="menu-icon-1 ti ti-receipt"></i>
                        <div>Materials</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link">
                        <i class="menu-icon-1 ti ti-cash"></i>
                        <div>General Expenses</div>
                    </a>
                </li>
            </ul>
        </li>
       
    </ul>
</aside>
<!-- ADMIN SIDEBAR END -->
 <script src="assets/vendor/js/menu.js"></script>

<?php
}
?>