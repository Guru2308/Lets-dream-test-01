<?php

include('./config.php');


// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Get the mentee and mentor names from the form submission
$mentee_name = $_POST['mentee_name'];
$mentor_name = $_POST['mentor_name'];

// Insert the mentor-mentee pairing into the database
$sql = "INSERT INTO assign (mentee_name, mentor_name) VALUES ('$mentee_name', '$mentor_name')";

if (mysqli_query($conn, $sql)) {
	// echo "Mentor assigned successfully!";
	header('Location: ./1.php');
} else {
	echo "Error assigning mentor: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
