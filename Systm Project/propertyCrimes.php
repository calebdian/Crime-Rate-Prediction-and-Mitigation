<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_dataset";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Retrieve the form data
  $burglary = $_POST["burglary"];
  $theft = $_POST["theft"];
  $robbery = $_POST["robbery"];
  $arson = $_POST["arson"];
  $shoplifting = $_POST["shoplifting"];
  $hijacking = $_POST["hijacking"];
  $vandalism = $_POST["vandalism"];

  // Prepare the SQL statement to insert data into the property_crimes table
  $sql = "INSERT INTO property_crimes (Burglary, Theft, Robbery, Arson, Shoplifting, Hijacking, Vandalism) VALUES (?, ?, ?, ?, ?, ?, ?)";

  // Prepare the statement
  $stmt = $conn->prepare($sql);

  // Bind the parameters
  $stmt->bind_param("iiiiiii", $burglary, $theft, $robbery, $arson, $shoplifting, $hijacking, $vandalism);

  // Execute the statement
  if ($stmt->execute()) {
    echo "Data inserted successfully!";
  } else {
    echo "Error inserting data: " . $conn->error;
  }

  // Close the statement and the connection
  $stmt->close();
  $conn->close();
}
?>
