<?php
// Include the database connection file
require_once "connection.php";

// Check if the form was submitted for deletion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && isset($_POST['Room_No'])) {
    // Escape user input for security
    $roomNo = $conn->real_escape_string($_POST['Room_No']);

    // Prepare and execute the delete query
    $delete = "DELETE FROM lab_incharge WHERE Room_No = '{$roomNo}'";
    $result_delete = $conn->query($delete);

    if ($result_delete) {
        echo "Data deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Retrieve data from the lab_incharge table
$sql = "SELECT * FROM lab_incharge";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row in a table
    echo "<table border='1'>";
    echo "<tr><th>Room No</th><th>Lab Name</th><th>Lab Incharge</th><th>Lab Attendant</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Room_No"] . "</td>";
        echo "<td>" . $row["Lab_Name"] . "</td>";
        echo "<td>" . $row["Lab_Incharge"] . "</td>";
        echo "<td>" . $row["Lab_Attendant"] . "</td>";
        // Add a delete button for each record
        echo "<td><form action='' method='post'><input type='hidden' name='Room_No' value='" . $row["Room_No"] . "'><input type='submit' name='submit' value='Delete'></form></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
