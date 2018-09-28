<?php
$x=$_POST['a'];
$t=$_POST['b'];
mysql_connect("localhost","root","");
mysql_select_db("dataentry");
$query="UPDATE pro set admin='1' WHERE uid='$x'";
mysql_query($query);

mail($t,"YOUR GENERATED ID ","Registration Confirmed.\n Your Generated Id is .$x.");
header("location:admin.php");

?>