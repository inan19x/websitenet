<?php
session_start();
if(!isset($_SESSION['admin'])){
	header("Location:index.php");
	die;
}
else{
$p=md5($_POST['p']);
$u=$_POST['u'];
include "../db.inc.php";
$sql="UPDATE users SET password='$p' WHERE username='$u'";
mysql_query($sql) or die (mysql_error());
header("Location:index.php");
}
?>
