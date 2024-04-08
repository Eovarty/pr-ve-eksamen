<?php
session_start();
require_once('db.php');

if(isset($_SESSION['userID'])) {
    $userID = $_SESSION['userID'];

    // Delete all tickets associated with the user
    $deleteTicketsQuery = "DELETE FROM ticket WHERE userID = $userID";
    $deleteTicketsResult = mysqli_query($conn, $deleteTicketsQuery);

    if ($deleteTicketsResult) {
        // Tickets deletion successful
        // Now, delete the user from the database
        $deleteUserQuery = "DELETE FROM users WHERE userID = $userID";
        $deleteUserResult = mysqli_query($conn, $deleteUserQuery);

        if ($deleteUserResult) {
            // Account deletion successful
            // End session and redirect to login page or any other appropriate page
            session_unset(); // Unset all session variables
            session_destroy(); // Destroy the session data
            header("Location: login.html");
            exit();
        } else {
            // Account deletion failed
            echo "Error deleting account: " . mysqli_error($conn);
        }
    } else {
        // Tickets deletion failed
        echo "Error deleting tickets: " . mysqli_error($conn);
    }
} else {
    // User not logged in, redirect to login page
    header("Location: login.php");
    exit();
}
?>
