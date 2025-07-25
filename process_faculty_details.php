<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ece Computational Database - Faculty Details</title>
    <style>
          body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #09396d;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .form-container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form > * {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav>
    <a href="home.php">Home</a>
        <a href="process_computational_details.php">Computational Details</a>
        <a href="process_faculty_details.php">Faculty Details</a>
        <a href="process_lab_details.php">Lab Details</a>
        <a href="process_lab_incharge.php">Lab Incharges</a>
        <a href="login_process.php">Login</a>
        <a href="process_signup.php">Sign up</a>
    </nav>
    <div class="form-container">
        <form id="facultyForm" action="insert-faculty.php" method="POST">
            <h2>Ece Computational Database</h2>
            <p>Enter faculty details:</p>

            <label for="roomNo">Room No:</label>
            <input type="text" id="roomNo" name="roomNo" required>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="designation">Designation:</label>
            <input type="text" id="designation" name="designation" required>

            <label for="email">Email ID:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Submit"><br>
            
            <a href="./display-faculty.php"><b>View Data</b></a>
        </form>

    </div>
<!--
    <script>
        document.getElementById("facultyForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            var roomNo = document.getElementById("roomNo").value.trim();
            var name = document.getElementById("name").value.trim();
            var designation = document.getElementById("designation").value.trim();
            var email = document.getElementById("email").value.trim();
            
            if (roomNo === "" || name === "" || designation === "" || email === "") {
                alert("Please fill out all fields.");
                return;
            }
            
            var validDesignations = ["HOD", "Professor", "Assistant Professor"];
            if (!validDesignations.includes(designation)) {
                alert("Invalid designation. Please enter HOD, Professor, or Assistant Professor.");
                return;
            }
            
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return;
            }

            // AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "process_faculty_details.php", true);
            xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle response from the server
                    alert(xhr.responseText);
                    // Reset the form
                    document.getElementById("facultyForm").reset();
                }
            };
            xhr.send(JSON.stringify({
                roomNo: roomNo,
                name: name,
                designation: designation,
                email: email
            }));
        });
    </script>
    -->
<!--
    <script>
        document.getElementById("facultyForm").addEventListener("submit", function(event) {
            event.preventDefault();

            var roomNo = document.getElementById("roomNo").value.trim();
            var name = document.getElementById("name").value.trim();
            var designation = document.getElementById("designation").value.trim();
            var email = document.getElementById("email").value.trim();

            if (roomNo === "" || name === "" || designation === "" || email === "") {
                alert("Please fill out all fields.");
                return;
            }

            var validDesignations = ["HOD", "Professor", "Assistant Professor"];
            if (!validDesignations.includes(designation)) {
                alert("Invalid designation. Please enter HOD, Professor, or Assistant Professor.");
                return;
            }

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return;
            }

            event.preventDefault(); // Prevent default form submission


            var formData = new FormData(this); // Create FormData object with form data

            // Create XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Configure XMLHttpRequest
            xhr.open('POST', this.action, true); // Set up POST request to 'process_lab_details.php'

            // Define what happens when the request is complete
            xhr.onload = function() {
                if (xhr.status === 200) { // If request was successful
                    alert('Lab details submitted successfully!');
                    document.getElementById('facultyForm').reset(); // Clear the form
                } else { // If there was an error
                    alert('Error submitting lab details. Please try again later.');
                }
            };

            // Send the request with form data
            xhr.send(formData);
        });
    </script>
    -->
    <script>
        function validateForm() {
            var roomNo = document.getElementById("roomNo").value.trim();
            var name = document.getElementById("name").value.trim();
            var designation = document.getElementById("designation").value.trim();
            var email = document.getElementById("email").value.trim();

            if (roomNo === "" || name === "" || designation === "" || email === "") {
                alert("Please fill out all fields.");
                return;
            }

            var validDesignations = ["HOD", "Professor", "Assistant Professor"];
            if (!validDesignations.includes(designation)) {
                alert("Invalid designation. Please enter HOD, Professor, or Assistant Professor.");
                return;
            }

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return;
            }

            return true;
        }

        document.getElementById("facultyForm").addEventListener("submit", function(event) {
            event.preventDefault();

            var roomNo = document.getElementById("roomNo").value.trim();
            var name = document.getElementById("name").value.trim();
            var designation = document.getElementById("designation").value.trim();
            var email = document.getElementById("email").value.trim();

            event.preventDefault(); // Prevent default form submission

            if (!validateForm()) {
                return;
            }

            var formData = new FormData(this); // Create FormData object with form data

            // Create XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Configure XMLHttpRequest
            xhr.open('POST', this.action, true); // Set up POST request to 'process_lab_details.php'

            // Define what happens when the request is complete
            xhr.onload = function() {
                if (xhr.status === 200) { // If request was successful
                    alert('Lab details submitted successfully!');
                    document.getElementById('facultyForm').reset(); // Clear the form
                } else { // If there was an error
                    alert('Error submitting lab details. Please try again later.');
                }
            };

            // Send the request with form data
            xhr.send(formData);
        });
    </script>
    $_COOKIE

</body>
</html>
