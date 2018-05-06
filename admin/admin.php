<?php
//session_start();
$Email=$_POST['user'];
echo $Email;
echo "<br/>";
$Password=$_POST['pass'];
echo $Password;
echo "<br/>";
mysql_connect('localhost','root','');
mysql_select_db("b.c.a 5th semester");
$query="select * from admin where Email='$Email' and Password='$Password'";
$res=mysql_query($query);
if ($row=mysql_fetch_array($res,MYSQL_BOTH))
{
//$_SESSION['user']=$username;
header("location:profile.php");
}
else
{
header("location:index.php");
}
?>
