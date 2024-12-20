<?php 
	$con = mysqli_connect("MySQL-8.2", "root", "", "instagram");
	mysqli_query($con, "UPDATE inst SET texts ='{$_GET["text"]}', img='{$_GET["img"]}' WHERE id = '{$_GET["id"]}'");
	header("Location: https://instagram.local/");
 ?>

  