<?php
 include("top.html");
 $connection = mysqli_connect("localhost","root","");
 if(!$connection){
     die("Error:".mysqli_error($connection));
 }
 $sql = "CREATE DATABASE football";
 $query = mysqli_query($connection,$sql);
 if(!$query){
     die("Error:".mysqli_error($connection));
 }else{
     echo("Database created successfully");
 }
 mysqli_close($connection);
 include("bottom.html");
?>
