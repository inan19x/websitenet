<html>
<head><title>Vulnerable WebApps</title></head>
<body>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td><strong><a href="guestbook.php">Sign Guestbook</a> | View Guestbook | <a href="findguestbook.php">Find in Guestbook</a></strong></td>
</tr>
</table>
<?php
include "db.inc.php";

$sql="SELECT * FROM guestbook";
$result=mysql_query($sql) or die (mysql_error());

while($rows=mysql_fetch_array($result)){
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td>ID</td>
<td>:</td>
<td><?php echo $rows['id']; ?></td>
</tr>
<tr>
<td width="117">Name</td>
<td width="14">:</td>
<td width="357"><?php echo $rows['name']; ?></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><?php echo $rows['email']; ?></td>
</tr>
<tr>
<td valign="top">Comment</td>
<td valign="top">:</td>
<td><?php echo $rows['comment']; ?></td>
</tr>
<tr>
<td valign="top">Date/Time </td>
<td valign="top">:</td>
<td><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>

<?php
}
mysql_close();
?>
<p align="center"><a href="index.php">Home</a> | <a href="about.php?file=README.txt">About</a></p>
</body>
</html>