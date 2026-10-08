<?php
include("../config/connect.php");

$id=$_GET['id'];

$conn->query("DELETE FROM interns WHERE id=$id");

header("Location: view_interns.php");

?>