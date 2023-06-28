<?php
// Validate login credentials and redirect to appropriate page

// Retrieve submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Validate the credentials against the database (example)
// Replace this with your own database logic
if ($username === 'therhymaticpoet@gmail.com' && $password === 'Rhymatic1') {
  // Successful login
  // You can create a session or redirect the user to a specific page
  // Example: Creating a session
  session_start();
  $_SESSION['username'] = $username;
  header('Location: dashboard.php'); // Redirect to dashboard page
  exit();
} else {
  // Invalid login credentials
  // You can display an error message or redirect back to the login page
  header('Location: login.html?error=invalid'); // Redirect to login page with an error query parameter
  exit();
}
?>
