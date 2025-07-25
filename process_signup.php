<?php
include("connection.php"); // Include the database connection details

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are set
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirmPassword"])) {
        // Retrieve and sanitize form data
        $name = htmlspecialchars(trim($_POST["name"]));
        $email = htmlspecialchars(trim($_POST["email"]));
        $password = htmlspecialchars(trim($_POST["password"]));
        $confirmPassword = htmlspecialchars(trim($_POST["confirmPassword"]));

        // Validate form data
        if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
            echo "All fields are required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
        } elseif ($password !== $confirmPassword) {
            echo "Passwords do not match.";
        } else {
            // Hash the password

            // Prepare the SQL statement
            $stmt = $conn->prepare("INSERT INTO user (Username, Password) VALUES (?, ?)");
            if ($stmt) {
                // Bind parameters
                $stmt->bind_param("ss", $name, $password);

                // Execute the statement
                if ($stmt->execute()) {
                    echo "Sign up successful!";
                } else {
                    echo "Error: " . $stmt->error;
                }

                // Close the statement
                $stmt->close();
            } else {
                echo "Error preparing the statement: " . $conn->error;
            }
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Form submission method not allowed.";
}

// Close the database connection
$conn->close();
?>
