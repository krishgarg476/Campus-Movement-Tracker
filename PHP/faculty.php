<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
include_once 'connect.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["name"];
$faculty_id = $_POST["faculty_id"];
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "SELECT * FROM Faculty WHERE Fac_ID = '$faculty_id' AND Password= '$password' AND Fac_name ='$name'AND Email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0  ) {
    echo "success";
    header("Location: Faculty_Dash.html");
      exit();
} 
else {
    echo "<p style='color: red;'>Invalid username or password!</p>";
}
$conn->close();
}
?>