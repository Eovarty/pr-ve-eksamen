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
    <link rel="stylesheet" href="adminstyle.css">
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
                                    <td><?php echo $row['status']?></td>
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
