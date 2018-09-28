<?php
$x=$_POST['a'];
$y=$_POST['s'];
$z=$_POST['d'];
$q=$_POST['f'];
$w=$_POST['g'];
$e=$_POST['h'];
$r=$_POST['j'];
$t=$_POST['k'];
$u=$_POST['l'];
$sa=0;
$i=rand(10000,99999);
mysql_connect("localhost","root","");
mysql_select_db("dataentry");
$query0="SELECT * FROM pro WHERE uid='$i'";
$result0=mysql_query($query0);
	$count0=mysql_num_rows($query0);
	while($count0>0)
	{
		if($count0!=0)
	{
		$i=rand(10000,99999);
	}
	else
	{
		$count0=0;
	}
	}
	
if($x==""||$y==""||$z==""||$q==""||$w==""||$e==""||$r==""||$t==""||$u=="")
{
	echo "FILL ALL ENTRIES";
}
else
{
	$query="SELECT * FROM pro WHERE name='$x' AND password='$y'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($count==0)
	{
		$query1="INSERT INTO pro VALUES('$x','$y','$z','$q','$w','$e','$r','$t','$u','$i','$sa')";
		mysql_query($query1);
		mail($t,"YOUR GENERATED ID ","We are glad that you Register.\n Your Generated Id is '$i'");
		header("location:login.php");
		}else
		{
			echo "USEREXIST";
		}
}
?>
