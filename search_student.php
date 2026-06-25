<?php
$conn = mysqli_connect("localhost","root","","hostel_management");

?>

<!DOCTYPE html>
<html>
<head>
<title>Search Student</title>

<style>
body{
    font-family:Arial;
    background:#f2f2f2;
    text-align:center;
}

input{
    padding:10px;
    width:300px;
}

button{
    padding:10px 20px;
    background:green;
    color:white;
    border:none;
}

table{
    width:80%;
    margin:auto;
    margin-top:20px;
    border-collapse:collapse;
    background:white;
}

th,td{
    border:1px solid black;
    padding:10px;
}
</style>
</head>

<body>

<h2>Search Student</h2>

<form method="POST">
<input type="text" name="name" placeholder="Enter Student Name">
<button type="submit">Search</button>
</form>

<?php

if(isset($_POST['name']))
{
$name=$_POST['name'];

$query=mysqli_query($conn,"SELECT * FROM student WHERE name='$name'");

echo "<table>";
echo "<tr>
<th>ID</th>
<th>Name</th>
<th>Room No</th>
<th>Course</th>
<th>Mobile</th>
<th>Fees</th>
</tr>";

while($row=mysqli_fetch_assoc($query))
{
echo "<tr>
<td>".$row['id']."</td>
<td>".$row['name']."</td>
<td>".$row['room_no']."</td>
<td>".$row['course']."</td>
<td>".$row['mobile']."</td>
<td>".$row['fees']."</td>
</tr>";
}

echo "</table>";
}
?>

</body>
</html>