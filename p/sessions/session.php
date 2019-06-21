<?php
// Starting the session
session_start();
// Storing the value in session
$_SESSION['id'] = 342;
// conditional usage of session values that may have been set in a previous session
if (!isset($_SESSION["login"])) {
    echo "Please login first";
    exit;
}
// now you can use the login safely
$user = $_SESSION["login"];
// Getting a value from the session data, or with default value,
// using the Null Coalescing operator in PHP 7
$name = $_SESSION['name'] ?? 'Anonymous';
