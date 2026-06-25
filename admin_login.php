<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

<style>
body{
    margin:0;
    padding:0;
    font-family:Arial, sans-serif;

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
}

button{
    width:100%;
    padding:12px;
    background:#007bff;
    color:white;
    border:none;
    border-radius:5px;
    font-size:16px;
    cursor:pointer;
}

button:hover{
    background:#0056b3;
}
</style>

</head>

<body>

<div class="login-box">

<h2>Admin Login</h2>

<form action="dashboard.php" method="post">

<input type="text" placeholder="Enter Admin Username" required>

<input type="password" placeholder="Enter Password" required>

<button type="submit">Login</button>

</form>

</div>

</body>
</html>