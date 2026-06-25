<?php
session_start();
?>

<!DOCTYPE html>

<html>
<head>
<title>Student Dashboard</title>

<style>

body{
    margin:0;
    padding:0;
    font-family:Arial, sans-serif;

    background:url('https://images.unsplash.com/photo-1555854877-bab0e564b8d5?auto=format&fit=crop&w=1350&q=80');
    background-size:cover;
    background-position:center;
}

h1{
    text-align:center;
    color:white;
    padding:20px;
}

.container{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:30px;
    padding:20px;
}

.card{
    width:250px;
    background:rgba(255,255,255,0.92);
    padding:25px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 0 10px gray;
}

.card h2{
    margin-bottom:20px;
}

.btn{
    display:inline-block;
    text-decoration:none;
    background:#28a745;
    color:white;
    padding:12px 25px;
    border-radius:5px;
    font-size:16px;
}

.btn:hover{
    background:#218838;
}

</style>

</head>

<body>

<h1>Student Dashboard</h1>

<div class="container">

```
<div class="card">
    <h2>👤 My Profile</h2>
    <a href="my_profile.php" class="btn">Open</a>
</div>

<div class="card">
    <h2>🛏 My Room</h2>
    <a href="my_room.php" class="btn">Open</a>
</div>

<div class="card">
    <h2>💰 View Fees</h2>
    <a href="view_fees.php" class="btn">Open</a>
</div>

<div class="card">
    <h2>📄 Fees Status</h2>
    <a href="student_fees.php" class="btn">Open</a>
</div>

<div class="card">
    <h2>🚪 Logout</h2>
    <a href="logout.php" class="btn">Logout</a>
</div>
```

</div>

</body>
</html>