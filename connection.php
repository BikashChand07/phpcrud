<?php
$servername="localhost";
$username="root";
$password="";
$dbname="snscmis";// initially it is empty ,create a database using php (databasecreate.php) once the databasecreate.php run successfully then pass the name of database in variable $dbname.
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
// else{
//     echo"connection successfull";
// }
?>