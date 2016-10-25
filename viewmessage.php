<?php

include 'config.php';
$loginuser=$_SESSION['loginid'];
$sql="SELECT * FROM `Users` where id!='$loginuser'";
$res=mysqli_query($con, $sql);
while($data=mysqli_fetch_array($res))
{
    
?>

    
     <li>
         <a href="#<?php echo $data['id']; ?>" class="user" value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></a>
    </li>
   
<?php
}
?>
    </br></br></br>
<div id="view">
    
</div>

<input type="hidden" id="loginid" value="<?php echo $_SESSION['loginid']; ?>"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="custom.js"></script>
<textarea name="message" class="message"></textarea>
<button type="button" class="send">Send</button>