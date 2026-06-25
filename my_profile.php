<?php
session_start();

$conn = mysqli_connect("localhost","root","","hostel_management");

$id = $_SESSION['student_id'];

$result = mysqli_query($conn,"SELECT * FROM student WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>My Profile</title>

<style>
body{
    margin:0;
    font-family:Arial,sans-serif;
    background:url('https://images.unsplash.com/photo-1555854877-bab0e564b8d5?auto=format&fit=crop&w=1350&q=80');
    background-size:cover;
    background-position:center;
}

.profile-box{
    width:500px;
    margin:60px auto;
    background:rgba(255,255,255,0.9);
    padding:30px;
    border-radius:15px;
}

h2{
    text-align:center;
    color:#333;
}

p{
    font-size:18px;
    padding:8px;
    border-bottom:1px solid #ddd;
}

a{
    display:block;
    text-align:center;
    margin-top:20px;
    text-decoration:none;
    background:#28a745;
    color:white;
    padding:10px;
    border-radius:5px;
}
</style>

</head>

<body>

<div class="profile-box">

<h2>👤 My Profile</h2>

<p><b>Name:</b> <?php echo $row['name']; ?></p>

<p><b>Room Number:</b> <?php echo $row['room_no']; ?></p>

<p><b>Course:</b> <?php echo $row['course']; ?></p>

<p><b>Mobile:</b> <?php echo $row['mobile']; ?></p>

<p><b>Fees:</b> ₹<?php echo $row['fees']; ?></p>

<a href="student_dashboard.php">⬅ Back to Dashboard</a>

</div>

</body>
</html>