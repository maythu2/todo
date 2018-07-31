<?php
	include("conf/config.php");

	$id = $_GET['id'];

	mysql_query("UPDATE tasks SET status=0 WHERE id = $id");

	header("location: index.php");
?>