<?php
include("../config/connect.php");

$id=$_GET['id'];

$result=$conn->query("SELECT * FROM interns WHERE id=$id");

$row=$result->fetch_assoc();

?>

<link rel="stylesheet" href="../assets/style.css">

<div class="header">
    <div class="logo" style="
    left: 15px;
    float: right; 
    position: absolute;
    top: 10px;
    right: 10px;
    color: white;" ><img src="../img/minpostel-removebg-preview.png" style="width: 45px; height: 45px;"></div>
    <div class="name" style="margin-left: 100px;">Government Intern Management System</div>

<a href="../auth/logout.php" style="float: right; position: absolute; top: 15px; right: 10px; padding-right: 40px; color: white; text-decoration: none;">Logout</a>
</div>


<div class="sidebar">

<a href="dashboard.php">Dashboard</a>
<a href="add_intern.php">Add Intern</a>
<a href="view_interns.php">View Interns</a>

</div>

<form method="POST" class="content">

<input type="text" name="name" value="<?php echo $row['full_name']; ?>">
<input type="email" name="email" value="<?php echo $row['email']; ?>">

<button name="update">Update</button>

</form>

<?php

if(isset($_POST['update'])){

$name=$_POST['name'];
$email=$_POST['email'];

$conn->query("UPDATE interns SET full_name='$name',email='$email' WHERE id=$id");

header("Location: view_interns.php");

}
?>