<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart_shop";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$contact_name = $_POST['contact_name'];
$contact_phone = $_POST['contact_phone'];
$contact_email = $_POST['contact_email'];
$message = $_POST['message'];


$sql = "INSERT INTO contact_us (contact_name, contact_phone, contact_email, message) 
        VALUES ('$contact_name', '$contact_phone', '$contact_email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>