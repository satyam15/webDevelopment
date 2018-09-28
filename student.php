<?php
	session_start();
    mysql_connect("localhost","root","");
	mysql_select_db("dataentry");
	$query="SELECT * FROM pro WHERE uid='$x'AND password='$y'";
	$result=mysql_query($query);
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
	}
	if($xy[10]==1)
	{
	echo "You are Registered";
	}
	else{
	echo"Not Registerd";}

?>
<html>
<body style="color:red;">
<button><a href="logout.php">Logout</a></button>
</body>
</html>