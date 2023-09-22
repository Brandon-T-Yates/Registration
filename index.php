<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body bgcolor="696969">
    <!-- Header -->
    <h1>Try Registering Here on My Form!</h1>

    <!-- Registration Form -->
    <div>
        <h2>Registration Form</h2>
        <!-- The form sends data to 'connect.php' using the POST method when submitted -->
        <form action="connect.php" method="POST">
            
            <!-- Name Input Field -->
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" required><br><br>

            <!-- Email Input Field -->
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required><br><br>

            <!-- Phone Input Field -->
            <label for="phone">Phone: </label>
            <input type="text" name="phone" id="phone" required><br><br>

            <!-- Submit Button -->
            <input type="submit" name="submit" id="submit" required>
        </form>
    </div>
</body>
</html>