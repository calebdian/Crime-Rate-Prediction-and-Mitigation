<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $homicide = $_POST['homicide'];
  $assault = $_POST['assault'];
  $violence = $_POST['violence'];
  $stalking = $_POST['stalking'];
  $rape = $_POST['rape'];
  $kidnapping = $_POST['kidnapping'];
  $robbery = $_POST['robbery'];
  $hate_crimes = $_POST['hate_crimes'];

  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "crime_dataset";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare and bind the SQL statement
    // Prepare a SQL query to insert the data into the table
    $stmt = $conn->prepare("INSERT INTO crimes_against_people (Homicide, Assault, Violence, Stalking, Rape, Kidnapping, Robbery, Hate_crimes) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind the form data to the prepared statement
    $stmt->bind_param("iiiiiiii", $_POST["homicide"], $_POST["assault"], $_POST["violence"], $_POST["stalking"], $_POST["rape"], $_POST["kidnapping"], $_POST["robbery"], $_POST["hate_crimes"]);
  
    // Execute the statement to insert the data
    if ($stmt->execute()) {
      // Data has been successfully inserted into the table
      echo "Data has been successfully inserted into the table.";
    } else {
      // Error occurred while inserting the data
      echo "Error: " . $stmt->error;
    }
  
    // Close the statement and database connection
    $stmt->close();
    $conn->close();
  }
  ?>
