<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','myDB');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"myDB");
$sql="SELECT * FROM student WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Student ID</th>
<th>Amount Paid</th>
<th>Balance Due</th>
<th>Receipt No</th>
<th>Date Paid</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['firstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['studentID'] . "</td>";
    echo "<td>" . $row['amountPaid'] . "</td>";
    echo "<td>" . $row['amountBalance'] . "</td>";
	echo "<td>" . $row['receiptNo'] . "</td>";
    echo "<td>" . $row['datePaid'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>