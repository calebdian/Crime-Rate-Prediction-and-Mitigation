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
    $identityTheft = $_POST['identity_theft'];
    $hacking = $_POST['hacking'];
    $malware = $_POST['malware'];
    $phishing = $_POST['phishing'];
    $cyberBullying = $_POST['cyber_bullying'];
    $cyberStalking = $_POST['cyber_stalking'];
    $onlineScams = $_POST['online_scams'];
    $denialOfService = $_POST['denial_of_service'];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO cyber_crimes (Identity_Theft, Hacking, Malware, Phishing, Cyber_bullying, Cyber_stalking, Online_scams, Denial_of_service) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iiiiiiii", $identityTheft, $hacking, $malware, $phishing, $cyberBullying, $cyberStalking, $onlineScams, $denialOfService);

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
