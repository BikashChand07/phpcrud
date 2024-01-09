<?php
require_once 'connection.php';
$name= $_POST['name'];
$program= $_POST['program'];
$address= $_POST['address'];
$rollno= $_POST['rollno'];
$email= $_POST['email'];
$id= $_POST['id'];
$sql="UPDATE student SET name='$name',program='$program',address='$address',rollno='$rollno',email='$email' WHERE id='$id'";
if($conn->query($sql)===true)
{
   
 header('Location:select.php?success=updated sucessfull');
    // echo "Record updated sucessfully";
}
else{
    echo" error while upadting record:".$conn->error;
}
?>