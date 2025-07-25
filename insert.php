<?php
require("./connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $roomNo = $conn->real_escape_string($_POST['roomNo']);
    $name = $conn->real_escape_string($_POST['name']);
    $laptopModel = $conn->real_escape_string($_POST['laptopModel']);
    $pcModel = $conn->real_escape_string($_POST['pcModel']);
    $printerModel = $conn->real_escape_string($_POST['printerModel']);
    $tabletModel = $conn->real_escape_string($_POST['tabletModel']);

    // Attempt to insert data
    $sql = "INSERT INTO computational_item_details (Room_No, Name, Laptop_Model, PC_Model, Printer_Model, Graphic_Tablet_Model) VALUES ('$roomNo', '$name', '$laptopModel', '$pcModel', '$printerModel', '$tabletModel')";
    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
