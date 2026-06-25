<?php
session_start();

$conn = mysqli_connect("localhost","root","","hostel_management");

if(isset($_POST['login']))
{
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM student WHERE mobile='$mobile' AND password='$password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['student_id'] = $row['id'];

        header("Location: student_dashboard.php");
        exit();
    }
    else
    {
        echo "<script>alert('Invalid Mobile Number or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Login</title>

<style>

body{
    margin:0;
    padding:0;
    font-family:Arial,sans-serif;
    background:url('https://images.unsplash.com/photo-1555854877-bab0e564b8d5?auto=format&fit=crop&w=1350&q=80');
    background-size:cover;
    background-position:center;
}

.login-box{
    width:400px;
    background:rgba(255,255,255,0.90);
    padding:40px;
    border-radius:10px;

    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
}

h2{
    text-align:center;
    margin-bottom:25px;
}

input{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:5px;
    box-sizing:border-box;
}

button{
    width:100%;
    padding:12px;
    background:#28a745;
    color:white;
    border:none;
    border-radius:5px;
    font-size:16px;
    cursor:pointer;
}

button:hover{
    background:#218838;
}

</style>

</head>

<body>

<div class="login-box">

<h2>Student Login</h2>

<form method="post">

<input type="text" name="mobile" placeholder="Enter Mobile Number" required>

<input type="password" name="password" placeholder="Enter Password" required>

<button type="submit" name="login">Login</button>

</form>

</div>

</body>
</html>