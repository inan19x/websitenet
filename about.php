<html>
<head>
<title>Vulnerable WebApps</title>
<link rel="stylesheet" href="asset/css/bootstrap.min.css" crossorigin="anonymous">
<script src="asset/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#ddd;">
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<th><strong>About Websitenet</strong></th>
</tr>
</table>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#fff">
<tr>
<td>
<?php
$file=$_GET['file'];
if(!isset($file)){
	$file="README.md";
}
$handle=fopen($file,"r");
$isi=fread($handle, filesize($file));
echo $isi;
fclose($handle);
?>
</td>
</tr>
</table>
<p align="center"><a href="index.php">Home</a> | <a href="about.php?file=README.md">About</a></p>
</body>
</html>
