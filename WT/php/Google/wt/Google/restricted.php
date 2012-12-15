<?php

session_start();

if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
header ("Location: login.php");
}

?>


<html>
<head>
<title>WELCOME TO RESTRICTED ZONE</title>
</head>
<body>
<h1 style="color:Red">WELCOME TO RESTRICTED ZONE</h1> 
</body>
</html>