<?php
	include("conf/config.php");

	$id = $_GET['id'];
	$result = mysql_query("SELECT * FROM tasks WHERE id = $id");
	$row = mysql_fetch_assoc($result);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Edit Task</title>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/redmond/ui.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/ui.js"></script>
	<script type="text/javascript">
		$(function() {
			$("#date").datepicker({dateFormat: "yy-mm-dd"});
		});
	</script>
</head>
<body>
	<h1>Edit Task</h1>

	<div id="wrap">
		<form action="update.php" method="post">

			<input type="hidden" name="id" value="<?php echo $row['id'] ?>">

			<input type="text" name="subject" value="<?php echo $row['subject'] ?>"> Subject<br>
			<input type="text" name="due_date" value="<?php echo $row['due_date'] ?>" id="date"> Due Date<br>
			<select name="priority" id="">
				<option value="0">Low</option>
				<option value="1" <?php if($row['priority'] == 1) echo "selected" ?>>Normal</option>
				<option value="2" <?php if($row['priority'] == 2) echo "selected" ?>>Important</option>
			</select>
			Priority <br><br>

			<input type="submit" value="Update Task"> <a href="index.php">Go Back</a>

		</form>
	</div>
</body>
</html>

