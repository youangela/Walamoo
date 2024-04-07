<?php
// Read the credentials from the text file (assuming each line contains 'username password')
$credentials = file('credentials.txt', FILE_IGNORE_NEW_LINES);

// Get user input
$email = trim($_POST['email']); // Assuming you're using a form with POST method
$password = trim($_POST['password']);

// Check if the entered credentials match any stored credentials
foreach ($credentials as $line) {
    list($storedUsername, $storedPassword) = explode(' ', $line);
    if ($email === $storedUsername && $password === $storedPassword) {
        // Successful login
        echo "You are now logged in...";
        // You can redirect to a protected page here
		header('Location:/Walamoo/html/Dashboard.html');
        exit;
    }
}

// Incorrect credential
header('Location: login.html?error=1');
        exit;

?>
