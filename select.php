<?php
require_once 'connection.php';
$sql="SELECT * from student";
$result=$conn->query($sql);
if($result->num_rows>0)
{
   if(isset($_GET['success']))
   {
    echo $_GET['success'];
   } 
?>
    <table cellspacing="4" cellpadding="2" border="2">
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Email</th>
            <th>address</th>
            <th>Action</th>
        </tr>
<?php
$i=1;
while($row=$result->fetch_assoc())
{
?>
<tr>
    <td><?php echo $i;?></td>
    <td><?php echo$row['name'];?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['address']?></td>
    <td><a href="update.php?id=<?php echo $row["id"];?>">Update</a> </td>
    <td><a href="delete.php?id=<?php echo $row["id"];?>">delete</a> </td>
</tr>
<?php
$i++;
}
echo'</table>';
}
else{
    echo"0 results";
}
$conn->close();
?>

