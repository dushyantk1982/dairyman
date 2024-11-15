<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Ice Creams" />
<meta name="keywords" content="Ice Cream, ice cream, novelties, Novelties, Parties, parties" />
<title>Dairy Man's</title>
<link rel="shortcut icon" href="images/logo.jpg" />
<link href="css/stylesheet.css" type="text/css" rel="stylesheet" />
<style type="text/css">
.class
{font:"Courier New", Courier, monospace;
color:#000000;
font-size:12px;
}
.back
{/*background-image:url('images/blank03.jpg');*/
height:100px;
width:400px;
margin-left:250px;
background-image:url('images/b1.jpg');}
</style>
</head>

<body>
<div class="wrapper">
	<div class="head">
		<?php include('header.php'); ?>
	</div>
	<div class="container" style="background-image:url('images/blank03.jpg');">
		<?php include('banner.php');?>
		<div class="back">
<br />
<fieldset>
<legend align="center"><b style="font-size:24px; color:#990099;">User Login</b></legend>
<form action="chklogin.php" method="post">
<table width="400" align="center">
<tr><td>User Id</td><td><input type="text" name="uid" size="40" /></td></tr>
<tr><td>Password</td><td><input type="password" name="pwd" size="40" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="     Login     " style="font-size:16px; color:#9933FF;"></td></tr></table></td></tr></table></form>
</fieldset>
<?php if($_REQUEST['msg']=='error')
{echo "Sorry! User Id or Password is wrong...";}?>
<?php /*?><?php 
if(@$_REQUEST['submit'])
{
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
if(strcmp($uid,'dairymans')==0 && strcmp($pwd,'dairymans@123')==0)
{header('location:getenquiry.php');}
else
{echo "Sorry! User Id or Password is wrong.....";
//header('location:login.php?msg=error');
}
}
?><?php */?>
</div>
</div>
	
	<div class="footer" style="background-image:url('images/blank1.jpg');">
	<?php include('footer.php'); ?>
	</div>
</body>
</html>
