<?php
	$Firstname=$_POST['firstname'];
	//echo $Firstname;
	//echo "<br/>";
	$Middlename=$_POST['middlename'];
	//echo $Middlename;
	//echo "<br/>";
	$Lastname=$_POST['lastname'];
	//echo $Lastname;
	//echo "<br/>";
	$Namef=$_POST['fhname'];
	//echo $Namef;
	//echo "<br/>";
	$Address=$_POST['address'];
	//echo $Address;
	//echo "<br/>";
	$dob=$_POST['dob'];
	//echo $dob;
	//echo "<br/>";
	$gender=$_POST['gen'];
	//echo $gender;
	//echo "<br/>";
	$PersonalEmail=$_POST['email'];
	//echo $PersonalEmail;
	//echo "<br/>";
	$Mobile=$_POST['mobile'];
	//echo $Mobile;
	//echo "<br/>";
	$Mobilefh=$_POST['mobilefh'];
	//echo $Mobilefh;
	//echo "<br/>";
	$Nationality=$_POST['national'];
	//echo $Nationality;
	//echo "<br/>";
	$Password=$_POST['pass'];
	//echo $Password;
	//echo "<br/>";
	$HintQuestion=$_POST['question'];
	//echo $HintQuestion;
	//echo "<br/>";
	$HintAnswer=$_POST['ans'];
	echo $HintAnswer;
	mysql_connect('localhost','root','');
	mysql_select_db("b.c.a 5th semester");
	$query="insert into registration(Firstname,Middlename,Lastname,Namef,Address,dob,gender,PersonalEmail,Mobile,Mobilefh,Nationality,Password,HintQuestion,HintAnswer) values('$Firstname','$Middlename','$Lastname','$Namef','$Address','$dob','$gender','$PersonalEmail','$Mobile','$Mobilefh','$Nationality','$Password','$HintQuestion','$HintAnswer')";
	
	mysql_query($query);
	
header("location:dataofregistration.php");
	
	?>