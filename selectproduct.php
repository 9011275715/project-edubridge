<html>
<head>
<title>
View registration deatils
</title>
</head>
<body>
<table border="1">
<tr>
<th> product id</th>
<th>product name</th>
<th>Quantity aavilable</th>
<th>product perunit price</th>
<th>Manufacture date </th>
<th>product expirydate</th>
</tr>
<?php
include_once("connection.php");
$result=mysqli_query($mysqli," select * from product ;");
while($res=mysqli_fetch_array($result)) 
{
echo "<tr>";
echo "<td>" . $res['productid']. "</td>";
echo "<td>" . $res['productname']. "</td>";
echo "<td>" . $res['quantity']. "</td>";
echo "<td>" . $res['perunitprice']. "</td>";
echo "<td>" . $res['manufacturedate']. "</td>";
echo "<td>" . $res['productexpirydate']. "</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>