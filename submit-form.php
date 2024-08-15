<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$servername = " sql10.freesqldatabase.com";
$username = "sql10726157";
$password = "U46WKUWAuv";
$dbname = " sql10726157";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$year = $_POST['year1'];
$month = $_POST['month1'];
$day = $_POST['day1'];
$gendermale = $_POST['gendermale'];
$genderfemale = $_POST['genderfemale'];
$childaddress = $_POST['childaddress'];
$between = $_POST['between1'];
$street = $_POST['street'];
$worknumber = $_POST['worknumber'];
$homenumber = $_POST['homenumber'];
$cellphone = $_POST['cellnumber'];
$immunizationofchildyes = $_POST['immunizationofchildyes'];
$immunizationofchildno = $_POST['immunizationofchildno'];
$parentname = $_POST['parentname'];
$parentaddress = $_POST['parentaddress'];
$placeofemployment = $_POST['placeofemployment'];
$employeraddress = $_POST['employeraddress'];
$applicantname = $_POST['applicantname'];
$parentdate = $_POST['parentdate'];
$parentidnumber = $_POST['parentidnumber'];
$factcheckername = $_POST['factcheckername'];
$verificationdate = $_POST['verificationdate'];
$factcheckeridnumber = $_POST['factcheckeridnumber'];
$schoolawarded = $_POST['schoolawarded'];



$stmt = $conn->prepare("INSERT INTO users (lastname, firstname, middlename, year1, month1, day1, gendermale, genderfemale, childaddress, between1, street, worknumber, homenumber, cellnumber, immunizationofchildyes, immunizationofchildno, parentname, parentaddress, placeofemployment, employeraddress, applicantname, parentdate, parentidnumber, factcheckername, verificationdate, factcheckeridnumber, schoolawarded  ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssssssssssssssssssss", $lastname, $firstname, $middlename, $year, $month, $day, $gendermale, $genderfemale, $childaddress, $between, $street, $worknumber, $homenumber, $cellphone, $immunizationofchildyes, $immunizationofchildno, $parentname, $parentaddress, $placeofemployment, $employeraddress, $applicantname, $parentdate, $parentidnumber, $factcheckername, $verificationdate, $factcheckeridnumber, $schoolawarded);

if ($stmt->execute()) {
  echo "New record created successfully";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
