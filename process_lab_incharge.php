<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Incharge Details Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
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

        .container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
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
    <div class="container">
        <h2>Lab Incharge Details Form</h2>
        <form id="inchargeForm" action="insert-incharges.php" method="POST">
            <label for="roomNo">Room No:</label>
            <input type="text" name="roomNo" ><br>

            <label for="labName">Lab Name:</label>
            <input type="text" name="labName" ><br>

            <label for="labIncharge">Lab Incharge:</label>
            <input type="text" name="labIncharge" ><br>

            <label for="labAttendant">Lab Attendant:</label>
            <input type="text" name="labAttendant" ><br>

            <input type="submit" value="Submit"><br>

            <a href="./display-incharges.php"><b>View Data</b></a>
        </form>
        <p id="result"></p>
    </div>

    <script>
         document.getElementById("inchargeForm").addEventListener("submit", function(event) {
            event.preventDefault();

            // var roomNo = document.getElementById("roomNo").value.trim();
            // var name = document.getElementById("name").value.trim();
            // var designation = document.getElementById("designation").value.trim();
            // var email = document.getElementById("email").value.trim();

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
                    document.getElementById('inchargeForm').reset(); // Clear the form
                } else { // If there was an error
                    alert('Error submitting lab details. Please try again later.');
                }
            };

            // Send the request with form data
            xhr.send(formData);
        });

 /*       document.querySelector('#form').addEventListener('submit', function(event) {
            event.preventDefault();
            if (!validateForm()) {
                document.querySelector("#result").innerHTML="Enter Correct details";
                return false;
            }
            const formData = new FormData(this);
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'process_lab_incharge.php', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // document.querySelector("#result").innerHTML = xhr.responseText;
                    document.querySelector('#form').reset();
                } else {
                    alert('Request failed. Status: ' + xhr.status);
                }
            };
            xhr.onerror = function() {
                alert('Request failed.');
            };
            xhr.send(formData);
        });
*/
        function validateForm() {
            var roomNo = document.querySelector('input[name="roomNo"]').value;
            var labName = document.querySelector('input[name="labName"]').value;
            var labIncharge = document.querySelector('input[name="labIncharge"]').value;
            var labAttendant = document.querySelector('input[name="labAttendant"]').value;

            if (roomNo.trim() === '' || labName.trim() === '' || labIncharge.trim() === '' || labAttendant.trim() === '') {
                alert('All fields are required');
                return false;
            }

            return true; 
        }
    </script>
</body>
</html>
