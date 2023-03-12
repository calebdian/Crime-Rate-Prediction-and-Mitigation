<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS crime_dataset";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select database
$conn->select_db("crime_dataset");

// Create table
$sql = "CREATE TABLE IF NOT EXISTS `sign_up` (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   `FirstName` VARCHAR(30) NOT NULL,
   `LastName` VARCHAR(30) NOT NULL,
   `Email` VARCHAR(50) NOT NULL UNIQUE,
   `password` VARCHAR(255) NOT NULL,
   `ConfirmPassword` VARCHAR(255) NOT NULL,
   `tel_No` VARCHAR(20) NOT NULL UNIQUE,
   `Region` VARCHAR(20),
   `Gender` ENUM('Male', 'Female', 'Other') NOT NULL,
   `po_box` VARCHAR(10) NOT NULL
   )";

$sql2 = "CREATE TABLE IF NOT EXISTS `crime_effect` (
    `Region_id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `Region_name` VARCHAR(20) NOT NULL,
    `population_density` INT(10) NOT NULL,
    `date` DATE,
    `average_income` INT(10) NOT NULL,
    `No_of_employed_people` INT(10) NOT NULL,
    `No_of_immigrants` INT(10) NOT NULL,
    `Family_breakdown_rate` INT(2) NOT NULL,
    `No_of_Scholars` INT(10) NOT NULL,
    `Drug_usage` INT(2) NOT NULL,
    `Youth_concentration` INT(2) NOT NULL, 
    `Age_bracket` VARCHAR(20) NOT NULL,
    `Percentage_of_males` INT(2) NOT NULL,
    `Race` VARCHAR(20) NOT NULL,
    `Political_Risk_Index` INT(1) NOT NULL,
    `No_of_security_policies` INT(2) NOT NULL
)";

// SQL statement to create table
$sql3 = "CREATE TABLE IF NOT EXISTS crimes_against_people (
    Region_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Homicide INT(10) NOT NULL,
    Assault INT(10) NOT NULL,
    Violence INT(10) NOT NULL,
    Stalking INT(10) NOT NULL,
    Rape INT(10) NOT NULL,
    Kidnapping INT(10) NOT NULL,
    Robbery INT(10) NOT NULL,
    Hate_crimes INT(10) NOT NULL
)";

$sql4 = "CREATE TABLE IF NOT EXISTS property_crimes (
    Region_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Burglary INT(10) NOT NULL,
    Theft INT(10) NOT NULL,
    Robbery INT(10) NOT NULL,
    Arson INT(10) NOT NULL,
    Shoplifting INT(10) NOT NULL,
    Hijacking INT(10) NOT NULL,
    Vandalism INT(10) NOT NULL
)";

$sql5 = "CREATE TABLE IF NOT EXISTS cyber_crimes (
    Region_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Identity_theft INT(10) NOT NULL,
    Hacking INT(10) NOT NULL,
    Malware INT(10) NOT NULL,
    Phishing INT(10) NOT NULL,
    Cyber_bullying INT(10) NOT NULL,
    Cyber_stalking INT(10) NOT NULL,
    Online_scams INT(10) NOT NULL,
    Denial_of_service INT(10) NOT NULL
)";

$sql6 = "CREATE TABLE IF NOT EXISTS financial_crimes (
    Region_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Fraud INT(6) NOT NULL,
    money_laundering INT(6) NOT NULL,
    embezzlement INT(6) NOT NULL,
    cybercrime INT(6) NOT NULL,
    insider_trading INT(6) NOT NULL,
    bribery INT(6) NOT NULL,
    taxEvasion INT(6) 
)";

if ($conn->query($sql) === TRUE) {
    echo "Table sign_up created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

if ($conn->query($sql2) === TRUE) {
    echo "Table crime_effect created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

if ($conn->query($sql3) === TRUE) {
    echo "Table crimes_against_people created successfully";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

if ($conn->query($sql4) === TRUE) {
    echo "Table property_crimes created successfully";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

if ($conn->query($sql5) === TRUE) {
    echo "Table cyber_crimes created successfully";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

if ($conn->query($sql6) === TRUE) {
    echo "Table property_crimes created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>