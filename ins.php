<?php
$q=$_POST["tb"];

if($q=="notice")
include("in-notice.php");
if($q=="upcoming")
include("in-upcoming.php");
if($q=="image")
include("gall.php");
else
echo 'no such table exists';
?>