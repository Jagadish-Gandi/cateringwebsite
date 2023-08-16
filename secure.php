
<?php
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to the sign-in page or any other desired page
header("Location: sign_in.php");
exit();
?>
