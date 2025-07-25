<?php
require("./connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteRoomNo'])) {
    // Escape user input for security
    $deleteRoomNo = $conn->real_escape_string($_POST['deleteRoomNo']);

    // Attempt to delete data
    $sql = "DELETE FROM computational_item_details WHERE Room_No = '$deleteRoomNo'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

?>
