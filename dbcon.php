<?php
 $dbServerName = 'localhost';
 $dbUserName = 'root';
 $dbPassword = '';
 $dbName = 'srkrhub';

 $conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

 if(!$conn){
    die("error detected".mysqli_error($conn));
 }

 ?>
 