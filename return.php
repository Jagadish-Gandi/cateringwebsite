<?php
$name = $_POST['name'];
$people = $_POST['people'];
$dateTime = $_POST['D&T'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

$sql = "INSERT INTO catering (username, people, date_of_event, mobile, message)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sisss", $name, $people, $dateTime, $mobile, $message);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "New record created successfully";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
mysqli_close($conn);

?>