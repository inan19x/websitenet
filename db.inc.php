<?php
$host="localhost";
$username="mydbuser";
$password="mydbpasswd";
$db_name="websitenet";

mysql_connect("$host", "$username", "$password")or die(mysql_error()); 
mysql_select_db("$db_name")or die(mysql_error());
?>
