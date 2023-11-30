<?php
session_start();
?>

<?php
include 'conn.php';

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];


$sql = "INSERT INTO auth(email, name, password, phone, address, age, gender) VALUES ('$email', '$name', '$password', '$mobile', '$address', '$age', '$gender')";

if (mysqli_query($con, $sql)) {
    echo "admin";
    $_SESSION["email"] = $email;
} else {
    echo "Error " . mysqli_error($con);
}
