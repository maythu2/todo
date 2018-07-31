<?php
	$DB_HOST = "localhost";
	$DB_USER = "root";
	$DB_PASS = "";
	$DB_NAME = "todo";

	$conn = mysql_connect($DB_HOST, $DB_USER, $DB_PASS);
	mysql_select_db($DB_NAME, $conn);
?>