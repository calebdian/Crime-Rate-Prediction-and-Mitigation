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

// Check if the Region_id is set
if (isset($_GET["Region_id"])) {
    // Get the id of the record to be deleted
    $id = $_GET["Region_id"];

    // Delete the record from the database
    $sql_delete = "DELETE FROM crime_effect WHERE Region_id = '$id'";
    if ($conn->query($sql_delete) === TRUE) {
        echo "Record with Region_id " . $id . " has been deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Region_id not specified.";
}

$conn->close();
?>
