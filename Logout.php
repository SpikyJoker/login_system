<?php
session_start();
session_destroy();
setcookie('user_session', '', time() - 3600, '/'); // Delete the cookie, by timeout
header("Location: Login.php");
exit();
?>
