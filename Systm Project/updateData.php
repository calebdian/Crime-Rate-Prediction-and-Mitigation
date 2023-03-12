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

// Get the form data
$region_id = $_POST["region_id"];
$region_name = $_POST["Region"];
$population_density = $_POST["Population_density"];
$date = $_POST["date"];
$average_income = $_POST["monies"];
$no_of_employed_people = $_POST["employ"];
$no_of_immigrants = $_POST["immi"];
$family_breakdown_rate = $_POST["Fam_rate"];
$no_of_scholars = $_POST["scholars"];
$drug_usage = $_POST["drugs"];
$youth_concentration = $_POST["youth"];
$age_bracket = $_POST["age"];
$percentage_of_males = $_POST["males"];
$race = $_POST["race"];
$political_risk_index = $_POST["pri"];
$no_of_security_policies = $_POST["policies"];

// Update the record in the crime_effect table
$sql = "UPDATE crime_effect SET Region_name='$region_name', population_density=$population_density, date='$date', average_income=$average_income, No_of_employed_people=$no_of_employed_people, No_of_immigrants=$no_of_immigrants, Family_breakdown_rate=$family_breakdown_rate, No_of_Scholars=$no_of_scholars, Drug_usage=$drug_usage, Youth_concentration=$youth_concentration, Age_bracket=$age_bracket, Percentage_of_males=$percentage_of_males, Race='$race', Political_Risk_Index=$political_risk_index, No_of_security_policies=$no_of_security_policies WHERE Region_id=$region_id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
