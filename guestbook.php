<html>
<head><title>Vulnerable WebApps</title></head>
<body>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td><strong>Sign Guestbook | <a href="viewguestbook.php">View Guestbook</a> | <a href="findguestbook.php">Find in Guestbook</a></strong></td>
</tr>
</table>
<?php
if(!empty($_GET["x"]))
{
	$x=$_GET["x"];
	echo "<p align=\"center\">$x</p>";
}
?>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="addguestbook.php">
<td>
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="117">Name</td>
<td width="14">:</td>
<td width="357"><input name="name" type="text" id="name" size="40" /></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="email" type="text" id="email" size="40" /></td>
</tr>
<tr>
<td valign="top">Comment</td>
<td valign="top">:</td>
<td><textarea name="comment" cols="30" rows="3" id="comment"></textarea></td>
</tr>
<tr>
<td valign="top">Date/Time</td>
<td valign="top">:</td>
<td><input name="date" type="text" id="date" size="40" readonly value="<?php echo date("d-M-y, h:i:s")?>" style="background-color:#f0f0f0;color:#999;" /></td>
</tr>
<tr>
<?php
$x=rand(1,9);
$y=rand(1,9);
$z=$x+$y;
?>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>TheCaptcha <?php echo "$x + $y = " ?><input name="captcha" type="text" id="captcha" size="5" maxlength="2" /><input name="captcha2" type="hidden" id="captcha2" size="5" value="<?php echo $z; ?>" maxlength="2" /><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
</tr>
</table>
<p align="center"><a href="index.php">Home</a> | <a href="about.php?file=README.txt">About</a></p>
</body>
</html>
