<?php
include_once 'connect.php'; 
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM Tot_Student WHERE Enroll_no = '$username' AND Pass = '$password'";
$sql1 = "SELECT * FROM Student WHERE Enroll_no = '$username'";
$result = $conn->query($sql);
$result1 = $conn->query($sql1);
if ($result->num_rows > 0 && $result1->num_rows > 0 ) {
    echo "success";
    header("Location: Dashboard.html");
      exit();
} 
else {
    echo "<p style='color: red;'>Invalid username or password!</p>";
}

$conn->close();
?>
