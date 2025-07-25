<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = htmlspecialchars(trim($_POST["username"]));
        $password = htmlspecialchars(trim($_POST["password"]));

        // Prepare the SQL statement
        $stmt = $conn->prepare("SELECT * FROM user WHERE Username = ?");
        if ($stmt) {
            // Bind parameters
            $stmt->bind_param("s", $username);

            // Execute the statement
            $stmt->execute();

            // Get the result
            $result = $stmt->get_result();

            // Fetch the data
            if ($row = $result->fetch_assoc()) {
               
                // Compare plain text passwords
                if ($password === $row['Password']) {
                    $_SESSION["username"] = $username;
                    echo "success";
                } else {
                    echo "Invalid password. Please try again.";
                }
            } else {
                echo "Invalid username. Please try again.";
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error preparing the statement: " . $conn->error;
        }
    } else {
        echo "Username or password not provided.";
    }
} else {
    header("Location: home.html");
    exit();
}

// Close the database connection
$conn->close();
?>
