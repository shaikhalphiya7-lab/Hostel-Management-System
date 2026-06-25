<?php

$conn=mysqli_connect("localhost","root","","hostel_management");

if(isset($_POST['submit']))
{
    $room_no=$_POST['room_no'];
    $room_type=$_POST['room_type'];
    $beds=$_POST['beds'];
    $status=$_POST['status'];

    mysqli_query($conn,"INSERT INTO room(room_no,room_type,beds,status)
    VALUES('$room_no','$room_type','$beds','$status')");

    echo "<script>alert('Room Added Successfully');</script>";
}

?>

<!DOCTYPE html>

<html>
<head>
<title>Add Room</title>

<style>

body{
    margin:0;
    font-family:Arial,sans-serif;
    background:url('https://images.unsplash.com/photo-1555854877-bab0e564b8d5?auto=format&fit=crop&w=1350&q=80');
    background-size:cover;
    background-position:center;
}

.form-box{
    width:450px;
    margin:60px auto;
    background:rgba(255,255,255,0.9);
    padding:30px;
    border-radius:15px;
}

h2{
    text-align:center;
}

input{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    box-sizing:border-box;
}

button{
    width:100%;
    padding:12px;
    background:#4CAF50;
    color:white;
    border:none;
}

</style>

</head>

<body>

<div class="form-box">

<h2>🛏 Add Room</h2>

<form method="POST">

<input type="text" name="room_no" placeholder="Room Number" required>

<input type="text" name="room_type" placeholder="Room Type" required>

<input type="number" name="beds" placeholder="Number of Beds" required>

<input type="text" name="status" placeholder="Room Status" required>

<button type="submit" name="submit">Add Room</button>

</form>

</div>

</body>
</html>