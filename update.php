<?php
	include("conf/config.php");

	$id = $_POST['id'];
	$subject = $_POST['subject'];
	$due_date = $_POST['due_date'];
	$priority = $_POST['priority'];

	mysql_query("UPDATE tasks SET subject='$subject', due_date='$due_date', priority='$priority' WHERE id = $id");

	header("location: index.php");
?>