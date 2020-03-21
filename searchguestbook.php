<html>
<head>
<title>Vulnerable WebApps</title>
<link rel="stylesheet" href="asset/css/bootstrap.min.css" crossorigin="anonymous">
<script src="asset/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#ddd;">

<style>
.ujang{
        margin-top:10%;
}
.batas-negara{
        padding:30px;
}

</style>

<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td style="padding-bottom: 20px; padding-top: 30px; font-size: 15px;"><strong><a href="guestbook.php">Sign Guestbook</a> | <a href="viewguestbook.php">View Guestbook</a> | Find in Guestbook </strong></td>
</tr>
</table>
<?php
include "db.inc.php";

$email=$_POST['email'];

$sql="SELECT * FROM guestbook WHERE email='$email'";
$result=mysql_query($sql) or trigger_error(mysql_error()." ".$sql);

while($rows=mysql_fetch_array($result)){
?>

<style>
.tabel-okeh{
        background:#fff;
}
.hamidz{
        background: #fff;
        padding: 30px;
}
.jarak{
        padding-top: 10px;
}
</style>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="tabel-okeh">
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
echo "<p align=\"center\"><a href=\"findguestbook.php\">&lt;&lt; Back</a></p>";
mysql_close();
?>
<p align="center"><a href="index.php">Home</a> | <a href="about.php?file=README.md">About</a></p>
</body>
</html>
