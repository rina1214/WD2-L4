<?php
// Start session
session_start();

// If user is not logged in, go back to login page
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// Get the username from session
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Welcome, <?php echo $user; ?>!</h2>
    <p>You are logged in.</p>
    
    <a href="logout.php">
        <button>LOGOUT</button>
    </a>
</div>

</body>
</html>