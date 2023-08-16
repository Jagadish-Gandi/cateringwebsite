<?php
$localhost = "localhost:3306";
$username = "root";
$password = "";
$database = "catering";

$conn = mysqli_connect($localhost, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare and execute the SQL query
$sql = "INSERT INTO users (email, password)
        VALUES ('catering@gmail.com', 'abc123')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
echo "data entered successfully";

mysqli_close($conn);
?>
