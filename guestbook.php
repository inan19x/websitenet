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
<td style="padding-bottom: 20px; padding-top: 30px; font-size: 15px;"><strong>Sign Guestbook | <a href="viewguestbook.php">View Guestbook</a> | <a href="findguestbook.php">Find in Guestbook</a></strong></td>
</tr>
</table>
<?php
if(!empty($_GET["x"]))
{
	$x=$_GET["x"];
	echo "<p align=\"center\">$x</p>";
}
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

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" class="tabel-okeh">
<tr>
<form id="form1" name="form1" method="post" action="addguestbook.php" class="form-group">
<td>
<div class="hamidz">
<table width="400" border="0" cellpadding="3" cellspacing="1" >
<tr>
<td width="117" style="color:#828282;">Name</td>
<td width="14">:</td>
<td width="357"><input name="name" type="text" id="name" size="40" class="form-control"/></td>
</tr>
<tr>
<td style="color:#828282;">Email</td>
<td>:</td>
<td><input name="email" type="text" id="email" size="40" class="form-control"/></td>
</tr>
<tr>
<td valign="top" style="color:#828282;">Comment</td>
<td valign="top">:</td>
<td><textarea name="comment" cols="30" rows="3" id="comment" class="form-control"></textarea></td>
</tr>
<tr>
<td valign="top" style="color:#828282;">Date/Time</td>
<td valign="top">:</td>
<td><input name="date" type="text" id="date" size="40" readonly value="<?php date_default_timezone_set('America/Los
_Angeles'); echo date("d-M-y, h:i:s")?>" style="background-color:#f0f0f0;color:#999;" class="form-control"/></td>
</tr>
<tr>
<?php
$x=rand(1,9);
$y=rand(1,9);
$z=$x+$y;
?>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td style="color:#828282;">TheCaptcha <?php echo "$x + $y = " ?>
<input name="captcha" type="text" id="captcha" size="5" maxlength="2" />
<input name="captcha2" type="hidden" id="captcha2" size="5" value="<?php echo $z; ?>" maxlength="2" />
<div class="jarak">
<input type="submit" name="Submit" value="Submit" class="btn btn-primary"/> 
<input type="reset" name="Submit2" value="Reset" class="btn btn-info"/>
</div>
</td>
</tr>
</table>
</div>
</td>
</form>
</tr>
</table>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
</tr>
</table>

<p align="center"><a href="index.php">Home</a> | <a href="about.php?file=README.md">About</a></p>
</body>
</html>
