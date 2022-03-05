<html>
<body>
<table>
<tr><th>Seial No</th>
<th>Name</th>
<th>Address</th>
<th>Phone Number</th>
<th>Vehicle Model</th>
</tr>
<?php
include('connection.php');
$sql="SELECT * FROM Car_datas";
$result=mysqli_query($con,$sql);
if($result)
{
while($row=mysqli_fetch_row($result))
{
?>
<tr><td>
<?php echo $row[0]; ?>
</td><td>
<?php echo $row[1]; ?>
</td><td>
<?php echo $row[2]; ?>
</td><td>
<?php echo $row[3]; ?>
</td><td>
<?php echo $row[4]; ?>
</td></tr>

<?php
}
}
?>
</table>
</body>
</html>
