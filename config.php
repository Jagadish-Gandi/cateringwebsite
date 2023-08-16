<?php
$localhost = "localhost:3306";
$username = "root";
$password = "";
$database = "catering";

$conn = mysqli_connect($localhost, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$people = isset($_POST['people']) ? $_POST['people'] : '';
$dateTime = isset($_POST['date_and_time']) ? $_POST['date_and_time'] : '';
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Prepare and execute the SQL query
$sql = "INSERT INTO client_details (username, people, date_of_event, mobile, message)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sisss", $name, $people, $dateTime, $mobile, $message);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo '<h1 align="center" style="color:green"><b>Data Sent Successfully</b></h1>';
    echo '<h2 align="center" style="color:blue">I Will Get Back To You,For More Information</h2>';
    echo '<h2 align="center" style="color:blue">Thanks for choosing us</h2>';
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
mysqli_close($conn);
?>
