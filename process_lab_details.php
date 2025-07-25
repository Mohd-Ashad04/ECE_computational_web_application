<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Details Form</title>
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
	
	        input[type="text"],
	        input[type="number"] {
	            width: 100%;
	            padding: 8px;
	            margin-bottom: 15px;
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
    <div class="container">
        <h2>Lab Details Form</h2>
        <form id="labDetailsForm" action="insert-lab.php" method="POST">
            <label for="roomNo">Room No:</label>
            <input type="text" name="roomNo"><br>

            <label for="labName">Lab Name:</label>
            <input type="text" name="labName" required><br>

            <label for="floor">Floor:</label>
            <input type="text" name="floor" required><br>

            <label for="noOfPCs">Number of PCs:</label>
            <input type="number" name="noOfPCs" required><br>

            <label for="pcModel">PC Model:</label>
            <input type="text" name="pcModel" required><br>

            <label for="projectorModel">Projector Model:</label>
            <input type="text" name="projectorModel" required><br>

            <label for="upsModel">UPS Model:</label>
            <input type="text" name="upsModel" required><br>

            <input type="submit" value="Submit"><br><br>
            <a href="./display-lab.php"><b>Lab Details</b></a>
        </form>
    </div>
    <script>
        document.getElementById('labDetailsForm').addEventListener('submit', function(event) {
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
                    document.getElementById('labDetailsForm').reset(); // Clear the form
                } else { // If there was an error
                    alert('Error submitting lab details. Please try again later.');
                }
            };

            // Send the request with form data
            xhr.send(formData);
        });

        function validateForm() {
            var roomNo = document.getElementsByName('roomNo')[0].value.trim();
            var labName = document.getElementsByName('labName')[0].value.trim();
            var floor = document.getElementsByName('floor')[0].value.trim();
            var noOfPCs = document.getElementsByName('noOfPCs')[0].value.trim();
            var pcModel = document.getElementsByName('pcModel')[0].value.trim();
            var projectorModel = document.getElementsByName('projectorModel')[0].value.trim();
            var upsModel = document.getElementsByName('upsModel')[0].value.trim();

            if (roomNo === '' || labName === '' || floor === '' || noOfPCs === '' || pcModel === '' || projectorModel === '' || upsModel === '') {
                alert('All fields are required');
                return false;
            }

            if (noOfPCs < 0) {
                alert('Number of PCs must be a non-negative integer');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
