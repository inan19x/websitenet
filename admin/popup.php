<?php
//session_start();
//if (!isset($_SESSION['admin'])) {
//	header("Location:index.php");
//	die;
//}
?>
<html>
<head><title>Upload Admin Vulnerable WebApps</title></head>
<body>
		<fieldset><legend>UPLOAD..</legend>
			<form enctype="multipart/form-data" method="post" action="upload.php">
				<input type="file" name="uploaded_file" /><br>
				<input type="submit" value="Send" />
			</form>
		</fieldset>
</body>
</html>
