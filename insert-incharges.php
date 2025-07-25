<?php

require("./connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are set
    if (
        isset($_POST['roomNo']) && 
        isset($_POST['labName']) && 
        isset($_POST['labIncharge']) && 
        isset($_POST['labAttendant'])
    ) {
        // Get form data
        $roomNo = mysqli_real_escape_string($conn, $_POST['roomNo']);
        $labName = mysqli_real_escape_string($conn, $_POST['labName']);
        $labIncharge = mysqli_real_escape_string($conn, $_POST['labIncharge']);
        $labAttendant = mysqli_real_escape_string($conn, $_POST['labAttendant']);

        // Insert data into the database
        $sql = "INSERT INTO lab_incharge (Room_No, Lab_Name, Lab_Incharge, Lab_Attendant) 
                VALUES ('$roomNo', '$labName', '$labIncharge', '$labAttendant')";

        if (mysqli_query($conn, $sql)) {
            echo "Lab Incharge details inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "All fields are required.";
    }
}

?>
