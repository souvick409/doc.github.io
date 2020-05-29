<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$Lis_name=$_POST['name'];
$Lis_number=$_POST['number'];
$Lis_password=$_POST['password'];
$con=mysql_connect("Localhost","root","") or die("Database Not connected");
$db=mysql_select_db("project",$con) or die("Database Not found");
$query="insert into registation values('".$Lis_name."','".$Lis_number."','".$Lis_password."')";
$res=mysql_query($query,$con) or die("Query not executed");
if($res)
{
	header('location:index.html');
}
else
{
	echo "Data Not Inserted";
}


?>
<body>
</body>
</html>