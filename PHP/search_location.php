<style>
/* Reset default browser styles for tables */
table {
  margin: 0;
  padding: 0;
  border-spacing: 0; /* Remove default table spacing */
  border-collapse: collapse; /* Combine table borders for cleaner look */
  width: 100%; /* Make table fill available width */
  font-family: Arial, sans-serif;
}

td, th {
  text-align: left; /* Align content left by default */
  padding: 10px; /* Increase padding for better readability */
  border: 1px solid #ddd; /* Use lighter gray for borders */
}

th {
  background-color: yellow;
  font-weight: bold; /* Make headers bolder for distinction */
}

tr:nth-child(even) {
  background-color: #fafafa; /* Lighter gray background for even rows */
}

/* Table caption styling (optional) */
caption {
  padding: 10px;
  font-size: 18px;
  font-weight: bold;
  text-align: left;
}

</style>
<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
include_once 'connect.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enroll_no = $_POST["enroll_no"];
    $sql = "SELECT * FROM Student WHERE Enroll_no = '$enroll_no'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<h2>List of Entries</h2>";
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Location</th>";
        echo "<th>Enroll No</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        
        while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Stu_name"] . "</td>";
        echo "<td>" . $row["Loc"] . "</td>";
        echo "<td>" . $row["Enroll_no"] . "</td>";
        echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "No entries found.";
    }
}
else{
    echo "Already Registered " ;
}

$conn->close();
?>