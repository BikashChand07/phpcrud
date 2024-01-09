<?php
require_once'connection.php';
$sql="Create database snsc";//query of creating database ( name of database is snscmis) 
if($conn->query($sql)===true)
{
    echo"Database created successfully";
}
else
{
    echo"Error:".$conn->error;
} 
//once this code run successfully then pass the name of database ie snscmis to the variable $dbname in connection.php; 
?>