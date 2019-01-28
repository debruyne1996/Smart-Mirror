<?php
$servername = "localhost";
$username = "root";
$password = "capstone1";
$dbname = "mirror";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to insert a record
$sql = "INSERT INTO date (id, showdiv)
VALUES ('1', '1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 