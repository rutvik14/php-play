<?php

ob_start();


function CheckLoginDb($username,$password)
{
$con=mysqli_connect("localhost","shethru","password","php_db");
//Check Connection

if(mysqli_connect_errno())
{
echo "Failed to connect to mysql:".mysqli_connect_error();
}

$sql="SELECT FirstName,LastName,Age from php_db.Persons where EmailId='$username' and Password='$password'";
$result=mysqli_query($con,$sql);
if(!mysqli_num_rows($result)==1)
{
header("Location:sign-in.html");
}

$row=mysqli_fetch_array($result);
return $row;
}


if (empty($_POST['username']))
{

//HandleError("Username is Empty");
header("Location:sign-in.html");
}
if(empty($_POST['password']))
{
//HandleError("Password is Empty");
header("Location:sign-in.html");
}

$username=trim($_POST['username']);
$password=trim($_POST['password']);


$x=CheckLoginDb($username,$password);
if(!$x)
{
header("Location:sign-in.html");
}
else{
//echo $x['FirstName']." ".$x['LastName'];


header("Location:resume_rutvik.htm");
}


//session_start();
//$_SESSION











?>