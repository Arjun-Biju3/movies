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
	<a href="deletecomment.php" style="text-decoration:none">DELETE COMMENT</a>
	
</div>
</form>
<br>
<br>
<table border="1px" cellspacing="5px" cellpadding="10px">
	<tr>
		<th>CID</th>
		<th>TITLE</th>
		<th>COMMENT</th>
		<th>USER</th>
		<th>MOVIE ID</th>
		
	</tr>
	<tr>
		<td>
			<?php
$con=mysqli_connect("localhost","root","","moviedb");
$sql="select * from tbl_comment";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res))
 {
		
echo $row['cid']."<br>";

}
?>
</td>

<td>
		
<?php
$con=mysqli_connect("localhost","root","","moviedb");
$sql="select * from tbl_comment";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res))
 {
		
echo $row['title']."<br>";

}
?>
</td>
<td>
		
<?php
$con=mysqli_connect("localhost","root","","moviedb");
$sql="select * from tbl_comment";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res))
 {
		
echo $row['comment']."<br>";

}
?>
</td>

<td>
		
<?php
$con=mysqli_connect("localhost","root","","moviedb");
$sql="select * from tbl_comment";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res))
 {
		
echo $row['username']."<br>";

}
?>
</td>
<td>
		
<?php
$con=mysqli_connect("localhost","root","","moviedb");
$sql="select * from tbl_comment";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res))
 {
		
echo $row['id']."<br>";

}
?>
</td>

			







</tr>
</table>

</body>
</html>
