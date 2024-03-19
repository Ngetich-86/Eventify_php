<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎈Event✨fy🎇</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <div class="home_title" style="text-align: center; color: black; margin-top: 50px;"> 
        <h1>Home dashboard</h1>
    </div> 
     <?php
            include 'components/navbar.php';
            include 'Database/Database.php';

        

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Query to fetch all rows from the events table
            $sql = "SELECT * FROM events";
            $result = $conn->query($sql);
            
            // Check if there are rows in the result set
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="card">';
                                echo '<h2>' . $row["event_name"] . '</h2>';
                                echo '<p><strong>Event ID:</strong> ' . $row["event_id"] . '</p>';
                                echo '<p><strong>Description:</strong> ' . $row["description"] . '</p>';
                                echo '<p><strong>Location:</strong> ' . $row["location"] . '</p>';
                                echo '<p><strong>Event Date:</strong> ' . $row["event_date"] . '</p>';
                                echo '<p><strong>Status:</strong> ' . $row["status"] . '</p>';
                                echo '</div>';
                }
            } else {
                echo "0 results";
            }
            
            // Close connection
            $conn->close();
            ?>
       


</body>
</html>