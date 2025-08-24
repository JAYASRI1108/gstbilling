<?php
session_start();

// // ✅ Prevent redirect loop if already logged in
// if (isset($_SESSION['user_id'])) {
//     header('Location: customer.php'); // Redirect to dashboard/main page, NOT login.php
  
// }

// Handle login form
$login_error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $host = "localhost";
    $dbname = "billing";
    $dbuser = "root";
    $dbpass = "";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // ✅ Match by a_uname
        $stmt = $pdo->prepare("SELECT * FROM admin WHERE a_uname = ? LIMIT 1");
        $stmt->execute([$username]);
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        // ✅ Verify password using hashed value
if ($admin && $password === $admin['a_pass'])
 {
            $_SESSION['user_id'] = $admin['a_id'];
            $_SESSION['username'] = $admin['a_uname'];
            header("Location: customer.php"); // Redirect to dashboard/main page, NOT login.php
            exit;
        } else {
            $login_error = "Invalid username or password.";
        }
    } catch (PDOException $e) {
        $login_error = "Database error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | GST Billing</title>
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/vertical-light-layout/style.css">
    <style>
        body {
            background: url('assets/images/bg.jpeg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            background: rgba(255,255,255,0.97);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.12);
            padding: 40px 32px 32px 32px;
            max-width: 400px;
            width: 100%;
            margin: 40px auto;
        }
        .login-logo {
            display: block;
            margin: 0 auto 16px auto;
            max-width: 120px;
        }
        .login-title {
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }
        .login-subtitle {
            text-align: center;
            color: #888;
            margin-bottom: 24px;
        }
        .form-label {
            font-weight: 500;
        }
        .form-control {
            border-radius: 8px;
            margin-bottom: 16px;
        }
        .btn-login {
            background: #7c4dff;
            color: #fff;
            font-weight: 600;
            border-radius: 8px;
            padding: 10px 0;
            width: 100%;
            font-size: 1.1rem;
        }
        .forgot-link {
            float: right;
            font-size: 0.95rem;
            color: #7c4dff;
            text-decoration: none;
        }
        .remember-me {
            margin-bottom: 16px;
        }
        .error-message {
            color: #d32f2f;
            text-align: center;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- <img src="assets/images/logo-dark.svg" alt="CrystàLákmo Logo" class="login-logo"> -->
        <div class="login-title">GST Billing</div>
        <div class="login-subtitle">Please Sign-in to your account</div>
        <?php if (!empty($login_error)): ?>
            <div class="error-message"><?php echo htmlspecialchars($login_error); ?></div>
        <?php endif; ?>
        <form action="login.php" method="post">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
            <label for="password" class="form-label">Password</label>
            <a href="forgot_password.php" class="forgot-link">Forgot Password?</a>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            <div class="form-check remember-me">
                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-login">Sign in</button>
        </form>
    </div>
</body>
</html>
