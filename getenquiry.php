<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Ice Creams" />
<meta name="keywords" content="Ice Cream, ice cream, novelties, Novelties, Parties, parties" />
<title>Dairy Man's</title>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
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
<script>
$(function() {
$( "#from" ).datepicker({
defaultDate: "+1w",
changeMonth: true,
numberOfMonths: 1,
dateFormat:'yy-mm-dd',
onClose: function( selectedDate ) {
$( "#to" ).datepicker( "option", "minDate", selectedDate );
}
});
$( "#to" ).datepicker({

defaultDate: "+1w",
changeMonth: true,
numberOfMonths: 1,
dateFormat:'yy-mm-dd',
onClose: function( selectedDate ) {
$( "#from" ).datepicker( "option", "maxDate", selectedDate );
}
});
});
</script>

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
<legend align="center"><b style="font-size:24px; color:#990099;">Get Enquiry</b></legend>
<form action="getenquiry.php?id=getenquiry" method="post">
<table width="400" align="center">
<tr><td><label for="from">From</label></td><td><input type="date" id="from" name="from" /></td><td><label for="to">To</label></td><td><input type="date" name="to" id="to" size="20" /></td></tr>
<tr><td colspan="4" align="center"><input type="submit" name="submit" value="     Submit     " style="font-size:16px; color:#9933FF;"></td></tr></table></td></tr></table></form>
</fieldset>
</div>
<p>&nbsp;</p>
<div align="center">
<div align="right"><a href="javascript:window.print()">Print</a></div><?php 
if(@$_REQUEST['submit'])
{
$from=$_POST['from'];
$to=$_POST['to'];
$conn=mysql_connect("166.62.8.44","dairyman","Admin@123");
if(!$conn)
{die('Could Not Connect'.mysql_error());}
mysql_select_db('dairyman');
$res=mysql_query("select * from enquiry where Date between '$from' and '$to'",$conn);
$i=1;
echo "<table border='1'><tr><td align='center'><b>S.No.</b></td><td align='center'><b>Date</b></td><td align='center'><b>Name</b></td><td align='center'><b>Email</b></td><td align='center'><b>Contact</b></td><td align='center'><b>Address</b></td><td align='center'><b>Enquiry</b></td></tr>";
while($r=mysql_fetch_array($res))
{
echo "<tr><td>".$i."</td><td>".$r['date']."</td><td>".$r['cust_name']."</td><td>".$r['mail_id']."</td><td>".$r['mob']."</td><td>".$r['cust_add']."</td><td>".$r['ch_1'].",".$r['ch_2'].",".$r['ch_3']."</td></tr>";
$i=$i+1;
}
echo "</table>";
}
?>

<br /><br />
</div>
</div>
	
	<div class="footer" style="background-image:url('images/blank1.jpg');">
	<?php include('footer.php'); ?>
	</div>
</body>
</html>
