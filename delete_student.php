<?php

$conn = mysqli_connect("localhost","root","","hostel_management");

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM student WHERE id='$id'");

header("Location: student_records.php");

?>