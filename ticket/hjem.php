<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <script>
    // Function to confirm deletion of the current user's account
    function confirmDelete() {
        var result = confirm("Are you sure you want to delete your account?");
        if (result) {
            // If user confirms, redirect to delete_account.php
            window.location.href = "delete_account.php";
        }
    }

    // Function to confirm deletion of another account
    function confirmDeleteOther() {
        var userID = prompt("Enter the ID of the account you want to delete:");
        if (userID) {
            var result = confirm("Are you sure you want to delete this account?");
            if (result) {
                // If user confirms, redirect to delete_account.php with the userID as a query parameter
                window.location.href = "delete_account.php?userID=" + userID;
            }
        }
    }
    </script>
</head>
<body>
    <header>    
        <a class="title">Home page</a>
    
        </nav>
        <nav>
            <ul class="nav_links">
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="index.html">Send Ticket</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <!-- Button to delete another account -->
                <li><a button onclick="confirmDeleteOther()">Delete Another Account</button></li>
                <!-- Button to delete current account -->
                <li><a button onclick="confirmDelete()">Delete Account</button></li>
                <!-- inkluderer kode for en "dropdown-meny" -->
                <?php
                ?>
                </a></li>
            </ul>
        </nav>
           
    </header>
</body>
</html>
