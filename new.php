<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>New Task</title>

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
	<h1>New Task</h1>

	<div id="wrap">
		<form action="add.php" method="post">

			<input type="text" name="subject" id=""> Subject<br>
			<input type="text" name="due_date" id="date"> Due Date<br>
			<select name="priority" id="">
				<option value="0">Low</option>
				<option value="1" selected>Normal</option>
				<option value="2">Important</option>
			</select>
			Priority <br><br>

			<input type="submit" value="Add Task"> <a href="index.php">Go Back</a>

		</form>
	</div>
</body>
</html>

