<?php
$json = json_decode(file_get_contents("config.json"), true);
$dbuser = $json['dbuser'];
$servername = $json['dbip'];
$dbpass = $json['dbpass'];
$dbname = $json['dbname'];

// Create connection
$conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE credentials (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
password VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table credentials created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
