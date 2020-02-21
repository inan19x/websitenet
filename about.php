<html>
<head><title>Vulnerable WebApps</title></head>
<body>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<th><strong>About Guestbook Apps</strong></th>
</tr>
</table>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td>
<?php
$file=$_GET['file'];
if(!isset($file)){
	$file="README.txt";
}
$handle=fopen($file,"r");
$isi=fread($handle, filesize($file));
echo $isi;
fclose($handle);
?>
</td>
</tr>
</table>
<p align="center"><a href="index.php">Home</a> | <a href="about.php?file=README.txt">About</a></p>
</body>
</html>