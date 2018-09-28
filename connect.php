<?php

$x=$_POST['a'];
$y=$_POST['b'];
if($x==""||$y=="")
{
	echo "FILL ALL";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("dataentry");
	$query="SELECT * FROM pro WHERE uid='$x' AND password='$y'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($x=="admin"&&$y=="pass")
	{
		$_SESSION['name']=$a;
		header("location:admin.php");
	}
	else
	{
	if($count!=0)
	{
	
	while($r=mysql_fetch_array($result))
	{
	echo"<table border='3'>";
	echo"<tr>";
	echo"<td>".$r[0]."</td>";
	echo"<td>".$r[1]."</td>";
	echo"<td>".$r[2]."</td>";
	echo"<td>".$r[3]."</td>";
	echo"<td>".$r[4]."</td>";
	echo"<td>".$r[5]."</td>";
	echo"<td>".$r[6]."</td>";
	echo"<td>".$r[7]."</td>";
	echo"<td>".$r[8]."</td>";
	echo"<td>".$r[9]."</td>";
	echo"</tr>";
	echo"</table>";
	if($r[10]==1)
	{
	echo "You are Registered";
	
	}
	else{
	echo"Not Registerd";
	}
}

	}
	else
	{
		echo "WRONG PASSWORD OR USERNAME";
	}
	}
}

?>