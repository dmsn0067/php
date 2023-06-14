<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>People List</h1>


<?php

//in this script we will run an example of how to pull data from the DB and show it on the website front end.
//To do this we have to:
//1 connect to the DB. We can do this by loading the login credentials into variables and using those to connect.
//2 run the connection with an if statement that if the connection fails to return an error and exit the program.
//3 get the data from out of the database by running a SQL query and selecting the ID and extracting the data.
//4 display the data in some way.
//5 close the connection when we are done.

//make some vars to store the login cred
$host = "replace this with host address";
$user = "replace this with username";
$pass = "replace this with password";
$db = "replace this with DB Name";

// Connect to the database
$con = mysqli_connect($host, $user, $pass, $db);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Fetch data from the table in the DB
$query = "SELECT ID, first_name, last_name, position, phone_number FROM personnel";
$result = mysqli_query($con, $query);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
  echo "<ul>";
  
  // Loop through each row and display the data as list items
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>ID: " . $row['ID'] . "</li>";
    echo "<li>First Name: " . $row['first_name'] . "</li>";
    echo "<li>Last Name: " . $row['last_name'] . "</li>";
    echo "<li>Position: " . $row['position'] . "</li>";
    echo "<li>Phone Number: " . $row['phone_number'] . "</li>";
    echo "<br>";
  }
  
  echo "</ul>";
} else {
  echo "No data found in the 'Personnel' table.";
}

// Close the database connection
mysqli_close($con);
?>

</body>
</html>
