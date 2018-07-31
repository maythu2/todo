<?php
	include("conf/config.php");

	$id = $_GET['id'];

	mysql_query("DELETE FROM tasks WHERE id = $id");

	header("location: index.php");
?>