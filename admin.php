<?php
mysql_connect("localhost","root","");
mysql_select_db("dataentry");
$query="SELECT * FROM pro";
$result=mysql_query($query);
$num=mysql_num_rows($result);
echo"<b><center>Database Output</center></b>
<br><br><br>";
$i=0;
echo"<table border='3' cellpading='3' cellspacing='5'><tr><td>name </td><td> fathername </td><td>dateofbirth</td><td>gender</td><td>college</td><td>branch</td><td>mobile</td><td>email</td><td>password</td><td>uid</td><td>admin</td></tr></table>";

while($i<$num)
{
$name=mysql_result($result,$i,"name");
$fathername=mysql_result($result,$i,"fathername");
$dateofbirth=mysql_result($result,$i,"dateofbirth");
$gender=mysql_result($result,$i,"gender");
$college=mysql_result($result,$i,"college");
$branch=mysql_result($result,$i,"branch");
$mobile=mysql_result($result,$i,"mobile");
$email=mysql_result($result,$i,"email");
$password=mysql_result($result,$i,"password");
$uid=mysql_result($result,$i,"uid");
$admin=mysql_result($result,$i,"admin");
echo"<table cellpading='5' cellspacing='5'><tr><td>$name </td><td> $fathername </td><td>$dateofbirth</td><td>$gender</td><td>$college</td><td>$branch</td><td>$mobile</td><td>$email</td><td>$password</td><td>$uid</td><td>$admin</td></tr></table>";
$i++;
}
?>
<html>
<p>enter following detail of student to confirm his registration</p>
<form method="POST" action="home1.php">

enter unique id:<br>
<input type="number" name="a" size="30"><br>
enter email id:<br>
<input type="email" name="b" size="30"><br>
<input type="submit" value="submit"><br>
<input type="reset" value="reset"><br>
<br>
<br>
<a href="logout.php">Logout</a>
</form>
</html>