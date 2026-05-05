<?php
// Start session
session_start();
// End the session (logout user)
$_SESSION = [];
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
    <h2>Thank you for using!</h2>

    <a href="login.php"> <button>LOGIN AGAIN</button> </a>
</div>

</body>
</html>