<?php
include_once("connection.php");
$id=mysqli_real_escape_string($mysqli, $_POST['productid']);

$result=mysqli_query($mysqli," delete from product where productid='$id';");
header('Location:selectproduct.php');
?>







