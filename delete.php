<?php
require_once 'connection.php';
$id=$_GET['id'];
$sql="DELETE from student where id=$id";
if($conn->query($sql)===true)
{
    // echo"record deleted succesfully";
    header('Location:select.php?success=Record deleted successfully');
}
else{
    echo"error:".$sql."<br>". $conn->error;
}
?>