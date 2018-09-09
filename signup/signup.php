<?php
session_start();
include_once '../db/dbconn.php';
include_once 'getVerificationCode.php';

$fname = $_GET["fname"];
$lname = $_GET["lname"];
$email = $_GET["email"];
$location = $_GET["location"];
$pwd = $_GET["password"];
$email_verification_code = generateRandomString(5);

$sql = "INSERT INTO users (first_name, last_name, email, locations_id, email_verification_code, pwd)
VALUES ('$fname', '$lname', '$email', '$location', '$email_verification_code', '$pwd')";

if ($conn->query($sql) === TRUE) {
    $_SESSION["return"] = "New account created. Check your email for verification email.";
} else {
    $_SESSION["return"] = "Something went wrong";
}

$conn->close();

?>
