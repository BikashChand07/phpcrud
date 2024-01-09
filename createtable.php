<?php
require_once'connection.php';
//sql query to create table
$sql="CREATE TABLE student(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    program VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    address VARCHAR(200),
    rollno INT(6)
)";
if($conn->query($sql)===true)
{
    echo"Table named student is created successfully";
}
else
{
    echo"Error while creating table:".$conn->error;
}
?>