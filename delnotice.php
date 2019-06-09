<?php
$conn=new mysqli("localhost", "root","","rcm");
if($conn->connect_error)
echo $conn->connect_error;

$id=$_POST['id'];
$sql="DELETE FROM notice WHERE id=".$id;
if($conn->query($sql)==TRUE)
{
echo '<script>document.write("deleted")</script>';
header("location:delin-notice.php");
}
else 
   echo "fault in query";

$conn->close();
?>