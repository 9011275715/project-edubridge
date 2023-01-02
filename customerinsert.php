<!doctype html>
<html>
<head>
<title> Add Data </title>
</head>
<body>
<?php
include_once("connection.php");
$id=mysqli_real_escape_string($mysqli, $_POST['customerid']);
$name=mysqli_real_escape_string($mysqli, $_POST['customername']);
$address=mysqli_real_escape_string($mysqli, $_POST['customeraddress']);
$contact=mysqli_real_escape_string($mysqli, $_POST['contactno']);
 $cquantity=mysqli_real_escape_string($mysqli, $_POST['quantity']);
$purches=mysqli_real_escape_string($mysqli, $_POST['totalpurches']);
$result=mysqli_query($mysqli," insert into customer(customerid,customername,customeraddress,contactno,quantity,totalpurches) values('$id','$name','$address','$contact','$cquantity','$purches'); ");
?>
</body>
</html>
