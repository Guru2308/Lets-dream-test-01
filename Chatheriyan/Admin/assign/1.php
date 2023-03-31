<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<title>Mentor-Mentee Assignment</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 50px;
		}
		label {
			margin-top: 20px;
		}
		input[type=text] {
			padding: 10px;
			margin: 10px;
			border-radius: 5px;
			border: none;
			box-shadow: 1px 1px 3px grey;
			font-size: 16px;
			width: 250px;
		}
		input[type=submit] {
			background-color: blue;
			color: white;
			padding: 10px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
			margin-top: 20px;
			width: 150px;
		}
		input[type=submit]:hover {
			background-color: navy;
		}
	</style>
</head>
<body>
	<form method="POST" action="./2.php" onsubmit="show_alert()">
		<label for="mentor_name">Mentor Name:</label>
		<!-- <input type="text" id="mentor_name" name="mentor_name" placeholder="Enter mentor name" required> -->
		<?php include('./get_mentor.php') ?>

		<label for="mentee_name">Mentee Name:</label>
		<!-- <input type="text" id="mentee_name" name="mentee_name" placeholder="Enter mentee name"> -->
		<?php include('./get_mentee.php') ?>

		<input type="submit" value="Assign" >
	</form>
	<script>
    function show_alert() {
  alert("Assigned successfully!");
}
</script>
</body>
</html>
