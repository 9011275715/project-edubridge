<html>
<head>
<title>
View registration deatils
</title>
</head>
<body>
<table border="1">
<tr>
<th> customer id</th>
<th>customer name</th>
<th>Address </th>
<th>Contact No</th>
<th>Quantity</th>
<th>Purches</th>

</tr>
<?php
include_once('connection.php');
$result=mysqli_query($mysqli,"select * from  customer");
while($res=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $res['customerid']. "</td>";
echo "<td>" . $res['customername']. "</td>";
echo "<td>" . $res['customeraddress']. "</td>";
 echo "<td>" . $res['contactno']. "</td>";
echo "<td>" . $res['quantity']. "</td>";
echo "<td>" . $res['totalpurches']. "</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>