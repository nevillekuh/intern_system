<?php
session_start();

$conn = new mysqli("localhost", "root", "", "intern management");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>