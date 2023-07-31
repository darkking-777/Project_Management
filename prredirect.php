<?php
session_start();
include 'dbcon.php';

$_SESSION['prid']=$_POST['prid'];
$url='display.php';

header('Location: '.$url);
?>