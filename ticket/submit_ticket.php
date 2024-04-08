<?php
session_start(); // Start the session (if not started already)
include 'db.php'; // Include the file containing your database connection code

// Check if 'UserID' is set in $_SESSION
if(isset($_SESSION['userID'])) {
    $userID = $_SESSION['userID'];
    
    // Process form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if 'subject' is set in $_POST
        if(isset($_POST['subject'])) {
            $subject = $_POST['subject'];
            $description = $_POST['description'];
            
            // Prepare the SQL statement to prevent SQL injection
            $sql = "INSERT INTO ticket (subject, description, status, date, userID) VALUES (?, ?, 'Not completed', CURDATE(), ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $subject, $description, $userID);
            
            if ($stmt->execute()) {
                header("location: user.php");
            } else {
                echo "Error: " . $stmt->error;
            }
            
            $stmt->close(); // Close the prepared statement
        } else {
            echo "Subject field is required"; // Or handle missing subject field
        }
    }
} else {
    echo "User not authenticated. Please log in."; // Or handle authentication as needed
}

$conn->close(); // Close the database connection
?>
