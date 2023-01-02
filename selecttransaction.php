<html>
<head>
<title>
View  invoice deatils
</title>
</head>
<body>
<table border="1">
<caption>Invoice</caption>
<tr>
<th>bill ID</th>
<th>bill date</th>
<th>customer id</th>
<th>product id</th>
<th>Per unit Price</th>
<th>quantity</th>
<th>total price</th>
<th>discount</th>
<th>grant total</th>
</tr>
<?php
include_once("connection.php");
$result=mysqli_query($mysqli,"select * from invoice where billdate='$date' ");
while($res=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $res['billid']. "</td>";
echo "<td>" . $res['billdate']. "</td>";
echo  "<td>" .$res['customerid'] ."</td>";
echo  "<td>" . $res['productid'] . "</td>";
echo  "<td>" . $res['perunitprice'] . "</td>";
echo  "<td>" . $res['quantity'] . "</td>";
echo  "<td>" . $res['totalprice'] . "</td>";
echo  "<td>" . $res['discount'] . "</td>";
echo  "<td>" . $res['granttotal'] . "</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>