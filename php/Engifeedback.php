<?php
	$EngineerEmail=$_POST['email'];
	//echo $EngineerEmail;
	echo "<br/>";
	$EngineerComplaint=$_POST['email'];
	//echo $EngineerComplaint;
	echo "<br/>";
	$Statusofcomplaint=$_POST['status'];
	//echo $Statusofcomplaint;
	echo "<br/>";
	$dateofsubmit=$_POST['dateofsubmit'];
	//echo $dateofsubmit;
	echo "<br/>";
	$Payment=$_POST['number'];
	//echo $Payment;
	mysql_connect('localhost','root','');
	mysql_select_db("b.c.a 5th semester");
	$query="insert into engineerfeedback(EngineerEmail,EngineerComplaint,Statusofcomplaint,dateofsubmit,Payment)values
	('$EngineerEmail','$EngineerComplaint','$Statusofcomplaint','$dateofsubmit','$Payment')";
	mysql_query($query);
	header("location:dataofengineerfeedback.php");
	?>