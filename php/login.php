<?php
//session_start();
	$Email=$_POST['email'];
//echo $Email;
	//echo "<br/>";
	$Password=$_POST['password'];
	//echo $Password;
	//echo "<br/>";
    mysql_connect('localhost','root','');
	mysql_select_db("b.c.a 5th semester");
	$query="select * from registration where PersonalEmail=$Email and Password=$Password";
	$res=mysql_query($query);
	if($res=mysql_fetch_array($res,MYSQL_BOTH))
	{
	header("location:swati.html");
	}
	else
	{
	header("location:login.html");
	}
	
	?>
	