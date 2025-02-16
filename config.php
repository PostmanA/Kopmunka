<?php
// Database connection for comments (usercomments database)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "felhasznalok";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>