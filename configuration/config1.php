<?php
$siteUrl = "http://" . $_SERVER['HTTP_HOST'] . "/hospital/Hospital-web.php";
$SiteTitle = "Welcome to SAHAYAK";

// Database connections
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'registrationss';

$conn = new mysqli('localhost','root','','booking');

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}

// Retrieve form data
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$experience = $_POST['experience'];
$field = $_POST['field'];


// Prepare and execute the SQL statement
$stmt = $conn->prepare("insert into registrationss(firstname, lastname, phone, email, experience, field) values(?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $firstName, $lastName, $phone, $email, $experience, $field);

	$execval=$stmt->execute();
    echo $execval;
  	
    echo " Booking confirmed! We will contact you shortly";
  	$stmt->close();
  	$conn->close();




?>
