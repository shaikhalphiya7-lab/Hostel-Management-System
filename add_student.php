<?php

$conn = mysqli_connect("localhost","root","","hostel_management");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $room_no = $_POST['room_no'];
    $course = $_POST['course'];
    $mobile = $_POST['mobile'];
    $fees = $_POST['fees'];
    $password = $_POST['password'];

    mysqli_query($conn,"INSERT INTO student(name, room_no, course, mobile, fees, password)
    VALUES('$name','$room_no','$course','$mobile','$fees','$password')");

    echo "<script>alert('Student Added Successfully');</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>

<style>

body{
font-family:Arial;
background:#f2f2f2;
}

.form-box{
width:450px;
margin:50px auto;
background:white;
padding:25px;
border-radius:10px;
box-shadow:0px 0px 10px gray;
}

input{
width:100%;
padding:10px;
margin:10px 0;
box-sizing:border-box;
}

button{
width:100%;
padding:10px;
background:green;
color:white;
border:none;
font-size:16px;
cursor:pointer;
}

button:hover{
background:darkgreen;
}

h2{
text-align:center;
}

</style>

</head>

<body>

<div class="form-box">

<h2>Add Student</h2>

<form method="POST">

<input type="text" name="name" placeholder="Student Name" required>

<input type="text" name="room_no" placeholder="Room Number" required>

<input type="text" name="course" placeholder="Course" required>

<input type="text" name="mobile" placeholder="Mobile Number" required>

<input type="number" name="fees" placeholder="Fees" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="submit">Add Student</button>

</form>

</div>

</body>
</html>