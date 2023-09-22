<?php
    // Check if the HTTP request method is POST and if the 'submit' field is set in the POST data
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        // Attempt to establish a database connection to 'register' database on localhost
        $con = mysqli_connect('localhost', 'root', '', 'register' or die("Connection Failed:" .mysqli_connect_error()));

        // Check if the 'name', 'email', and 'phone' fields are set in the POST data
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
            // Retrieve values from the POST data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            // Construct an SQL query to insert data into the 'users' table
            $sql = "INSERT INTO `users` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone')";

            // Execute the SQL query using the database connection
            $query = mysqli_query($con, $sql);

            // Check if the query was executed successfully and display message
            if ($query) {
                echo "Entry Successful";
            } else {
                echo "An Error has Occurred";
            }
        }
    }
?>