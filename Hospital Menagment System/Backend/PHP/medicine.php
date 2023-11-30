<?php
include 'conn.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];

$sql = "INSERT INTO medicine(id, name, price) VALUES ('$id', '$name', '$price')";

if (mysqli_query($con, $sql)) {
    echo "<span class='text-success'>Record Successfully Addedd</span>";
} else {
    echo "<span class='text-danger'>Record Successfully Addedd</span>";
}
