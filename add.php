<?php
	include("conf/config.php");

	$subject = $_POST['subject'];
	$due_date = $_POST['due_date'];
	$priority = $_POST['priority'];

	mysql_query("INSERT INTO tasks (subject, due_date, priority) VALUES ('$subject', '$due_date', '$priority')");

	header("location: index.php");
?>