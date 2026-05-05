<?php
// Start session to store user info
session_start();

// If already logged in, go to landing page
if (isset($_SESSION['user'])) {
    header("Location: landing.php");
    exit;
}

$error = "";

// Check if form was submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Check if username and password are correct
    if ($username == "Rhiyhna" && $password == "nari1214") {
        $_SESSION['user'] = $username;  // Save user to session
        header("Location: landing.php");  // Go to landing page
        exit;
    } else {
        $error = "Wrong username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Login</h1>
    
    <!-- Show error message if login failed -->
    <?php if ($error != ""): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="login">LOGIN</button>
    </form>
</div>

</body>
</html>
