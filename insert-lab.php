<?php
require_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $roomNo = mysqli_real_escape_string($conn, $_POST['roomNo']);
    $labName = mysqli_real_escape_string($conn, $_POST['labName']);
    $floor = mysqli_real_escape_string($conn, $_POST['floor']);
    $noOfPCs = mysqli_real_escape_string($conn, $_POST['noOfPCs']);
    $pcModel = mysqli_real_escape_string($conn, $_POST['pcModel']);
    $projectorModel = mysqli_real_escape_string($conn, $_POST['projectorModel']);
    $upsModel = mysqli_real_escape_string($conn, $_POST['upsModel']);

    // Insert data into the database
    $sql = "INSERT INTO lab_details (Room_No, Lab_Name, Floor, No_Of_PCs, PC_Model, Projector_Model, UPS_Model) 
            VALUES ('$roomNo', '$labName', '$floor', '$noOfPCs', '$pcModel', '$projectorModel', '$upsModel')";

    if (mysqli_query($conn, $sql)) {
        echo "Lab details inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}

?>
