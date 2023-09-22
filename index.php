<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        /* Add CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        h1 {
            margin: 0;
            text-align: center;
            font-size: 28px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        /* Set a fixed width and padding for input fields */
        input[type="text"],
        input[type="email"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Register Here</h1>
    </header>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="connect.php" method="POST">
            <!-- Name Input Field -->
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <!-- Email Input Field -->
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <!-- Phone Input Field -->
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" required>

            <!-- Submit Button -->
            <input type="submit" name="submit" id="submit" value="Register">
        </form>
    </div>
</body>
</html>