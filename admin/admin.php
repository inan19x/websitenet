<?php
if(ereg("admin.php",$_SERVER["SCRIPT_NAME"])){
	header("Location:index.php");
	die;
}
?>
<script language="javascript">
function popup(){
	window.open("popup.php","","scrollbars=no,width=300,height=150");
}
</script>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<th>Registered Zone Menu</th>
</tr>
</table>
<?php
include "../db.inc.php";
$sql1="SELECT * FROM content";
$result1=mysql_query($sql1) or die (mysql_error());
$rows1=mysql_fetch_array($result1);
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<form name="contentweb" method="post" action="update.php">
<tr>
<td><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td>Title</td>
<td>:</td>
<td><input type="text" name="title" value="<?php echo $rows1['title']; ?>" size="40" /></td>
</tr>
<tr>
<td width="117">Body content</td>
<td width="14">:</td>
<td width="357"><textarea cols="35" rows="10" name="body"><?php echo $rows1['body']; ?></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>
<?php
if($_SESSION['username']=="admin")
{
?>
<input type="button" name="upload" value="Upload file.." onclick="popup()" />&nbsp;&nbsp;
<?php
}
?>
<input type="submit" name="Submit" value="Save Changes" /></td>
</tr>
</table></td>
</tr>
</form>
</table>

<br/>

<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td>
Change password feature
<form name="changepass" method="post" action="changepass.php">
<input type="password" name="p" />
<input type="hidden" name="token" value="<?php echo base64_encode($_SESSION['role']); ?>" />
<input type="submit" /><br/>
</form>
</td>
</tr>
</table>

<?php
if($_SESSION['username']=="admin")
{
	$sql3="SELECT * FROM guestbook";
	$result3=mysql_query($sql3) or die (mysql_error());

	while($rows3=mysql_fetch_array($result3)){
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td>ID</td>
<td>:</td>
<td><?php echo $rows3['id']; ?> <a href="delete.php?id=<?php echo $rows3['id'] ?>">(Delete)</a></td>
</tr>
<tr>
<td width="117">Name</td>
<td width="14">:</td>
<td width="357"><?php echo $rows3['name']; ?></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><?php echo $rows3['email']; ?></td>
</tr>
<tr>
<td valign="top">Comment</td>
<td valign="top">:</td>
<td><?php echo $rows3['comment']; ?></td>
</tr>
<tr>
<td valign="top">Date/Time </td>
<td valign="top">:</td>
<td><?php echo $rows3['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>

<?php
	}
}

mysql_close();
?>
