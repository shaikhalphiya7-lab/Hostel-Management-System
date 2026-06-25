<?php

$conn = mysqli_connect("localhost","root","","hostel_management");

if(isset($_POST['submit']))
{
    $student_id = $_POST['student_id'];
    $amount = $_POST['amount'];
    $status = $_POST['status'];

    mysqli_query($conn,"INSERT INTO fees(student_id,amount,status)
    VALUES('$student_id','$amount','$status')");

    echo "<script>alert('Fees Added Successfully');</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Fees Module</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
}

.form-box{
    width:400px;
    margin:50px auto;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 0 10px gray;
}

input,select{
    width:100%;
    padding:10px;
    margin:10px 0;
}

button{
    width:100%;
    padding:10px;
    background:green;
    color:white;
    border:none;
}

h2{
    text-align:center;
}

</style>
</head>

<body>

<div class="form-box">

<h2>💰 Fees Module</h2>

<form method="POST">

<input type="number" name="student_id" placeholder="Student ID" required>

<input type="number" name="amount" placeholder="Amount" required>

<select name="status">
<option value="Paid">Paid</option>
<option value="Pending">Pending</option>
</select>

<button type="submit" name="submit">Save Fees</button>

</form>

</div>

</body>
</html>