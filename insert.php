<?php
$con=mysqli_connect("localhost","shethru","password","php_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


if(!filter_var($_POST[emailid],FILTER_VALIDATE_EMAIL))
{
echo "Email ID is not valid";
}
else
{

$sql="INSERT IGNORE INTO Persons (FirstName, LastName, Age, EmailId)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]','$_POST[emailid]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }


echo "1 record added";
}
mysqli_close($con);
?>