<?php
$servername="localhost";
$username="root";
$password="";
$dbname="demo";
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 if($conn===false)
 {
     die("Error,couldn't connect ".mysqli_connect_error());
 }
 ?>