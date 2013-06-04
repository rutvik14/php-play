<?php
ob_start();
$con=mysqli_connect("localhost","shethru","password","php_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


if(!filter_var($_POST[emailid],FILTER_VALIDATE_EMAIL))
{
echo "Email ID is not valid";
header("Location:mysql.php");
}
if($_POST[password]!=$_POST[chkpassword])
{
header("Location:mysql.php");
}
else
{

$sql="INSERT IGNORE INTO Persons (FirstName, LastName, Age, EmailId, Password)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]','$_POST[emailid]','$_POST[password]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }


echo "1 record added";
header("Location:sign-in.html");
}

mysqli_close($con);

?>