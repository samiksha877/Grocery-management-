<?php
include 'dbcon.php';
$msg = '';

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $newpass = trim($_POST['new_password']);

    if (!preg_match('/^(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/', $newpass)) {
        $msg = "Password must be at least 8 characters and contain at least one special character.";
    } else {
        $sql = "UPDATE user SET password = '$newpass' WHERE username = '$username'";
        if ($conn->query($sql)) {
            $msg = "Password updated successfully!";
        } else {
            $msg = "Failed to update password. Try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <style>
        body {
            background: #f0f2f5;
            font-family: Arial;
        }
        .box {
            max-width: 400px;
            margin: 100px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background: #007BFF;
            color: white;
            border: none;
        }
        button:hover {
            background: #0056b3;
        }
        .text-danger { color: red; font-size: 14px; }
        .text-success { color: green; font-size: 14px; }
    </style>
</head>
<body>
    <div class="box">
        <h3>Reset Your Password</h3>
        <?php if ($msg): ?>
            <p class="<?= strpos($msg, 'success') !== false ? 'text-success' : 'text-danger' ?>">
                <?= $msg ?>
            </p>
        <?php endif; ?>
        <form method="post">
            <input type="text" name="username" placeholder="Enter your username" required>
            <input type="password" name="new_password" placeholder="New password" required>
            <button type="submit" name="submit">Reset Password</button>
        </form>
        <div style="margin-top:10px;">
            <a href="login.php">Back to Login</a>
        </div>
    </div>
</body>
</html>
