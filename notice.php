<?php
$conn=new mysqli("localhost", "root","","rcm");
if($conn->connect_error)
echo $conn->connect_error;

$q='select * from notice';
$res=$conn->query($q);
if($res->num_rows>0)
{
echo '<ul>';
while($row=$res->fetch_assoc())
{
  echo '<li><h2>'.$row["content"].'</h2></li><br>';
}
echo '</ul>';
}
else
echo "no query found";

$conn->close();
?>
