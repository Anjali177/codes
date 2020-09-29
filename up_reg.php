<html>
<head>
<style>
body {
  background-color: rgb(180,180,180);
  color: white;
  text-shadow: 2px 2px 4px #000000;
}
</style>
</head>
<body>

<?php

session_start();

$conn = new mysqli('localhost','root','','studentreg');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$rollno = $_POST['rollno'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];

$result = mysqli_query($conn, "select * from student where rollno IN ('$rollno')");
$row1 = $result->fetch_assoc();
if ($row1==true)
{

$reg="UPDATE student SET firstname='$firstname','lastname='$lastname',age='$age',rollno='$rollno',m1='$m1',m2='m2' WHERE rollno IN ('$rollno')";
mysqli_query($conn, $reg);
echo "<p align='center'><b><font size='4pt'>Record Successfully updated</font></b></p>";
}

else
{
echo "<p align='center'><b><font size='4pt'>Name doesn't exist in database.</font></b></p>";
}

?>

</body>
</html>