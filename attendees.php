<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/attendees.css">
</head>
<body>
    <div class="home_title" style="text-align: center; color: black; margin-top: 50px;"> 
            <h1>Attendees</h1>
        </div> 
         <?php
                include 'components/navbar.php';
                include 'Database/Database.php';

                // Query to fetch attendees data
                    $sql = "SELECT * FROM attendees";
                
                    // Execute query
                    $result = $conn->query($sql);
                
                    // Check if there are rows in the result set
                    if ($result->num_rows > 0) {
                        // Output table header
                        echo "<table>";
                        echo "<tr><th>Attendee ID</th><th>Event ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Registration Date</th></tr>";
                
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["attendee_id"]. "</td>";
                            echo "<td>" . $row["event_id"]. "</td>";
                            echo "<td>" . $row["name"]. "</td>";
                            echo "<td>" . $row["email"]. "</td>";
                            echo "<td>" . $row["phone"]. "</td>";
                            echo "<td>" . $row["registration_date"]. "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                
                    // Close connection
                    $conn->close();
    ?>
</body>
</html>