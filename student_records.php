<?php
$conn = mysqli_connect("localhost","root","","hostel_management");

$result = mysqli_query($conn,"SELECT * FROM student");
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Records</title>

<style>
body{
    font-family:Arial;
    background:#f2f2f2;
}

h2{
    text-align:center;
}

table{
    width:90%;
    margin:auto;
    border-collapse:collapse;
    background:white;
}

th,td{
    border:1px solid black;
    padding:10px;
    text-align:center;
}

th{
    background:#4CAF50;
    color:white;
}
</style>
</head>

<body>

<h2>Student Records</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Room No</th>
<th>Course</th>
<th>Mobile</th>
<th>Fees</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['room_no']; ?></td>
<td><?php echo $row['course']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['fees']; ?></td>

<td>
<a href="edit_student.php?id=<?php echo $row['id']; ?>">✏ Edit</a>
</td>

<td>
<a href="delete_student.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this student?');">
🗑 Delete
</a>
</td>

</tr>
<?php
}
?>

</table>

</body>
</html>