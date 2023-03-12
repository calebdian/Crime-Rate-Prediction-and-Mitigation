<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_dataset";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the form data
    $fraud = $_POST['fraud'];
    $money_laundering = $_POST['money_laundering'];
    $embezzlement = $_POST['embezzlement'];
    $cybercrime = $_POST['cybercrime'];
    $insider_trading = $_POST['insider_trading'];
    $bribery = $_POST['bribery'];
    $tax_evasion = $_POST['tax_evasion'];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO financial_crimes (fraud, money_laundering, embezzlement, cybercrime, insider_trading, bribery, taxEvasion) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iiiiiii", $fraud, $money_laundering, $embezzlement, $cybercrime, $insider_trading, $bribery, $tax_evasion);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
