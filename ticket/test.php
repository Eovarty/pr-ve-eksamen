<!DOCTYPE html>
<html>
<head>
    <title>Ticket System</title>
</head>
<body>
    <h2>Submit a Ticket</h2>
    <form action="submit_ticket.php" method="post">
        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>
        <input type="submit" value="Submit">
    </form>
<?php
 $userID = $_SESSION['UserID'];

 echo $userID
 ?>
</body>
</html>
