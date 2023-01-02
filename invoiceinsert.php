<!doctype html>
<html>
<head>
<title> Add Data </title>
</head>
<body>
<?php
include_once("connection.php");
$bno = mysqli_real_escape_string($mysqli, $_POST['billid']);

$bdate = mysqli_real_escape_string($mysqli, $_POST['billdate']);

$cid = mysqli_real_escape_string($mysqli, $_POST['customerid']);

$pid = mysqli_real_escape_string($mysqli, $_POST['productid']);

$iquantity = mysqli_real_escape_string($mysqli, $_POST['quantity']);

$iprice = mysqli_real_escape_string($mysqli, $_POST['totalprice']);
$idiscount = mysqli_real_escape_string($mysqli, $_POST['discount']);
$igranttotal = mysqli_real_escape_string($mysqli, $_POST['granttotal']);
$result = mysqli_query($mysqli,"insert into invoice(billid,billdate,customerid,productid,quantity,totalprice,discount,granttotal )values('$bno','$bdate','$cid','$pid','$iquantity','$iprice','$idiscount ','$igranttotal ');");
?>

</body>
</html>
