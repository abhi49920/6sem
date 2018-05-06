<?php
mysql_connect('localhost','root','');
mysql_select_db("b.c.a 5th semester");
$query="select * from engineerfeedback";
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
background-color:pink;
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
<th>EngineerEmail</th>
<th>EngineerComplaint</th>
<th>Statusofcomplaint</th>
<th>dateofsubmit</th>
<th>Payment</th>




</tr>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH) )
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['EngineerEmail']; ?></td>
<td><?php echo $row['EngineerComplaint']; ?></td>
<td><?php echo $row['Statusofcomplaint']; ?></td>
<td><?php echo $row['dateofsubmit'];?></td>
<td><?php echo $row['Payment']; ?></td>

</tr>
<?php
}
?>
</div>
</table>
</body>
</html>
