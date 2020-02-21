<?php
session_start();
if(!isset($_SESSION['admin'])){
	header("Location:index.php");
	die;
}
else{
$p=md5($_POST['p']);
$token=base64_decode($_POST['token']);
include "../db.inc.php";
$sql="UPDATE users SET password='$p' WHERE role='$token'";
mysql_query($sql) or die (mysql_error());
header("Location:index.php");
}
?>
