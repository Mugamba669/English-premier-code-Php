<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = "football";
//create connection
$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
if(!$conn){
	die("Error:".mysqli_error($conn));
}

?>