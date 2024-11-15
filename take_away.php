<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Ice Creams" />
<meta name="keywords" content="Ice Cream, ice cream, novelties, Novelties, Parties, parties" />
<title>Dairy Man's</title>
<link rel="shortcut icon" href="../images/logo.jpg" />
<link href="css/dairymanstyle.css" type="text/css" rel="stylesheet" />
<style type="text/css">
.tx
{font:"Courier New", Courier, monospace;
color:#000000;
font-size:18px;
}
.back
{background-image:url('images/blank03.jpg');}
</style>
<style>
div.img {
    margin: 2px;
    padding: 2px;
    /*border: 2px solid #ff6600;*/
    height: auto;
    width: auto;
    float: left;
    text-align: center;
}

div.img img {
    display: inline;
    margin: 5px;
    border: 1px solid #ffffff;
}

div.img a:hover img {
    border:1px solid #0000ff;
	
}

div.desc {
    text-align: center;
    font-weight: normal;
    width: 120px;
    margin: 2px;
}
</style>
</head>

<body>
<div class="wrapper">
	<div class="head">
		<?php include('header1.php'); ?>
	</div>
	<div class="container" style="background-image:url('images/blank03.jpg');">
		<?php //include('banner.php');?>
		<marquee direction="left" behavior="scroll" scrollamount="8">
		<img src="images/scoops01.jpg" height="150" width="250">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/scoops02.jpg" height="150" width="250">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/scoops03.jpg" height="150" width="250">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/sundes01.jpg" height="150" width="250">&nbsp;&nbsp;&nbsp;&nbsp;
		</marquee>
		<div class="back">
		<div align="left"><?php include('product_menu.html');?></div>
<table width="800" align="center">
<tr><td colspan="3"><img src="images/tube500ml01.jpg" height="25" width="200"></td></tr>
<tr><td>
<div class="img">
  <a target="_parent" href="tube500ml.php">
    <img src="images/tube500ml.jpg" alt="Regular & Premium" width="300" height="200">
  </a>
</div>
</td>
</tr>
</table>

</div>
</div>
	
	<div class="footer" style="background-image:url('images/blank1.jpg');">
	<?php include('footer.php'); ?>
	</div>
	
</body>
</html>
