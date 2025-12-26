<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
include_once 'connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enroll_no = $_POST["enroll_no"];
    $place = $_POST["place"];

    if($place=="CC3"){
        $sql = "DELETE FROM CC_3 WHERE Enroll_no='$enroll_no'";
        $sql1 = "UPDATE Student SET Loc = NULL WHERE Enroll_no='$enroll_no'";
    } else {
        $sql = "DELETE FROM Library WHERE Enroll_no='$enroll_no'";
        $sql1 = "UPDATE Student SET Loc = NULL WHERE Enroll_no='$enroll_no'";
    }

    if ($conn->query($sql) === TRUE) {
        $conn->query($sql1);
        $response = [
            "status" => "success",
            "message" => "Data deleted successfully!"
        ];
    } else {
        $response = [
            "status" => "error",
            "message" => "Error deleting data: " . $conn->error
        ];
    }

    // Close database connection
    $conn->close();

    // Send JSON response
    header("Content-Type: application/json");
    echo json_encode($response);
}
?>
