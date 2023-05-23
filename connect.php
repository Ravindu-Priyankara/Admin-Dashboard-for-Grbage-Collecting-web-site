<?php
/*
*Created by Ravindu Priyankara for communicate with database
*/

$servername = 'localhost';
$username = "root";
$password = "rAvi628$";
$db = 'sqa_project';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>