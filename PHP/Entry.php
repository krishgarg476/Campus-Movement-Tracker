<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
include_once 'connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enroll_no = $_POST["enroll_no"];
    $place = $_POST["place"];
    $room_no = $_POST["room_no"];

    // Check the location
    if ($place == "CC3") {
        $sql_library = "SELECT * FROM Library WHERE Enroll_no = '$enroll_no'";
        $library_result = $conn->query($sql_library);

        if ($library_result->num_rows > 0) {
            // Delete existing entry from Library
            $sql_delete = "DELETE FROM Library WHERE Enroll_no = '$enroll_no'";
            $conn->query($sql_delete);

            // Update Student location and credit
            $sql_update_student = "UPDATE Student SET Credit = Credit - 5, Loc = 'CC3' WHERE Enroll_no = '$enroll_no'";
            if ($conn->query($sql_update_student) === TRUE) {
                echo "Student updated successfully";
                // Insert into CC_3
                $sql_update = "INSERT INTO CC_3 (Enroll_no, Room_no) VALUES ('$enroll_no', '$room_no')";
                $conn->query($sql_update);
            } else {
                echo "Error updating student: " . $conn->error;
            }
        } else {
            // Update Student location to CC3
            $sql_update_student = "UPDATE Student SET Loc = 'CC3' WHERE Enroll_no = '$enroll_no'";
            if ($conn->query($sql_update_student) === TRUE) {
                echo "Student updated successfully";
                // Insert into CC_3
                $sql_update = "INSERT INTO CC_3 (Enroll_no, Room_no) VALUES ('$enroll_no', '$room_no')";
                $conn->query($sql_update);
            } else {
                echo "Error updating student: " . $conn->error;
            }
        }
    } 
    else if ($place == "Library") {
        $sql_cc3 = "SELECT * FROM CC_3 WHERE Enroll_no = '$enroll_no'";
        $cc3_result = $conn->query($sql_cc3);

        if ($cc3_result->num_rows > 0) {
            // Delete existing entry from CC_3
            $sql_delete = "DELETE FROM CC_3 WHERE Enroll_no = '$enroll_no'";
            $conn->query($sql_delete);

            // Update Student location and credit
            $sql_update_student = "UPDATE Student SET Credit = Credit - 5, Loc = 'Library' WHERE Enroll_no = '$enroll_no'";
            if ($conn->query($sql_update_student) === TRUE) {
                echo "Student updated successfully";
                // Insert into Library
                $sql_update = "INSERT INTO Library (Enroll_no, Room_no) VALUES ('$enroll_no', '$room_no')";
                $conn->query($sql_update);
            } else {
                echo "Error updating student: " . $conn->error;
            }
        } else {
            // Update Student location to Library
            $sql_update_student = "UPDATE Student SET Loc = 'Library' WHERE Enroll_no = '$enroll_no'";
            if ($conn->query($sql_update_student) === TRUE) {
                echo "Student updated successfully";
                // Insert into Library
                $sql_update = "INSERT INTO Library (Enroll_no, Room_no) VALUES ('$enroll_no', '$room_no')";
                $conn->query($sql_update);
            } else {
                echo "Error updating student: " . $conn->error;
            }
        }
    } else {
        echo "Invalid place specified.";
    }

    $conn->close();
}
?>

<!-- <?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
include_once 'connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enroll_no = $_POST["enroll_no"];
    $qr_no = $_POST["qr_no"];
    $place = $_POST["place"];
    $room_no = $_POST["room_no"];

    $sql_check = "SELECT * FROM QR WHERE QR_no = '$qr_no'";
    $result = $conn->query($sql_check);
    if ($result->num_rows > 0) {
        if ($place == "CC3") {
            $sql_library = "SELECT * FROM Library WHERE Enroll_no = '$enroll_no'";
            $library_result = $conn->query($sql_library);
            
            if ($library_result->num_rows > 0) {
                $sql_delete ="DELETE from Library WHERE Enroll_no = '$enroll_no'";
                $conn->query($sql_delete); // Delete existing entry from Library
                $sql_update_student = "UPDATE Student SET Credit = Credit - 5, Loc = 'CC3' WHERE enroll_no = '$enroll_no'";
                if ($conn->query($sql_update_student) === TRUE) {
                    echo "Student updated successfully";
                    $sql_update = "INSERT INTO CC_3 (QR_no,Enroll_no,Room_no) VALUES ('$qr_no','$enroll_no','$room_no')";
                    $conn->query($sql_update); // Insert into CC_3
                } else {
                    echo "Error updating student: " . $conn->error;
                }
            } else {
                $sql_update_student = "UPDATE Student SET Loc = 'CC3' WHERE enroll_no = '$enroll_no'";
                if ($conn->query($sql_update_student) === TRUE) {
                    echo "Student updated successfully";
                    $sql_update = "INSERT INTO CC_3 (QR_no,Enroll_no,Room_no) VALUES ('$qr_no','$enroll_no','$room_no')";
                    $conn->query($sql_update); // Insert into CC_3
                } else {
                    echo "Error updating student: " . $conn->error;
                }
            }
        } 
        else if($place == "Sac") {
            $sql_cc3 = "SELECT * FROM CC_3 WHERE Enroll_no = '$enroll_no'";
            $library_result = $conn->query($sql_cc3);
            
            if ($library_result->num_rows > 0) {
                $sql_delete ="DELETE from CC_3 WHERE Enroll_no = '$enroll_no'";
                $conn->query($sql_delete); // Delete existing entry from CC_3
                $sql_update_student = "UPDATE Student SET Credit = Credit - 5, Loc = 'Library' WHERE enroll_no = '$enroll_no'";
                if ($conn->query($sql_update_student) === TRUE) {
                    echo "Student updated successfully";
                    $sql_update = "INSERT INTO Sac (QR_no,Enroll_no,Room_no) VALUES ('$qr_no','$enroll_no','$room_no')";
                    $conn->query($sql_update); // Insert into Library
                } else {
                    echo "Error updating student: " . $conn->error;
                }
            } 
            else {
                $sql_update_student = "UPDATE Student SET Loc = 'Library' WHERE enroll_no = '$enroll_no'";
                if ($conn->query($sql_update_student) === TRUE) {
                    echo "Student updated successfully";
                    $sql_update = "INSERT INTO Library (QR_no,Enroll_no,Room_no) VALUES ('$qr_no','$enroll_no','$room_no')";
                    $conn->query($sql_update); // Insert into Library
                } else {
                    echo "Error updating student: " . $conn->error;
                }
            }
        }
    }
    else{
        echo "QR code not found" ;
    }
    $conn->close();
}
?> -->
