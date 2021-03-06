<?php
require("dbConnect.php");
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>To Do</title>
	<link rel="stylesheet" type="text/css" href="notes.css">
</head>
<body>
	<div class="container">
		<div id="enterToDo">
			<select id="colorSelect">
				<option value="timeOfDay">Time of Day</option>
				<option value="timeRange">Time Range</option>
				<option value="exactTime">Exact Time</option>
			</select>
			<form id="timeOfDay" class="toDoInputs" action="insertNote.php" method="POST">
				To Do: <input type="text" id="title" name="txtTitle"></br>
				Completion Time: <input type="date" id="SecondTime" name="txtSecondTime">
				<select id="timeOfDay" name="txtTimeOfDay" form="timeOfDay">
					<option value="morning">Morning</option>
					<option value="afternoon">Afternoon</option>
					<option value="evening">Evening</option>
				</select></br>
				To Do Note: <input type="text" id="content" name="txtContent">
				<input type="submit" value="Add to Database" />
			</form>
			<form id="timeRange" class="toDoInputs" action="insertNote.php" method="POST">
				To Do: <input type="text" id="title" name="txtTitle"></br>
				Completion Time Range: <input type="datetime-local" id="firstTime" name="txtFirstTime">
				<input type="datetime-local" id="SecondTime" name="txtSecondTime"></br>
				To Do Note: <input type="text" id="content" name="txtContent">
				<input type="submit" value="Add to Database" />
			</form>
			<form id="exactTime" class="toDoInputs" action="insertNote.php" method="POST">
				To Do: <input type="text" id="title" name="txtTitle"></br>
				Completion Time: <input type="datetime-local" id="SecondTime" name="txtSecondTime"></br>
				To Do Note: <input type="text" id="content" name="txtContent">
				<input type="submit" value="Add to Database" />
			</form>
		</div>
		<?php include('showNotes.php'); ?>
	</div>
</body>
</html>