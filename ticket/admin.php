<?php
include 'adminphp.php';

include 'hjem.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #B5C0D0; 
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .beholder {
            width: 80%;
            margin: auto;
        }

        .card {
            background-color: #fff; 
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .card-header {
            background-color: #434c59;
            color: #fff;
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .display-6 {
            margin: 0;
        }

        .card-body {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            color: #333; 
            font-size: x-large;
        }

        tr {
            border-bottom: 1px solid #ddd; 
        }

        tr.header {
            background-color: #555;
            color: #fff; 
        }

        td {
            padding: 10px;
            text-align: center;
        }

        .text-center {
            text-align: center;
        }

        /* Button style */
        button {
            background-color: transparent;
            border: none;
            color: black;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: x-large;
        }

        button:hover {
            background-color: transparent;
            color: #999999;
        }

        span:hover {
            background-color: transparent;
            color: #999999;
        }

        .popup-menu {
            position: relative;
            display: inline-block;
        }

        .popup-content {
            background-color: black;
            display: none;
            position: absolute;
            background-color: #fff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            z-index: 1;
        }

        .popup-content a {
            color: #333;
            text-decoration: none;
            display: block;
            padding: 10px;
        }

        .popup-content a:hover {
            background-color: #f2f2f2;
        }

        .popup-menu:hover .popup-content {
            display: block;
        }
    </style>


<script>
    // Function to send AJAX request to changestatus.php
    function changeStatusCompleted(userID) {
        // Send AJAX request to changestatus.php with userID as parameter
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "changestatus.php?userID=" + userID, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Display response from changestatus.php
                alert(xhr.responseText);
                // You can perform additional actions here as needed
            }
        };
        xhr.send();
    }
</script>

</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-6 text-center">User Data</h2>
                    </div>
                    <div class="card-body">
                        <?php if(mysqli_num_rows($result) > 0) { ?>
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>TicketID</th>
                                    <th>Subject</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Username</th> <!-- Changed column header -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Display user data in table rows
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['ticketID']?></td>
                                    <td><?php echo $row['subject']?></td>
                                    <td><?php echo $row['description']?></td>
                                    <td>
                                    <div class="popup-menu">
                                         <span><?php echo $row['status']?></span>
                                         <div class="popup-content">
                                             <!-- Pass userID to changeStatusCompleted() -->
                                             <button onclick="changeStatusCompleted(<?php echo $row['userID']; ?>)">Completed</a>
                                             <button onclick="changeStatusNot()">Not completed</a>
                                         </div>
                                     </div>
                                    </td>
                                    <td><?php echo $row['date']?></td>
                                    <td><?php echo $row['username']?></td> <!-- Display username -->
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <?php } else { ?> 
                            <p class="no-tickets">No tickets submitted.</p> 
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
