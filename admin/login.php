<?php
session_start();
include "../db.inc.php";
$username=$_POST['username'];
$password=md5($_POST['password']);

$sql="SELECT username,password,role FROM users WHERE username='$username' AND password='$password'";
$qry=mysql_query($sql) or die (mysql_error());
$rows=mysql_num_rows($qry);
$login=mysql_fetch_array($qry);

if($rows==1){
	$_SESSION['admin']=1;
	$_SESSION['username']=$username;
	$_SESSION['role']=$login['role'];
	header("Location:index.php");
}
else{
	header("Location:index.php?x=AUTHENTICATION%20FAILED");
}
?>

