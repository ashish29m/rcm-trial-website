<?php
$conn=new mysqli("localhost", "root","","rcm");
if($conn->connect_error)
echo $conn->connect_error;
$id=$_POST['id'];
$c=$_POST['content'];

$sql='select * from notice';
$res=$conn->query($sql);
 
if($res->num_rows>0)
{
while($row=$res->fetch_assoc())
{    $q="update notice set content='$c' where id='$id' ";
 if($conn->query($q)==TRUE)

{
include("uin-notice.php");
break;
   }
}
}
else 
echo "fault";

$conn->close();
?>