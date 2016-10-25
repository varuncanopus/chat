<?php

include 'config.php';
$fromid=$_SESSION['loginid'];
$toid=$_POST['toid'];
$sql="SELECT * FROM `message` WHERE `fromid`='$fromid' and `toid`='$toid' or `fromid`='$toid' and `toid`='$fromid' ";
$result=mysqli_query($con, $sql);
while($data=mysqli_fetch_array($result))
{
    //get username
    $fromid=$data['fromid'];
    $sql_name="SELECT * FROM `Users` WHERE `id`='$fromid'";
    $res=mysqli_query($con,$sql_name);
    $rec=mysqli_fetch_array($res);
?>

<div>
    <span><?php echo $rec['name']; ?> </span><span>&nbsp;:<?php echo $data['message']; ?></span>
</div>
<?php

}
?>

