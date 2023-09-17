<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.main{
			width: 100%;
			height: 70px;
			background-color:blue;
		}
		.f{
			position: absolute;
			top: 3%;
			left: 2%;
		}
		.title{
			position: absolute;
			top: 3%;
			left: 7%;

}
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="main">
	<div class="i">
	<img src="images\logo-1640136453.png" width="50px" height="50px" class="f">
</div>
	<h3 class="title" style="color: white;">MSRPS</h3>
</div>
<br>
<br>
<table border="1px" cellspacing="5px" cellpadding="10px">
	<tr>
		<th>INQUIRER</th>
		<th>MESSAGE</th>
		<th>EMAIL</th>
				
	</tr>
	<tr>
		<td>
	
<?php
$con=mysqli_connect("localhost","root","","moviedb");
$sql="select * from contact";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res))
 {
		
echo $row['firstname']."<br>";

}
?>
</td>
<td>
		
<?php
$con=mysqli_connect("localhost","root","","moviedb");
$sql="select * from contact";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res))
 {
		
echo $row['message']."<br>";

}
?>
</td>
<td>
		
<?php
$con=mysqli_connect("localhost","root","","moviedb");
$sql="select * from contact";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res))
 {
		
echo $row['email']."<br>";

}
?>
</td>





</tr>
</table>

</body>
</html>