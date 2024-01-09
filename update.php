<?php
require_once "connection.php";
$id = $_GET['id'];
$sql="SELECT *FROM student WHERE id=$id";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    $row=$result->fetch_assoc();//output data of each row 
}
$conn->close();
?>
<h1>REGISTRATION FORM</h1>
    <form name="registration" action="update_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>"> <!--this field is required to pass the id to the update_process.php file for updation -->
        <label for="">name:</label><input type="text" name="name" value="<?php echo $row['name'];?>"> <br><br>
        <label for="">program:</label><input type="text" name="program" value="<?php echo $row['program'];?>"><br><br>
        <label for="">email:</label><input type="email" name="email" value="<?php echo $row['email'];?>"><br><br>
        <label for="">address:</label><input type="text" name="address" value="<?php echo $row['address'];?>"><br><br>
        <label for="">rollno:</label><input type="number" name="rollno" value="<?php echo $row['rollno'];?>"><br><br>
        <input type="submit" name="register" value="submit ">
    </form>
