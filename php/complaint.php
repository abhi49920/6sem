<?php
	$Applinces=$_POST;
	echo $Applinces;
	echo "<br/>";
	$Modelnumber=$_POST['number'];
	echo $Modelnumber;
	echo "<br/>";
	$Reason=$_POST['reason'];
	echo $Reason;
	echo "<br/>";
	$Problem=$_POST['problem'];
	echo $Problem;
	echo "<br/>";
	$problem=$_POST['dateofproblem'];
	echo $problem;
	echo "<br/>";
	$Complaintstatus=$_POST['status'];
	echo $Complaintstatus;
	echo "<br/>";
	$Email=$_POST['email'];
	echo $Email;
	echo "<br/>";
	$Cid=$_POST['id'];
	echo $Cid;
	echo "<br/>";
	$DComplaint=$_POST['dateofcomplaint'];
	echo $DComplaint;
	echo "<br/>";
	$Password=$_POST['password'];
	echo $Password;
	echo "<br/>";
	mysql_connect('localhost','root','');
	mysql_select_db("b.c.a 5th semester");
	$query="insert into complaint(Applinces,Modelnumber,Reason,Problem,Complaintstatus,Email,Cid,DComplaint,Password) values ('$Applinces','$Modelnumber','$Reason','$Problem','$Complaintstatus','$Email','$Cid','$DComplaint','$Password')";
	mysql_query($query);
	header("location:dataofcoustmer.php");
	?>