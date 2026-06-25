<?php

$conn = mysqli_connect("localhost","root","","hostel_management");

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM student WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $room_no = $_POST['room_no'];
    $course = $_POST['course'];
    $mobile = $_POST['mobile'];
    $fees = $_POST['fees'];

    mysqli_query($conn,"UPDATE student SET
    name='$name',
    room_no='$room_no',
    course='$course',
    mobile='$mobile',
    fees='$fees'
    WHERE id='$id'");

    header("Location: student_records.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>

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
    box-shadow:0 0 10px gray;
}

input{
    width:100%;
    padding:10px;
    margin:10px 0;
}

button{
    width:100%;
    padding:10px;
    background:#007bff;
    color:white;
    border:none;
    border-radius:5px;
}

h2{
    text-align:center;
}
</style>

</head>

<body>

<div class="form-box">

<h2>Edit Student</h2>

<form method="POST">

<input type="text" name="name" value="<?php echo $row['name']; ?>" required>

<input type="text" name="room_no" value="<?php echo $row['room_no']; ?>" required>

<input type="text" name="course" value="<?php echo $row['course']; ?>" required>

<input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" required>

<input type="number" name="fees" value="<?php echo $row['fees']; ?>" required>

<button type="submit" name="update">Update Student</button>

</form>

</div>

</body>
</html>