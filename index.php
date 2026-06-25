<!DOCTYPE html>
<html>
<head>
<title>Hostel Management System</title>

<style>
body{
    margin:0;
    padding:0;
    font-family:Arial, sans-serif;

    background:url('https://images.unsplash.com/photo-1555854877-bab0e564b8d5?auto=format&fit=crop&w=1350&q=80');
    background-size:cover;
    background-position:center;
}

.container{
    width:400px;
    background:rgba(255,255,255,0.85);
    padding:40px;
    border-radius:10px;

    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);

    text-align:center;
}

h1{
    color:#333;
}

.btn{
    display:block;
    width:100%;
    padding:12px;
    margin-top:15px;
    text-decoration:none;
    color:white;
    background:#4CAF50;
    border-radius:5px;
    font-size:18px;
}

.btn:hover{
    background:#45a049;
}
</style>

</head>

<body>

<div class="container">

<h1>Hostel Management System</h1>

<p>Welcome to Hostel Management System</p>

<a href="admin_login.php" class="btn">Admin Login</a>

<a href="student_login.php" class="btn">Student Login</a>

</div>

</body>
</html>