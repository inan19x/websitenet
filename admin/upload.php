<?php
//session_start();
//if((isset($_SESSION['admin']))){
	$target_path="../uploads/".basename($_FILES['uploaded_file']['name']);
	if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_path)){
		header("Location:popup.php");
	}
	else{
		echo "error";
	}
//}
//else{
header("Location:index.php");
//}
?>
