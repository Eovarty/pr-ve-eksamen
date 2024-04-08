<?php
require_once('db.php');
session_start();

if(isset($_SESSION['userID'])) {
    // Set character encoding for PHP
    header('Content-Type: text/html; charset=utf-8');

    // Set character set for the database connection
    mysqli_set_charset($conn, "utf8");

    // Retrieve the userID from the session
    $userID = $_SESSION['userID'];

    // Prepare SQL query with a JOIN to get the username
    $query = "SELECT ticket.*, users.username 
              FROM ticket 
              INNER JOIN users 
              ON ticket.userID = users.userID";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Database query failed."); // Handle query failure
    }
    
} else {
    header("Location: index.php");
    exit();
}
?>
