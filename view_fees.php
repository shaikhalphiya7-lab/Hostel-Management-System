<?php
$conn=mysqli_connect("localhost","root","","hostel_management");
$result=mysqli_query($conn,"SELECT * FROM fees");
?>

<!DOCTYPE html>
<html>
<head>
<title>View Fees</title>
<style>
table{
width:80%;
margin:auto;
border-collapse:collapse;
}
th,td{
border:1px solid black;
padding:10px;
text-align:center;
}
th{
background:green;
color:white;
}
h2{
text-align:center;
}
</style>
</head>
<body>

<h2>Fees Records</h2>

<table>
<tr>
<th>ID</th>
<th>Student ID</th>
<th>Amount</th>
<th>Status</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>
<td>".$row['id']."</td>
<td>".$row['student_id']."</td>
<td>".$row['amount']."</td>
<td>".$row['status']."</td>
</tr>";
}
?>

</table>

</body>
</html>