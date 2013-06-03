<?php

//Rutvik 05/23/13 

// Create a connection
$conn=mysqli_connect("localhost","shethru","password","mysql");

//check connection
if(mysqli_connect_errno($conn))
{
echo "Connection failed:".mysqli_connect_error().'<br />';
}
else
{
echo "Congratulations Connection succeeded <br />";
}


echo "Now lets proceed"."<br />";

// Create a new database / table 


$sql="CREATE DATABASE IF NOT EXISTS php_db";
if(mysqli_query($conn,$sql))
{
echo "Created a new database successfully!!"."<br />";
}
else
{
echo "Failed to create the new database:".mysqli_error($conn)."<br />";
}


$sql1 = "CREATE TABLE IF NOT EXISTS php_db.Persons
(
PID INT NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(PID),
FirstName  CHAR(15) NOT NULL,
LastName CHAR(15) NOT NULL,
Age INT,
EmailId CHAR(100) NOT NULL,
UNIQUE (EmailId)
)";
// Execute the query 

if(mysqli_query($conn,$sql1))
{
echo "Table Persons Created successfully"."<br />";
}
else
{
echo "Table Persons was not Created:".mysqli_error($conn)."<br />";
}


// INSERTING STUFF INTO THE DATABASE

echo "Now lets insert something in to the database";


echo "<h1> Enter your details please </h1>";
echo "<br\>

<form action='insert.php' method='post'>
FirstName: <input type='text' name='firstname'> <br \>
LastName: <input type='text' name='lastname'> <br \>
Age: <input type='number' name='age'> <br \>
Email Id: <input type='email' name='emailid'> <br \> 
<input type='submit' >
</form>
"; 

echo $_POST[emailid];

mysqli_close($conn);

?>
