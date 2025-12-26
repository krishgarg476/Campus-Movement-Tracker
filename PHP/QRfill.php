<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
include_once 'connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Delete all entries from the QR table
    $sql1 = "DELETE FROM QR";
    if ($conn->query($sql1) === TRUE) {
        // Get the random number from the POST data
        $qr_no = $_POST["randomNumber"];

        // Insert the new tuple with the random number
        $sql = "INSERT INTO QR (QR_no) VALUES ('$qr_no')";
        if ($conn->query($sql) === TRUE) {
            // If insertion is successful, send success response
            $response = [
                "status" => "success",
                "message" => "New record created successfully"
            ];
            header("Content-Type: application/json");
            echo json_encode($response);
            exit(); // Stop further execution
        } else {
            // If insertion fails, send error response
            $response = [
                "status" => "error",
                "message" => "Error: " . $sql . "<br>" . $conn->error
            ];
            header("Content-Type: application/json");
            echo json_encode($response);
            exit(); // Stop further execution
        }
    } else {
        // If deletion fails, send error response
        $response = [
            "status" => "error",
            "message" => "Error deleting entries from QR table: " . $conn->error
        ];
        header("Content-Type: application/json");
        echo json_encode($response);
        exit(); // Stop further execution
    }
}

?>
