<div style="width: 100%;overflow:auto;">
    <div style="float:left; width: 40%; border: 1px solid black">
<h2 align="center"; class="notice">content in table-> Notice</h2>
<div>
<?php
$conn=new mysqli("localhost", "root","","rcm");
if($conn->connect_error)
echo $conn->connect_error;

$sql='select * from notice';
$res=$conn->query($sql);
 
if($res->num_rows>0)
{echo "id &nbsp content<br>";
while($row=$res->fetch_assoc())
{
echo $row['id']."    ".$row['content']."<br>";
}
}

$conn->close();
?>
</div>

    </div>


  
    <div style="float:right; width: 70%; margin-left: 2%; margin-right: 5%; height: 70%">
<div>
<form action="updatenotice.php" method="post">
<label for="id">Enter id of content you want to update</label>
<input type="number" id="id" name="id"/>
<br>
<label for="con">Enter content you want to update</label>
<input type="text" id="con" name="content"/>
<br>
<input type="submit"/>
</form>


</div>
</div>
</div>

<div style="clear:both"></div>