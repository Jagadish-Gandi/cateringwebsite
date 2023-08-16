<?php
$localhost = "localhost:3306";
$username = "root";
$password = "";
$database = "catering";

$conn = mysqli_connect($localhost, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$un = $_POST['email'];
$pw = $_POST['password'];

$query = mysqli_query($conn, "SELECT email,password FROM users WHERE email='$un'");
$result_can = mysqli_query($conn, "SELECT email,password FROM users WHERE email='$un'");

$check_username = "";
$check_password = "";

while ($row = mysqli_fetch_assoc($result_can)) {
    $check_username = $row['email'];
    $check_password = $row['password'];
}

if ($un == $check_username && $pw == $check_password) {
    $message = "ok";
    header("Location: display_data.php");
    exit();
} elseif ($un == $check_username) {
    $message = "Wrong password";
} else {
    $message = "Invalid email";
}

echo "<script type='text/javascript'>alert('$message');</script>";
header("Location: sign_in.php");
?>
