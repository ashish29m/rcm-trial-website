<?php
$q=$_POST["tb"];
if($q=="notice")
include("delin-notice.php");
else if($q=="upcoming")
include("in-upcoming.php");

else
echo 'no such table exists';
?>