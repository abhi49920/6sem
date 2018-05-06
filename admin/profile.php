<html>

<head>

<link href="ad.css" rel="stylesheet" type="text/css"/>
</head>

<body bgcolor="Violet">

<div id="outer">

<div id="header">

<div id="header1">
<span style="font-size:50px;">Admin Zone</span>
</div>
</div>

<div id="mid1">
<div id="menu2">
<d><span style="font-size:20px;">Customer</span></d>
</div>

<div id="menu1">
<a href="file.php"><d1> AdminGallery</d1></a>
</div>
<div id="menu1">
<a href="../php/dataofcoustmer.php"><d2>Customer Profile</d2></a>
</div>
<div id="menu1">
<a href="#"><d>Discussion Board Mgmt</d></a>
</div>
<div id="menu1">
<a href="../php/dataofengineerfeedback.php"><d1>Engineer Feedback</d1></a>
</div>
<div id="menu1">
<a href="#"><d2>Video Management</d2></a>
</div>
<div id="menu1">
<a href="addnews.php"><d>Notification</d></a>
</div>
<div id="menu1">
<a href="#"><d1>Login Information</d1></a>
</div>
</div>

<div id="mid2">

<div id="menu2">
<d><span style="font-size:20px;">Response Mgmt</span></d>
</div>
<div id="menu1">
<a href="#"><d2>Enquiry Mgmt</d2></a>
</div>
<div id="menu1">
<a href="#"><d>Contact Us Mgmt</d></a>
</div>
<div id="menu1">
<a href="#"><d1>Feedback Mgmt</d1></a>
</div>
<div id="menu1">
<a href="#"><d2>Send Email &SMS</d2></a>
</div>


</div>

<div id="mid3">
<div id="menu2">
<d><span style="font-size:20px;">My Account</span></d>
</div>
<div id="menu1">
<a href="#"><d1>Show Profile</d1></a>
</div>
<div id="menu1">
<a href="#"><d2>Edit Profile</d2></a>
</div>
<div id="menu1">
<a href="#"><d>Change Password</d></a>
</div>

<div id="menu1">
<a href="logout.php"><d1>Logout</d1></a>
</div>
</div>




</div>

</body>

</html>
<?php
session_start();
if($_SESSION['user']=="")
{
session_destroy();
//header("location:index.php");
}

//echo $_SESSION['user'];

?>




