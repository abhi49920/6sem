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
	$Address=$_POST['address'];
	//echo $Address;
	//echo "<br/>";
	$dob=$_POST['dob'];
	//echo $dob;
	//echo "<br/>";
	$CompanyEmail=$_POST['email'];
	//echo $CompanyEmail;
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
	$Nationality=$_POST['national'];
	//echo $Nationality;
	//echo "<br/>";
	$Password=$_POST['password'];
	//echo $Password;
	mysql_connect('localhost','root','');
	mysql_select_db("b.c.a 5th semester");
	$query="insert into engineer(Firstname,Middlename,Lastname,Address,dob,Email,gender,PersonalEmail,Mobile,Nationality,Password)values
	('$Firstname','$Middlename','$Lastname','$Address','$dob','$CompanyEmail','$gender','$PersonalEmail','$Mobile',
	'$Nationality','$Password')";
	mysql_query($query);
	
	header("location:dataofengineer.php");
	?>