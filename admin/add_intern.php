<?php include("../config/connect.php"); ?>

<html>
<head>
<link rel="stylesheet" href="../assets/style.css">
</head>

<body>
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
<a href="view_interns.php">View Interns</a>
</div>

<div class="content">

<h2>Add Intern</h2>

<form method="POST">

<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email">
<input type="text" name="department" placeholder="Department">

<button type="submit" name="save">Save</button>

</form>

<?php

if(isset($_POST['save'])){

$name=$_POST['name'];
$email=$_POST['email'];
$department=$_POST['department'];

$conn->query("INSERT INTO interns(full_name,email,department)
VALUES('$name','$email','$department')");

echo "Intern Added";

}

?>

</div>
</body>
</html>