<?php
session_start();
?>

<?php
include 'conn.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$Sql = "SELECT * FROM auth WHERE email='$email' AND password='$pass'";

$result = mysqli_query($con, $Sql);

$count = mysqli_num_rows($result);

if ($count == 1) {
    $role = mysqli_fetch_array($result);

    if ($role['role'] == "0") {
        echo "admin";
        $_SESSION["email"] = $email;
        exit();
    }
} else {
    echo "Invalid Username or Password !";
}
