<html>
<head><title>Vulnerable WebApps</title></head>
<body>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td><strong><a href="guestbook.php">Sign Guestbook</a> | <a href="viewguestbook.php">View Guestbook</a> | <a href="findguestbook.php">Find in Guestbook</a></strong></td>
</tr>
</table>
<?php
include "db.inc.php";
$sql="SELECT * FROM content";
$qry=mysql_query($sql) or die (mysql_error());
$row=mysql_fetch_array($qry);
?>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<th><?php echo $row['title']; ?></th>
</tr>
<tr>
<td>
<?php echo $row['body']; ?>
</td>
</tr>
</table>
<p align="center"><a href="index.php">Home</a> | <a href="about.php?file=README.txt">About</a></p>
</body>
</html>