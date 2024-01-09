<?php
require_once'connection.php';
if(isset($_POST['name']))
{
    $name=$_POST['name'];
    $program=$_POST['program'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $rollno=$_POST['rollno'];
    $sql="INSERT INTO student( name,program,address,rollno,email) VALUES('$name','$program','$address','$rollno','$email')";
    if($conn->query($sql)===true)
    {
        echo"New record created successfully";
        header('Location:select.php?success=New Record Added');// this means after record is inserted then it moves to the select.php file with msg New record added 
    }
    else{
        echo"erreo while inserting into table.".$sql."<br>".$conn->error;
    }
}
?>
<h1>REGISTRATION FORM</h1>
    <form name="registration" action="" method="post">
        <label for="">name:</label><input type="text" name="name"> <br><br>
        <label for="">program:</label><input type="text" name="program"><br><br>
        <label for="">email:</label><input type="email" name="email"><br><br>
        <label for="">reg_date:</label><input type="date" name="reg_date"><br><br>
        <label for="">address:</label><input type="text" name="address"><br><br>
        <label for="">rollno:</label><input type="number" name="rollno"><br><br>
        <input type="submit" name="register" value="submit ">
    </form>
    
