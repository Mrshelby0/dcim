<?php
// Start session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are provided
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Validate username and password (you may add more validation here)
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Example: Check if username and password are correct (replace with your authentication logic)
        if ($username === "admin" && $password === "password") {
            // Set session variables
            $_SESSION["username"] = $username;

            // Redirect to the index page or any other page after successful login
            header("Location: index.php");
            exit;
        } else {
            // If username or password is incorrect, display an error message
            $error = "Invalid username or password.";
        }
    } else {
        // If username or password is not provided, display an error message
        $error = "Username and password are required.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Login</h2>
        <form action="login.php" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:border-blue-500" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg w-full">Login</button>
        </form>
    </div>
</body>
</html>
