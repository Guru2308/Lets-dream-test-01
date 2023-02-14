<?php
include '/Applications/XAMPP/xamppfiles/htdocs/Lets-dream-test-2062016/Chatheriyan/Admin/config/config.php';
$conn = new mysqli('localhost', 'root', '','db_admin') or die("Connect failed: %s\n". $conn -> error);
$query = 'SELECT * FROM `tbl_users` WHERE roleid = "3";';
$result = mysqli_query($conn,$query);
$mentees = mysqli_fetch_all($result,MYSQLI_ASSOC);

foreach($mentees as $mentee){
    
    $mentee_id = $mentee['id'];
    $mentee_username = $mentee['username'];
    $mentee_email = $mentee['email'];
    $mentee_pass = $mentee['password'];
    $mentee_mobile = $mentee['mobile'];
   
    $sql = "INSERT INTO mentee_table(mentee_id,mentee_name,mentee_mail,mentee_pass,mentee_mobile,isActive,assigned_mentor_id) VALUES ('$mentee_id','$mentee_username','$mentee_email','$mentee_pass','$mentee_mobile',1,2)";
    mysqli_query($conn,$sql);
}