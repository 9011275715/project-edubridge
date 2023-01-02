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
$result=mysqli_query($mysqli,"update registration set username='$name',useraddress='$address',usermail='$mail',userphone='$phone',gender='$rgender',age='$rage',experience='$rexperience' where userid='$id' ");
?>

<?php
include_once("connection.php");
$name=mysqli_real_escape_string($mysqli, $_POST['username']);

$result=mysqli_query($mysqli," delete from registration where username='$name' ");
header('Location:select.php');
?>

</body>
</html>
