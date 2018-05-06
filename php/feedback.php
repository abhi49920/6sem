<?php
	$Email=$_POST['email'];
	//echo $Email;
	//echo "<br/>";
	$Question1=$_POST['question'];
	//echo $Question1;
	//echo "<br/>";
	$Question2=$_POST['question'];
	//echo $Question2;
	//echo "<br/>";
	$Question3=$_POST['question'];
	//echo $Question3;
	//echo "<br/>";
	$Question4=$_POST['question'];
	//echo $Question4;
	//echo "<br/>";
	$Question5=$_POST['question'];
	//echo $Question5;
	mysql_connect('localhost','root','');
	
	mysql_select_db("b.c.a 5th semester");
	$query="insert into Feedback(Email,Question1,Question2,Question3,Question4,Question5)values
	('$Email','$Question1','$Question2','$Question3','$Question4','$Question5')";
	mysql_query($query);
	header("location:dataoffeedback.php");
	
	?>