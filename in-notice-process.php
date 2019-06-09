<?php
$conn=new mysqli("localhost", "root","","rcm");
if($conn->connect_error)
echo $conn->connect_error;
$l=$_POST["d"];
$q="insert into notice values('$l')";

if($conn->query($q)==TRUE)
echo "created successfully";
else
echo connect_error;

$conn->close();
?>