<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Ice Creams" />
<meta name="keywords" content="Ice Cream, ice cream, novelties, Novelties, Parties, parties" />
<title>Dairy Man's</title>
<link rel="shortcut icon" href="images/logo.jpg" />
<link href="css/enquiry.css" type="text/css" rel="stylesheet" />
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
<?php if($_REQUEST['msg']=='ok')
{echo "<div align='center'><b style='font-size:24px; color:#ff0000;'>Thank You! We will contact you soon..</b></div>";}
?>	
<br />
<fieldset>
<legend align="center"><b style="font-size:24px; color:#990099;">Enquiry Form</b></legend>
<!--<form action="enquiry.php?id=enquiry" method="post">-->
<form action="insertenquiry.php" method="post">
<table width="400" align="center">
<tr><td>Name</td><td><input type="text" name="cname" size="40" /></td></tr>
<tr><td>Mail Id</td><td><input type="text" name="mail" size="40" /></td></tr>
<tr><td>Contact No.</td><td><input type="text" name="mob" size="40" /></td></tr>
<tr><td>Address</td><td><textarea name="add" cols="31" rows="3"></textarea><!--<input type="text" name="add" />--></td></tr>
<tr><td>Comments</td><td><textarea name="msg" cols="31" rows="3"></textarea><!--<input type="text" name="add" />--></td></tr>
<tr><td colspan="2">
<table width="70%" align="center"><tr><td><input type="checkbox" name="ch1" value="Catering / Pary Order" /></td><td>Catering / Pary Order</td></tr>
<tr><td><input type="checkbox" name="ch2" value="Dairymans Natural Franchise" /></td><td>Dairymans Natural Franchise</td></tr>
<tr><td><input type="checkbox" name="ch3" value="Dealer / Distribution Network" /></td><td>Dealer / Distribution Network</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td></tr></table></td></tr></table></form>
</fieldset><!--<div align="right"><a href="login.php" target="_parent">Login</a></div>-->
</div>
</div>
	
<?php /*?><?php
if($_REQUEST['submit'])
{
$id=0;
$cname=$_POST['cname'];
$mail=$_POST['mail'];
$mob=$_POST['mob'];
$add=$_POST['add'];
$msg=$_POST['msg'];
$ch1=$_POST['ch1'];
$ch2=$_POST['ch2'];
$ch3=$_POST['ch3'];
$date=date("Y-m-d");

$conn=mysql_connect("localhost","root","");
//$conn=mysql_connect("166.62.8.44","dairyman","Admin@123");
if(!$conn){die('Could Not Connect'.mysql_error());}
mysql_select_db('dairymans');

$res=mysql_query("select * from enquiry",$conn);
while($r=mysql_fetch_array($res))
{
$id=$r['id'];
}
$id=$id+1;
$q="insert into enquiry values(".$id.",'".$cname."','".$mail."','".$mob."','".$add."','".$msg."','".$ch1."','".$ch2."','".$ch3."','".$date."')";
mysql_query($q,$conn);
//header("location:msg.php");
mysql_close();
//echo $q;
if($q)
{echo "<div align='center'><b style='font-size:24px; color:#990099;'>Thank You! We will contact you soon..</b></div>";}

}
?>
<?php */?>
<div class="footer" style="background-image:url('images/blank1.jpg');">
	<?php include('footer.php'); ?>
	</div>
</body>
</html>