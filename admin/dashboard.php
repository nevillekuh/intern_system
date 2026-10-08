<?php
include("../config/connect.php");

if(!isset($_SESSION['admin'])){
    header("Location: ../auth/login.php");
    exit();
}
?>

<html>
<head>
<link rel="stylesheet" href="../assets/style.css">
<style>
    .logout img:hover {
        filter: brightness(100%) invert(100%);
    }
</style>
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
<a href="add_intern.php">Add Intern</a>
<a href="view_interns.php">View Interns</a>

</div>

<div class="content">

<h2>Welcome, <?php echo $_SESSION['admin']; ?></h2>

<div class="card">
System Status: Active
</div>

<div class="card">
Administrative Control Panel
</div>

</div>

</body>
</html>