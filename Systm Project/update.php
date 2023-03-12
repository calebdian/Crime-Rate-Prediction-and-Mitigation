<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Crime Effect Table</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
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

// Retrieve all records from the table
$sql = "SELECT * FROM crime_effect";
$result = $conn->query($sql);

// Display the records in a table
if ($result->num_rows > 0) {
    echo "<table class='my-table'>";
    echo "<tr><th>Region ID</th><th>Region Name</th><th>Population Density</th><th>Date</th><th>Average Income</th><th>No. of Employed People</th><th>No. of Immigrants</th><th>Family Breakdown Rate</th><th>No. of Scholars</th><th>Drug Usage</th><th>Youth Concentration</th><th>Age Bracket</th><th>Percentage of Males</th><th>Race</th><th>Political Risk Index</th><th>No. of Security Policies</th><th>Action</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Region_id"] . "</td><td>" . $row["Region_name"] . "</td><td>" . $row["population_density"] . "</td><td>". $row["date"] ."</td><td>" . $row["average_income"] ."</td><td>". $row["No_of_employed_people"] ."</td><td>" . $row["No_of_immigrants"] ."</td><td>" . $row["Family_breakdown_rate"] . "</td><td>" . $row["No_of_Scholars"] . "</td><td>" . $row["Drug_usage"] . "</td><td>" . $row["Youth_concentration"] . "</td><td>" . $row["Youth_concentration"] . "</td><td>" . $row["Age_bracket"] . "</td><td>" . $row["Percentage_of_males"] . "</td><td>" . $row["Race"] . "</td><td>" . $row["Political_Risk_Index"] . "</td><td>" . $row["No_of_security_policies"] . "</td><td>";
        
        // Add an "Update" button that takes you to a form for updating records
        echo "<td><a href='homepage.html?id=" . $row["Region_id"] . "'>Update</a></td>";
        
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>
