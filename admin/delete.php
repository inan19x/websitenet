<?php
session_start();
if(!isset($_SESSION['admin'])){
	header("Location:index.php");
	die;
}
else{
include "../db.inc.php";
$id=$_GET['id'];
$sql="DELETE FROM guestbook WHERE id='$id'";
mysql_query($sql) or die (mysql_error());
header("Location:index.php");
}
?>