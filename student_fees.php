<?php
session_start();

$conn=mysqli_connect("localhost","root","","hostel_management");

$id=$_SESSION['student_id'];

$result=mysqli_query($conn,"SELECT * FROM student WHERE id='$id'");
$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Fees Status</title>
</head>
<body>

<h2>Student Fees Status</h2>

<p>Name: <?php echo $row['name']; ?></p>

<p>Course: <?php echo $row['course']; ?></p>

<p>Fees: ₹<?php echo $row['fees']; ?></p>

</body>
</html>