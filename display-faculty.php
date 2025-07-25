<?php
// Include the database connection file
require_once "connection.php";

// Check if the form was submitted for deletion
if(isset($_POST['submit']) && isset($_POST['Room_No'])){
    $roomNo = $_POST['Room_No'];

    // Prepare and execute the delete query
    $delete = "DELETE FROM faculty_details WHERE Room_No = '{$roomNo}'";
    $result_delete = $conn->query($delete);

    if($result_delete){
        echo "Data deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Retrieve data from the faculty_details table
$sql = "SELECT * FROM faculty_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row in a table
    echo "<table border='1'>";
    echo "<tr><th>Room No</th><th>Name</th><th>Designation</th><th>Email ID</th><th>Action</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["Room_No"]."</td>";
        echo "<td>".$row["Name"]."</td>";
        echo "<td>".$row["Designation"]."</td>";
        echo "<td>".$row["Email_ID"]."</td>";
        // Add a delete button for each record
        echo "<td><form action='' method='post'><input type='hidden' name='Room_No' value='".$row["Room_No"]."'><input type='submit' name='submit' value='Delete'></form></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
