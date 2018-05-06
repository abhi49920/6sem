<?php
mysql_connect('localhost','root','');
mysql_select_db("b.c.a 5th semester");
$query="select * from complaint";
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
<th> Applinces</th>
<th> ModelNumber</th>
<th>Reason</th>
<th> Problem</th>
<th>Complaintstatus</th>
<th>Email</th>
<th>Complain ID</th>
<th>Complain Date</th>
<th>Password</th>



</tr>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH) )
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['Applinces']; ?></td>
<td><?php echo $row['Modelnumber']; ?></td>
<td><?php echo $row['Reason']; ?></td>
<td><?php echo $row['Problem'];?></td>
<td><?php echo $row['Complaintstatus']; ?></td>
<td><?php echo $row['Email']; ?></td>
<td><?php echo $row['Cid']; ?></td>
<td><?php echo $row['DComplaint']; ?></td>

<td><?php echo $row['Password']; ?></td>
</tr>
<?php
}
?>
</div>
</table>
</body>
</html>
