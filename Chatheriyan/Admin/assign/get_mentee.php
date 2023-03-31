<?php
include "./config.php";

$sql = "SELECT mentee_name FROM mentee_table";
$result = $conn->query($sql);

// Display names in a select tag
if ($result->num_rows > 0) {
  echo "<select name='mentee_name' class='form-select' aria-label='Default select example' required><option value='none' selected disabled hidden>Select Mentor</option>";
  while($row = $result->fetch_assoc()) {
    // echo "<option selected>Select Mentee</option>";
    echo "<option value='" . $row["mentee_name"] . "'>" . $row["mentee_name"] . "</option>";
  }
  echo "</select>";
} else {
  echo "No names found.";
}