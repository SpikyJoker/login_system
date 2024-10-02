<?php
session_start();

if (isset($_COOKIE['user_session'])) {
    // Validate the session ID stored in the cookie
    session_id($_COOKIE['user_session']);
    session_start();
    
    // Check if the session is valid
    if (isset($_SESSION['user_id'])) {
        // User is logged in
		echo "Welcome back, " . $_SESSION['username'] . "!";
    } else {
        // Invalid session, redirect to login
        header("Location: login.php");
        exit();
    }
} else {
    // No cookie, redirect to login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="logout.php">Logout</a>
</body>
</html>
