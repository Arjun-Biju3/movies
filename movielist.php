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
.btn{

	width: 300px;
	height: 200px;
	position: absolute;
	left: 75%;
}
button{
	background-color: blue;
	height: 40px;
	border: none;
	border-radius: 5px;
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
<form method="POST">
	<div class="btn">
	<a href="addmovie1.php" style="text-decoration:none">ADD MOVIE</a>
	<br><br><br>
	<a href="deletemovie.php" style="text-decoration:none">DELETE MOVIE</a>
</div>
<br><br><br><br>
</form>
<br>
<br>
<table border="1px" cellspacing="5px" cellpadding="10px">
	<tr>
		<th>ID</th>
		<th>TITLE</th>
		<th>DIRECTOR</th>
		<th>WRITER</th>
		<th>PRODUCER</th>
		<th>RELEASE DATE</th>
	</tr>
	<tr>
		<td>
			<?php
$con=mysqli_connect("localhost","root","","moviedb");
$sql="select * from tbl_movies";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res))
 {
		
echo $row['id']."<br>";

}
?>
</td>

<td>
		
<?php
$con=mysqli_connect("localhost","root","","moviedb");
$sql="select * from tbl_movies";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res))
 {
		
echo $row['name']."<br>";

}
?>
</td>
<td>
		
<?php
$con=mysqli_connect("localhost","root","","moviedb");
$sql="select * from tbl_movies";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res))
 {
		
echo $row['director']."<br>";

}
?>
</td>

<td>
		
<?php
$con=mysqli_connect("localhost","root","","moviedb");
$sql="select * from tbl_movies";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res))
 {
		
echo $row['writer']."<br>";

}
?>
</td>
<td>
		
<?php
$con=mysqli_connect("localhost","root","","moviedb");
$sql="select * from tbl_movies";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res))
 {
		
echo $row['producer']."<br>";

}
?>
</td>

			

<td>
		
<?php
$con=mysqli_connect("localhost","root","","moviedb");
$sql="select * from tbl_movies";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res))
 {
		
echo $row['releasedate']."<br>";

}
?>
</td>





</tr>
</table>

</body>
</html>
