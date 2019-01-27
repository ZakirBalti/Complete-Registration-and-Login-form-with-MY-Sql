<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="batch4";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

$id = $_GET['Id'];

$q = "DELETE FROM `dir` WHERE Id = $id ";

mysqli_query($conn,$q);

header('location:main.php');

?>