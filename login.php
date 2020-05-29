<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$Lis_number=$_POST['number'];
$Lis_pssword=$_POST['password'];
$con=mysql_connect("Localhost","root","") or die("Database Not connected");
$db=mysql_select_db("project",$con) or die("Database Not found");
$query="Select * from registation where number='".$Lis_number."' and password='".$Lis_pssword."'";
$res=mysql_query($query,$con) or die("Query not executed");
$row=mysql_fetch_array($res) or die("Row not found");
if($row)
{
	session_start();
	$_SESSION["ses_name"]=$row['name'];
	header('location:home.html');
	
}
else
{
	echo "Re login";
}


?>
<body>
</body>
</html>