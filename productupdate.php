<!doctype html>
<html>
<head>
<title> Add Data </title>
</head>
<body>

<?php
include_once("connection.php");
$id=mysqli_real_escape_string($mysqli, $_POST['productid']);
 $name=mysqli_real_escape_string($mysqli, $_POST['productname']);
$pquantity=mysqli_real_escape_string($mysqli, $_POST['quantity']);
$price=mysqli_real_escape_string($mysqli, $_POST['perunitprice']);

$mdate=mysqli_real_escape_string($mysqli, $_POST['manufacturedate']);
$edate=mysqli_real_escape_string($mysqli, $_POST['productexpirydate']);

$result=mysqli_query($mysqli,"update product set productname='$name',quantity='$pquantity',perunitprice='$price',manufacturedate='$mdate',productexpirydate='$edate' where productid='$id' ");
?>
 </body>
</html>



