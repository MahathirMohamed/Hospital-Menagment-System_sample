<?php
include 'conn.php';

$id = $_POST['id'];
$name = $_POST['name'];
$specialIn = $_POST['specialIn'];
$address = $_POST['address'];

$sql = "INSERT INTO doctor(id, name, specialIn, address) VALUES ('$id', '$name', '$specialIn', '$address')";

if (mysqli_query($con, $sql)) {
    echo "<span class='text-success'>Record Successfully Addedd</span>";
} else {
    echo "<span class='text-danger'>Record Successfully Addedd</span>";
}
