<?php
$servername = "localhost";
$username = "root";//"u273390385_creatorjobs";
$password = "";//"@Webdeveloper2023";
$db = "ytjobs";//"u273390385_creatorjobs";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
//echo "Connected successfully";
}
?>