<?php

include("../config/connect.php");

$username =$_POST['username'];
$password =$_POST['password'];

$sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    $_SESSION['admin'] = $username;
    header("location: ../admin/dashboard.php");
    exit();

} else {
    echo "login failed";
}
?>