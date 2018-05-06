<?php
mysql_connect('localhost','root','');
mysql_select_db("b.c.a 5th semester");
$query="select * from feedback";
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
<th> id</th>
<th>Email</th>
<th>Question1</th>
<th>Question2</th>
<th>Question3</th>
<th>Question4</th>
<th>Question5</th>



</tr>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH) )
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['Email']; ?></td>
<td><?php echo $row['Question1']; ?></td>
<td><?php echo $row['Question2']; ?></td>
<td><?php echo $row['Question3'];?></td>
<td><?php echo $row['Question4']; ?></td>
<td><?php echo $row['Question5']; ?></td>


</tr>
<?php
}
?>
</div>
</table>
</body>
</html>
