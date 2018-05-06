<?php
mysql_connect('localhost','root','');
mysql_select_db("b.c.a 5th semester");
$query="select * from engineer";
$res=mysql_query($query);
?>
<html>
<head>
<style>
#outer
{
height:700px;
width:1200px;
border:1px solid green;
background-color:green;
margin:0px auto;
margin-top:10px;
}
</style>
</head>

<body bgcolor="royalblue">
<div id="outer">
<table border="1" align="center">
<tr>
<th> ID</th>
<th>Firstname</th>
<th>Middlename</th>
<th>Lastname</th>
<th>Address</th>
<th>dob</th>
<th>CompanyEmail</th>
<th>gender</th>
<th>PersonalEmail</th>
<th>Mobile</th>
<th>Nationality</th>
<th>Password</th>




</tr>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH) )
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['Firstname']; ?></td>
<td><?php echo $row['Middlename']; ?></td>
<td><?php echo $row['Lastname']; ?></td>
<td><?php echo $row['Address'];?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['Email']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['PersonalEmail']; ?></td>

<td><?php echo $row['Mobile']; ?></td>
<td><?php echo $row['Nationality']; ?></td>
<td><?php echo $row['Password']; ?></td>
</tr>
<?php
}
?>
</div>
</table>
</body>
</html>
