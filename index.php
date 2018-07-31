<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Task List</title>

	<link rel="stylesheet" href="css/style.css">

	<script type="text/javascript">
		function askForConfirm() {
			return confirm("Are you sure?");
		}
	</script>
</head>
<body>
	<h1>Task List</h1>

	<div id="actions">
		<a href="new.php" class="new-task">Add New Task</a>
	</div>

	<div id="wrap">
		<ul id="tasks">
			<?php
				include("conf/config.php");

				$result = mysql_query("SELECT * FROM tasks WHERE status=0 ORDER BY priority DESC");

				while($row = mysql_fetch_assoc($result)) {

					$id = $row['id'];

					$priority_class = "";
					if($row['priority'] == 1) $priority_class = "normal";
					if($row['priority'] == 2) $priority_class = "important";

					echo "<li class='$priority_class'>";

					echo "<a class='task' href='done.php?id=$id'><img src='images/no.png'></a>";

					echo "<b>" . $row['subject'] . "</b> ";
					echo "<i>" . $row['due_date'] . "</i>";

					echo "<a class='action' href='del.php?id=$id' onclick='return askForConfirm();'>
							<img src='images/delete.png'></a>";
					echo "<a class='action' href='edit.php?id=$id'><img src='images/edit.png'></a>";

					echo "</li>";
				}
			?>
		</ul>

		<ul id="done">
			<?php
				$result = mysql_query("SELECT * FROM tasks WHERE status=1 ORDER BY priority DESC");

				while($row = mysql_fetch_assoc($result)) {

					$id = $row['id'];

					echo "<li>";

					echo "<a class='task' href='undo.php?id=$id'><img src='images/yes.png'></a>";

					echo "<span>" . $row['subject'] . "</span>";

					echo "</li>";
				}
			?>
		</ul>
	</div>
</body>
</html>

