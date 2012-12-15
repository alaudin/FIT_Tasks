<?php

session_start();

if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
header ("Location: login.php");
}

?>


<html>
<head>
<title>Welcome to restricted area</title>


</head>
<body>



<center>
<img style="padding:32px 2px 22px 2px" src="http://www.google.com/logos/2012/Ivo_Andric-2012-hp.jpg"/>
<form method="get" action="http://www.google.com/search">

<div style="padding:4px;width:20em;">
<table border="0" cellpadding="0">
<tr><td>
<input type="text"   name="q" size="28"
 maxlength="255" value="" />
<input type="submit" value="Google Search" /></td></tr>
<tr><td align="center" style="font-size:75%">

</td></tr></table>
</div>

</form></center>




</body>
</html>



