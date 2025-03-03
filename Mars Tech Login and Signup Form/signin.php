<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'your_database');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to check if the user exists and verify password
    $sql = "SELECT * FROM applicants WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user data
        $user = $result->fetch_assoc();

        // You can hash the password before storing it for better security (use password_hash for sign-up)
        if ($user['password'] === $password) { // In a real-world application, you'd hash passwords!
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            echo "Sign-in successful. Welcome, " . $user['name'] . "!";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this email address.";
    }

    $conn->close();
}
?>
