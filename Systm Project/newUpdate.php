<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Update Record</title>
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

// Retrieve the record with the specified Region ID
$region_id = $_GET["id"];
$sql = "SELECT * FROM crime_effect WHERE Region_id = $region_id";
$result = $conn->query($sql);

// If a record is found, display a form with its existing data pre-filled
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    ?>

    <form action="updateData.php" method="POST">
      <label for="region_id">Region ID:</label>
      <input type="text" id="region_id" name="region_id" value="<?php echo $row["Region_id"]; ?>" readonly>

      <label for="region_name">Region Name:</label>
      <input type="text" id="region_name" name="Region" value="<?php echo $row["Region_name"]; ?>">

      <label for="population_density">Population Density:</label>
      <input type="text" id="population_density" name="Population_density" value="<?php echo $row["population_density"]; ?>">

      <label for="date">Date:</label>
      <input type="date" id="date" name="date" value="<?php echo $row["date"]; ?>">

      <label for="average_income">Average Income:</label>
      <input type="text" id="average_income" name="monies" value="<?php echo $row["average_income"]; ?>">

      <label for="no_of_employed_people">No. of Employed People:</label>
      <input type="text" id="no_of_employed_people" name="employ" value="<?php echo $row["No_of_employed_people"]; ?>">

      <label for="no_of_immigrants">No. of Immigrants:</label>
      <input type="text" id="no_of_immigrants" name="migrate" value="<?php echo $row["No_of_immigrants"]; ?>">

      <label for="family_breakdown_rate">Family Breakdown Rate:</label>
      <input type="text" id="family_breakdown_rate" name="Faminecausal" value="<?php echo $row["Family_breakdown_rate"]; ?>">

      <label for="no_of_scholars">No. of Scholars:</label>
      <input type="text" id="no_of_scholars" name="Education" value="<?php echo $row["No_of_Scholars"]; ?>">

      <label for="drug_usage">Drug Usage:</label>
      <input type="text" id="drug_usage" name="drugs" value="<?php echo $row["Drug_usage"]; ?>">

      <label for="youth_concentration">Youth Concentration:</label>
      <input type="number" id="youths number" name="Youtconc" value="<?php echo $row["Youth_concentration"]; ?>">
    <!-- <label for="age">Age bracket:</label><br>
    <input type="text" id="age_bracket" name="age_bracket" value="<?php echo $row["Age_bracket"]; ?>"> -->
    <label for="males percentage">Percentage of males:</label>
    <input type="number" id="males percentage" name="malespercentage" value="<?php echo $row["Percentage_of_males"]; ?>">
   <!--  <label for="race">Race:</label><br>
    <input type="text" id="race" name="religion" value="<?php echo $row["Race"]; ?>"> -->
    <label for="politics">Political Risk Index:</label>
    <input type="number" id="politics" name="PoliticalRiskIndex" value="<?php echo $row["Political_Risk_Index"]; ?>">
    <label for="policies">No of security policies:</label>
    <input type="number" id="policies" name="securitypolicies" value="<?php echo $row["No_of_security_policies"]; ?>">
      <input type="submit" name="submit" value="Update Record">
</form>
<?php
} else {
    echo "Record not found.";
}

$conn->close();
?>
