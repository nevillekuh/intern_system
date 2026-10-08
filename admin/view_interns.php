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
<a href="add_intern.php">Add Intern</a>
</div>

<div class="content">

<h2>All Interns</h2>

<?php

$result=$conn->query("SELECT * FROM interns");

while($row=$result->fetch_assoc()){

echo "

<div class='card'>

<h3>{$row['full_name']}</h3>

<p>{$row['email']}</p>

<p>{$row['department']}</p>

<a href='edit_intern.php?id={$row['id']}'><button>Edit</button></a>

<a href='delete_intern.php?id={$row['id']}'><button>Delete</button></a>

</div>

";

}

?>

</div>
</body>
</html>