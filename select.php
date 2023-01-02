<html>
<head>
<title>
View registration deatils
</title>
</head>
<body>
<table border="1">
<tr>
<th>User Id</th>
<th>User Name</th>
<th>User Address</th>
<th>User Mail</th>
<th>User Phone</th>
<th>Gender</th>
<th>Age</th>
<th>Experience</th>
</tr>
<?php
include_once("connection.php");
$result=mysqli_query($mysqli,"select * from registration");
while($res=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $res['userid'] . "</td>";
echo "<td>" . $res['username'] ."</td>";
echo "<td>" . $res['useraddress'] . "</td>";
echo "<td>" . $res['usermail'] ."</td>";
echo "<td>" . $res['userphone'] . "</td>";
echo "<td>" . $res['gender'] ."</td>";
echo "<td>" . $res['age'] . "</td>";
echo "<td>" . $res['experience'] ."</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>