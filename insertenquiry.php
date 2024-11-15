<?php
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

//$conn=mysql_connect("localhost","root","");
$conn=mysql_connect("166.62.8.44","dairyman","Admin@123");
if(!$conn){die('Could Not Connect'.mysql_error());}
mysql_select_db('dairyman');

$res=mysql_query("select * from enquiry",$conn);
while($r=mysql_fetch_array($res))
{
$id=$r['id'];
}
$id=$id+1;
$q="insert into enquiry values(".$id.",'".$cname."','".$mail."','".$mob."','".$add."','".$msg."','".$ch1."','".$ch2."','".$ch3."','".$date."')";
mysql_query($q,$conn);
header("location:enquiry.php?msg=ok");
mysql_close();
//echo $q;

}
?>
