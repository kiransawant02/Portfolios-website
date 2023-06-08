<?php 
 $server = "localhost";
 $user = "root";
 $password = "";
 $dbname = "myjoho";
 $conn = mysqli_connect($server, $user,$password,$dbname);
 if(!$conn) {
 die("connection Failed ".mysqli_connect_error());
 }
 else {
 // echo "Connection Established !";
 }
 ?>
