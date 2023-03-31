<?php
include "./config.php";

$sql = "SELECT mentor_name FROM mentor_table";
$result = $conn->query($sql);

// Display names in a select tag
if ($result->num_rows > 0) {
  echo "<select name='mentor_name' class='form-select' aria-label='Default select example' required><option value='none' selected disabled hidden>Select Mentor</option>";
  while($row = $result->fetch_assoc()) {
    // echo "<option selected>Select Mentee</option>";
    echo "<option value='" . $row["mentor_name"] . "'>" . $row["mentor_name"] . "</option>";
  }
  echo "</select>";
} else {
  echo "No names found.";
}