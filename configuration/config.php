<?php
$siteUrl = "http://" . $_SERVER['HTTP_HOST'] . "/hospital/Hospital-web.php";
$SiteTitle = "Welcome to SAHAYAK";

// Database connections
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'registrations';

$conn = new mysqli('localhost','root','','booking');

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}

// Retrieve form data
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$location = $_POST['location'];
$landmark = $_POST['landmark'];
$address = $_POST['address'];


// Prepare and execute the SQL statement
$stmt = $conn->prepare("insert into registrations(firstname, lastname, phone, email, location, landmark, address) values(?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssissss", $firstName, $lastName, $phone, $email, $location, $landmark, $address);

	$execval=$stmt->execute();
    echo $execval;
  	
    echo " Booking confirmed! We will contact you shortly";
  	$stmt->close();
  	$conn->close();




?>
