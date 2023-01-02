<!doctype html>
<html>
<head>
<title> Add Data </title>
</head>
<body>
<?php
include_once("connection.php");
$id=mysqli_real_escape_string($mysqli, $_POST['userid']);
$name=mysqli_real_escape_string($mysqli, $_POST['username']);
$address=mysqli_real_escape_string($mysqli, $_POST['useraddress']);
$mail=mysqli_real_escape_string($mysqli, $_POST['usermail']);
$phone=mysqli_real_escape_string($mysqli, $_POST['userphone']);
$rgender=mysqli_real_escape_string($mysqli, $_POST['gender']);
$rage=mysqli_real_escape_string($mysqli, $_POST['age']);
$rexperience=mysqli_real_escape_string($mysqli, $_POST['experience']);
$result=mysqli_query($mysqli,"insert into registration(userid,username,useraddress,usermail,userphone,gender,age,experience) values('$id','$name','$address','$mail','$phone','$rgender','$rage','$rexperience' );");
?>
</body>
</html>
