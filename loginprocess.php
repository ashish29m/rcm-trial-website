<?php
$username =$_POST["username"];
$password =$_POST["password"];
$conn = new mysqli("localhost","root","","rcm");
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);}

$sql='select * from admin';

$res=$conn->query($sql);

if($res->num_rows>0)
           {
              while($row=$res->fetch_assoc())
                   {
                     if($row["userid"]==$username && $row["password"]==$password)
                          {
                               header("Location:setup.php");
                                break;
                          }
                   }

           }

$conn->close();
?>

