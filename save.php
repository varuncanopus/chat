<?php

include 'config.php';

$fromid=$_SESSION['loginid'];
$toid=$_POST['toid'];
$message=$_POST['message'];

$sql="INSERT INTO `message` (`id`, `fromid`, `toid`, `message`) VALUES (NULL, '$fromid', '$toid', '$message');";
mysqli_query($con, $sql);