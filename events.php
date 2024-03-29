<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
     <?php
            include 'components/navbar.php';
            include 'Database/Database.php';

            
            // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
            

if (isset($_POST["submit"])) {
   $event_name = $_POST['event_name'];
   $description = $_POST['description'];
   $event_date = $_POST['event_date'];
   $location = $_POST['location'];
   $status = $_POST['status'];


   // $sql = "INSERT INTO `events`(`event_id`, `event_name`, `description`, `event_date`, `location`, `status`) VALUES (NULL,'$event_name', $description','$event_date','$location','$status')";
   $sql = "INSERT INTO `events`(`event_id`, `event_name`, `description`, `event_date`, `location`, `status`) VALUES (NULL,'$event_name', '$description','$event_date','$location','$status')";

   $result = mysqli_query($conn, $sql);
   echo $result;

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>
            
            <div class="home_title" style="text-align: center; color: black;margin-top: 50px;"> 
                <h1>events page</h1>
            </div>
            <h3>Add New User</h3>
                            <p class="text-muted">Complete the form below to add a new user</p>
                            <!-- <button>Add New event</button> -->


            <div class="form-container">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">event_name:</label>
                  <input type="text" class="form-control" name="event_name" placeholder="Albert">
               </div>

               <div class="col">
                  <label class="form-label">description: </label>
                  <input type="text" class="form-control" name="description" placeholder="description">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">location:</label>
               <input type="text" class="form-control" name="location" placeholder="examplecom">
            </div>

            <div class="mb-3">
                           <label class="form-label">date:</label>
                           <input type="date" class="form-control" name="event_date" placeholder="event_date">
                        </div>

            <div class="form-group mb-3">
               <label>status:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="status" id="upcoming" value="upcoming">
               <label for="male" class="form-input-label">upcoming</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="status" id="progress" value="in progress">
               <label for="female" class="form-input-label">in progress</label>
               &nbsp;
                              <input type="radio" class="form-check-input" name="status" id="completed" value="completed">
                              <label for="female" class="form-input-label">completed</label>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
</body>
</html>