<?php
// login.php

// Example credentials (in real scenarios, fetch from a database)
$validUsername = 'admin';
$validPassword = 'password';

// Get form input
$username = $_POST['username'];
$password = $_POST['password'];

// Basic validation (for demonstration purposes)
if ($username === $validUsername && $password === $validPassword) {
    // Redirect to result page
    header('Location: result.html');
    exit();
} else {
    // Handle invalid login (redirect to login with an error, show error message, etc.)
    echo 'Invalid credentials';
}
?>
