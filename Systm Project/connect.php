<?php
    $firstName = isset($_POST['surName']) ? $_POST['surName'] : '';
	$lastName = isset($_POST['endName']) ? $_POST['endName'] : '';
	$email = isset($_POST['emailing']) ? $_POST['emailing'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	$confirmpass = isset($_POST['confirmpassword']) ? $_POST['confirmpassword'] : '';
	$firstName = isset($_POST['telcall']) ? $_POST['telcall'] : '';
	$firstName = isset($_POST['Gender']) ? $_POST['Gender'] : '';
	$firstName = isset($_POST['postaddress']) ? $_POST['postaddress'] : '';
	/* $firstName = $_POST['surName'];
	$lastName = $_POST['endName'];
	$email = $_POST['emailing'];
	$password = $_POST['password'];
	$confirmpass = $_POST['confirmpassword'];
	$phone = $_POST['telcall'];
    $gender = $_POST['Gender'];
    $address = $_POST['postaddress'];

 */
	// Database connection
	$conn = new mysqli('localhost','root','root','crime_dataset');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into sign_up(FirstName, LastName, Email, Password, ConfirmPassword, Tel_no, Gender, po_box) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssiss", $firstName, $lastName, $email, $password, $confirmpass, $phone, $gender, $address);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>