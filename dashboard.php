<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>

<style>

body{
    margin:0;
    font-family:Arial,sans-serif;

    background:url('https://images.unsplash.com/photo-1555854877-bab0e564b8d5?auto=format&fit=crop&w=1350&q=80');
    background-size:cover;
    background-position:center;
}

.overlay{
    min-height:100vh;
    background:rgba(0,0,0,0.4);
    padding-top:30px;
}

h1{
    color:white;
    text-align:center;
}

.container{
    width:90%;
    margin:auto;
    text-align:center;
}

.card{
    width:250px;
    display:inline-block;
    background:white;
    margin:15px;
    padding:25px;
    border-radius:15px;
    box-shadow:0 0 10px gray;
}

.card h2{
    color:#333;
}

.card a{
    text-decoration:none;
    background:#4CAF50;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

</style>
</head>

<body>

<div class="overlay">

<h1>🏠 Hostel Management System</h1>

<div class="container">
<div class="card">
<h2>👨‍🎓 Add Student</h2>
<a href="add_student.php">Open</a>
</div>
<div class="card">
<h2>🛏 Add Room</h2>
<a href="add_room.php">Open</a>
</div>
<div class="card">
<h2>🛏 Room Allotment</h2>
<a href="room_allotment.php">Open</a>
</div>
<div class="card">
<h2>👩‍🎓 Student Records</h2>
<a href="student_records.php">Open</a>
</div>

<div class="card">
<h2>🔍 Search Student</h2>
<a href="search_student.php">Open</a>
</div>
<div class="card">
<h2>💰 Fees Module</h2>
<a href="fees.php">Open</a>
</div>

<div class="card">
<h2>📋 View Fees</h2>
<a href="view_fees.php">Open</a>
</div>

<div class="card">
<h2>🚪 Logout</h2>
<a href="index.php">Logout</a>
</div>

</div>

</div>

</body>
</html>