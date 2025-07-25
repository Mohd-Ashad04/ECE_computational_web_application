<?php
// Include the database connection file
require_once "connection.php";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $roomNo = $conn->real_escape_string($_POST['roomNo']);
    $name = $conn->real_escape_string($_POST['name']);
    $designation = $conn->real_escape_string($_POST['designation']);
    $email = $conn->real_escape_string($_POST['email']);

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO faculty_details (Room_No, Name, Designation, Email_ID) VALUES ('$roomNo', '$name', '$designation', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

   }
?>
