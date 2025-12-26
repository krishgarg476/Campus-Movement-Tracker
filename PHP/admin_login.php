<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
include_once 'connect.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$password = $_POST["password"];
echo $password;
$sql = "SELECT * FROM Admin WHERE Admin_ID ='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "New record created successfully";
    header("Location: ../HTML/Admin.html");
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>