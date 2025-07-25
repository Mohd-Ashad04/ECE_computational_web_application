<?php
// Include the database connection file
require_once "connection.php";

// Check if the form was submitted for deletion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && isset($_POST['Room_No'])) {
    // Escape user input for security
    $roomNo = $conn->real_escape_string($_POST['Room_No']);

    // Prepare and execute the delete query
    $delete = "DELETE FROM lab_details WHERE Room_No = '{$roomNo}'";
    $result_delete = $conn->query($delete);

    if ($result_delete) {
        echo "Data deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Retrieve data from the lab_details table
$sql = "SELECT * FROM lab_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row in a table
    echo "<table border='1'>";
    echo "<tr><th>Room No</th><th>Lab Name</th><th>Floor</th><th>No. of PCs</th><th>PC Model</th><th>Projector Model</th><th>UPS Model</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Room_No"] . "</td>";
        echo "<td>" . $row["Lab_Name"] . "</td>";
        echo "<td>" . $row["Floor"] . "</td>";
        echo "<td>" . $row["No_Of_PCs"] . "</td>";
        echo "<td>" . $row["PC_Model"] . "</td>";
        echo "<td>" . $row["Projector_Model"] . "</td>";
        echo "<td>" . $row["UPS_Model"] . "</td>";
        // Add a delete button for each record
        echo "<td><form action='' method='post'><input type='hidden' name='Room_No' value='" . $row["Room_No"] . "'><input type='submit' name='submit' value='Delete'></form></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
