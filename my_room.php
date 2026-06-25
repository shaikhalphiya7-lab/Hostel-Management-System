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
<title>My Room</title>

<style>
body{
font-family:Arial;
background:#f2f2f2;
}

.box{
width:500px;
margin:50px auto;
background:white;
padding:25px;
border-radius:10px;
box-shadow:0 0 10px gray;
}

h2{
text-align:center;
}

p{
font-size:20px;
}
</style>
</head>

<body>

<div class="box">

<h2>🛏 My Room</h2>

<p><b>Room Number:</b> <?php echo $row['room_no']; ?></p>

<p><b>Student Name:</b> <?php echo $row['name']; ?></p>

<p><b>Course:</b> <?php echo $row['course']; ?></p>

</div>

</body>
</html>