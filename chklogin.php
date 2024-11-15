<?php 
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
if(strcmp($uid,'dairymans')==0 && strcmp($pwd,'dairymans@123')==0)
{header('location:getenquiry.php');}
else
{header('location:getenquiry.php?msg=error');//echo "Sorry! User Id or Password is wrong.....";
//header('location:login.php?msg=error');
}
?>
