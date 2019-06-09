<html>
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link  rel="stylesheet" type="text/css"  href="mystyle.css">
<link  rel="stylesheet" type="text/css"  href="navbar.css">
<link  rel="stylesheet" type="text/css"  href="section.css">
<link  rel="stylesheet" type="text/css"  href="gal.css">
<link  rel="stylesheet" type="text/css"  href="contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="he">
<?php 
include("logo.php");
?>
</div>

<div class="his">
<?php 
include("menu.php");
?>
</div>
<div class="hit">
<br>
<div style="width: 100%;overflow:auto;">
    <div style="float:left; width: 20%; border: 1px solid black">
<h1 align="center"; class="notice">Important Notice</h1>
<div>
<?php
 include("notice.php");
?>
</div>
    </div>


  
    <div style="float:right; width: 70%; margin-left: 2%; margin-right: 5%; height: 70%">
<div class="hit">
<?php
include("mail.php");
?>
</div>
</div>
</div>

<div style="clear:both"></div>
</div>

<div class="f">
<br>
<br>
<br><br>
<?php 
include("foot.php");
?>
</div> 



</body>
</html>                      