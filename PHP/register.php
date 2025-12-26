<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
include_once 'connect.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["name"];
$enroll_no = $_POST["enroll_no"];
$email = $_POST["email"];
$DOB = $_POST["dob"];
$password = $_POST["password"];
$sql_check = "SELECT * FROM Tot_Student WHERE Stu_name = '$name' AND Enroll_no = '$enroll_no'";
$sql_check1 = "SELECT * FROM Student WHERE Stu_name = '$name' AND Enroll_no = '$enroll_no'";
    $result = $conn->query($sql_check);
    $result1= $conn->query($sql_check1);
    if ($result->num_rows > 0 && $result1->num_rows <1) {
        $sql_update = "UPDATE Tot_Student SET Pass= '$password',Email = '$email' WHERE Stu_name = '$name' AND Enroll_no = '$enroll_no'";
        if ($conn->query($sql_update) === TRUE) {
          echo "existing student.!!" ;
            $insert_sql = "INSERT INTO Student (Stu_name,Enroll_no,Email,Credit,Loc,DOB) VALUES ('$name','$enroll_no','$email',100,'','$DOB')";
            if ($conn->query($insert_sql) === TRUE) {
            echo "New record created successfully and password stored in tot_student.";
            header("Location: ../HTML/Home.html");
            exit();
            } else {
            echo "Error: " . $insert_sql. "<br>" . $conn->error;
            }
        } else {
          echo "Error updating password: " . $sql_update . "<br>" . $conn->error;
        }
      }
    else if($result->num_rows < 1){
        echo "User not a Student ";
    }
    else{
        echo "Already Registered " ;
    }
$conn->close();
}
?>