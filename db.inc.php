<?php
$host="localhost";
$username="root";
$password="indonesia";
$db_name="websitenet";

mysql_connect("$host", "$username", "$password")or die(mysql_error()); 
mysql_select_db("$db_name")or die(mysql_error());
?>
