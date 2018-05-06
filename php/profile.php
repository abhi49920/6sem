<html>
<head>
</head>
<body>
<form>
<a href="../html/login.html">logout</a>

</form>
</body>
</html>
<?php
session_start();
if ($_SESSION['email']=="")
{
session_destroy();
header("location:../html/login.html");
}
?>