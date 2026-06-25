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
box-shadow:0px 0px 10px gray;
}

h2{
text-align:center;
color:green;
}

p{
font-size:20px;
}
</style>
</head>

<body>

<div class="box">

<h2>Fees Status</h2>

<p><b>Name:</b> <?php echo $row['name']; ?></p>

<p><b>Course:</b> <?php echo $row['course']; ?></p>

<p><b>Fees Amount:</b> ₹<?php echo $row['fees']; ?></p>

</div>

</body>
</html>