<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "hospital";

$con = new mysqli($servername, $username, $password, $dbName);


if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>