<?php

include 'config.php';


$email=$_POST['email'];
$password=$_POST['password'];

 $sql="SELECT * FROM `Users` WHERE `email`='$email' and `password`='$password'";
$result=mysqli_query($con, $sql);
$data=mysqli_fetch_array($result);
$loginid=$data['id'];
if(mysqli_num_rows($result)>0)
{
    $_SESSION['loginid']=$loginid;
    header('Location: viewmessage.php');
}
else {

 echo '<script type="text/javascript">'; 
echo 'alert("Invalid credentials");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
}